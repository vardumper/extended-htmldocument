<?php

declare(strict_types=1);

namespace Html\TemplateGenerator;

use Html\Interface\HTMLDocumentDelegatorInterface;
use Html\Interface\HTMLElementDelegatorInterface;
use Html\Interface\TemplateGeneratorInterface;
use Html\Mapping\TemplateGenerator;
use ReflectionClass;
use ReflectionEnum;
use ReflectionNamedType;

/**
 * XSLTGenerator — Generates XSLT 1.0 stylesheets for DOM-ORM XML entities.
 *
 * Generated files:
 *   templates/xslt/{block|inline|void}/{element}/styles.xsl  — per-element XSL template
 *   templates/xslt/{block|inline|void}/{element}/data.xml    — example XML with all attributes
 *   templates/xslt/main.xsl                                  — master import file
 *
 * Usage:
 *   bin/ext-html generate:all xslt templates/ --overwrite-existing=1
 */
#[TemplateGenerator('xslt')]
class XSLTGenerator implements TemplateGeneratorInterface
{
    private const SKIP_PROPERTY_NAMES = [
        'delegated',
        'formatOutput',
        'ownerDocument',
        'dataAttributes',
        'alpineAttributes',
    ];

    private const SKIP_DECLARING_CLASSES = [
        'Html\Delegator\HTMLElementDelegator',
        'Html\Element\BlockElement',
        'Html\Element\InlineElement',
        'Html\Element\VoidElement',
    ];

    /**
     * @var array<array{0: string, 1: string}>
     */
    private array $renderedElements = [];

    public function getExtension(): string
    {
        return 'xsl';
    }

    public function getNamePattern(): string
    {
        return 'styles.{extension}';
    }

    public function canRenderElements(): bool
    {
        return true;
    }

    public function canRenderDocuments(): bool
    {
        return false;
    }

    public function isTemplated(): bool
    {
        return false;
    }

    public function render(HTMLElementDelegatorInterface|HTMLDocumentDelegatorInterface $elementOrDocument): ?string
    {
        if (! ($elementOrDocument instanceof HTMLElementDelegatorInterface)) {
            return null;
        }

        return $this->renderElement($elementOrDocument);
    }

    public function renderDataXml(HTMLElementDelegatorInterface $element): string
    {
        $elementName = $element::QUALIFIED_NAME;
        $reflection = new ReflectionClass($element);
        $attrMap = $this->buildAttributeMap($reflection);

        $lines = [];
        $lines[] = '<?xml version="1.0" encoding="UTF-8"?>';
        $lines[] = '<!--';
        $lines[] = '    This file is auto-generated. Do not edit manually.';
        $lines[] = '    Example XML data for the <' . $elementName . '> element.';
        $lines[] = '    @see src/TemplateGenerator/XSLTGenerator.php';
        $lines[] = '-->';
        $lines[] = '<item type="' . $elementName . '" id="example-' . $elementName . '">';

        foreach ($attrMap as $propName => $info) {
            $htmlAttr = $info['attr'];
            $enumValues = $info['enumValues'];
            $exampleValue = $enumValues !== null
                ? $enumValues[0]
                : match ($htmlAttr) {
                    'id' => 'example-' . $elementName . '-id',
                    'class' => 'example-class',
                    'style' => 'color: inherit',
                    'href' => 'https://example.com',
                    'src' => 'https://example.com/image.jpg',
                    'alt' => 'Example image',
                    'type' => 'text',
                    'name' => 'example-name',
                    'value' => 'example-value',
                    'lang' => 'en',
                    default => 'example-' . $htmlAttr,
                };
            $lines[] = '    <fragment name="' . $propName . '"><![CDATA[' . $exampleValue . ']]></fragment>';
        }

        $lines[] = '</item>';

        return implode("\n", $lines) . "\n";
    }

    public function renderMainXsl(): string
    {
        $byLevel = [
            'block' => [],
            'inline' => [],
            'void' => [],
        ];
        foreach ($this->renderedElements as [$level, $name]) {
            $byLevel[$level][] = $name;
        }

        foreach ($byLevel as &$names) {
            sort($names);
        }
        unset($names);

        $lines = [];
        $lines[] = '<?xml version="1.0" encoding="UTF-8"?>';
        $lines[] = '<!--';
        $lines[] = '    This file is auto-generated. Do not edit manually.';
        $lines[] = '';
        $lines[] = '    Import this into your project\'s main.xsl to get all HTML5 XSLT templates.';
        $lines[] = '';
        $lines[] = '    Usage:';
        $lines[] = '        <xsl:import href="path/to/templates/xslt/main.xsl"/>';
        $lines[] = '-->';
        $lines[] = '<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">';
        $lines[] = '';

        foreach ($byLevel as $level => $names) {
            if (empty($names)) {
                continue;
            }
            $lines[] = '    <!-- ' . ucfirst($level) . ' elements -->';
            foreach ($names as $name) {
                $lines[] = '    <xsl:import href="' . $level . '/' . $name . '/styles.xsl"/>';
            }
            $lines[] = '';
        }

        $lines[] = '</xsl:stylesheet>';

        return implode("\n", $lines) . "\n";
    }

    private function renderElement(HTMLElementDelegatorInterface $element): string
    {
        $elementName = $element::QUALIFIED_NAME;
        $isSelfClosing = $element::SELF_CLOSING;
        $reflection = new ReflectionClass($element);
        $level = $this->determineLevel($element);

        $this->renderedElements[] = [$level, $elementName];

        $attrMap = $this->buildAttributeMap($reflection);

        // Resolve allowed child tag names from $parentOf class list.
        $parentOfTypes = [];
        foreach ($element::$parentOf as $childClass) {
            if (is_string($childClass) && class_exists($childClass) && defined($childClass . '::QUALIFIED_NAME')) {
                $parentOfTypes[] = $childClass::QUALIFIED_NAME;
            }
        }
        $parentOfTypes = array_values(array_unique($parentOfTypes));

        return $this->buildStylesXsl($elementName, $attrMap, $isSelfClosing, $parentOfTypes);
    }

    private function buildStylesXsl(
        string $elementName,
        array $attrMap,
        bool $isSelfClosing,
        array $parentOfTypes = []
    ): string {
        $lines = [];
        $lines[] = '<?xml version="1.0" encoding="UTF-8"?>';
        $lines[] = '<!--';
        $lines[] = '    This file is auto-generated. Do not edit manually.';
        $lines[] = '    @see src/TemplateGenerator/XSLTGenerator.php';
        $lines[] = '-->';
        $lines[] = '<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">';
        $lines[] = '    <xsl:output method="html" indent="yes" encoding="UTF-8"/>';
        $lines[] = '';
        $lines[] = '    <xsl:template match="item[@type=\'' . $elementName . '\']">';
        $lines[] = '        <xsl:element name="' . $elementName . '">';

        // Entity ID (@id on <item>) maps to the HTML id attribute.
        $lines[] = '            <xsl:if test="@id">';
        $lines[] = '                <xsl:attribute name="id"><xsl:value-of select="@id"/></xsl:attribute>';
        $lines[] = '            </xsl:if>';

        foreach ($attrMap as $propName => $info) {
            $htmlAttr = $info['attr'];
            $enumValues = $info['enumValues'];

            if ($enumValues !== null) {
                // XSLT 1.0 allow-list check via contains() on a pipe-delimited string.
                $allowList = '|' . implode('|', $enumValues) . '|';
                $test = "fragment[@name='{$propName}'] and contains('{$allowList}', concat('|', fragment[@name='{$propName}'], '|'))";
            } else {
                $test = "fragment[@name='{$propName}']";
            }

            $lines[] = '            <xsl:if test="' . $test . '">';
            $lines[] = '                <xsl:attribute name="' . $htmlAttr . '">';
            $lines[] = '                    <xsl:value-of select="fragment[@name=\'' . $propName . '\']"/>';
            $lines[] = '                </xsl:attribute>';
            $lines[] = '            </xsl:if>';
        }

        if (! $isSelfClosing) {
            if (! empty($parentOfTypes)) {
                // Restrict to declared allowed child types only.
                $typeTests = implode(' or ', array_map(fn ($t) => "@type='{$t}'", $parentOfTypes));
                $lines[] = '            <xsl:apply-templates select="item[' . $typeTests . ']"/>';
            } else {
                $lines[] = '            <xsl:apply-templates select="item"/>';
            }
        }

        $lines[] = '        </xsl:element>';
        $lines[] = '    </xsl:template>';
        $lines[] = '';
        $lines[] = '</xsl:stylesheet>';

        return implode("\n", $lines) . "\n";
    }

    /**
     * Build a map of [phpPropertyName => ['attr' => htmlAttrName, 'enumValues' => string[]|null]].
     * When enumValues is non-null the generated XSL validates against those allowed values.
     *
     * @return array<string, array{attr: string, enumValues: string[]|null}>
     */
    private function buildAttributeMap(ReflectionClass $reflection): array
    {
        // 'class' is a native PHP DOM property; add it first.
        // 'id' is excluded — it maps from <item @id> directly in the XSL template.
        $map = [
            'class' => [
                'attr' => 'class',
                'enumValues' => null,
            ],
        ];

        $properties = array_filter(
            $reflection->getProperties(),
            fn ($p) => ! $p->isStatic()
                && ! in_array($p->getName(), self::SKIP_PROPERTY_NAMES, true)
                && ! in_array($p->getDeclaringClass()->getName(), self::SKIP_DECLARING_CLASSES, true)
        );

        foreach ($properties as $property) {
            $propName = $property->getName();
            if (isset($map[$propName])) {
                continue;
            }

            $enumValues = null;
            $type = $property->getType();
            if ($type instanceof ReflectionNamedType && ! $type->isBuiltin()) {
                $typeName = $type->getName();
                if (enum_exists($typeName)) {
                    $enumValues = array_map(
                        fn ($case) => $case->getValue()
                            ->value,
                        (new ReflectionEnum($typeName))->getCases()
                    );
                }
            }

            $map[$propName] = [
                'attr' => $this->propertyToAttr($propName),
                'enumValues' => $enumValues,
            ];
        }

        return $map;
    }

    /**
     * Convert a camelCase PHP property name to a kebab-case HTML attribute name.
     * e.g. ariaControls → aria-controls
     */
    private function propertyToAttr(string $name): string
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '-$0', $name));
    }

    private function determineLevel(HTMLElementDelegatorInterface $element): string
    {
        $parent = (new ReflectionClass($element))->getParentClass();
        $parts = explode('\\', $parent->getName());
        return strtolower(str_replace('Element', '', end($parts)));
    }
}
