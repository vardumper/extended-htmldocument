<?php

namespace Html\TemplateGenerator;

use Html\Interface\HTMLElementDelegatorInterface;
use Html\Interface\TemplateGeneratorInterface;
use Html\Mapping\TemplateGenerator;
use ReflectionClass;
use ReflectionNamedType;
use ReflectionUnionType;
use Symfony\Component\Yaml\Yaml;

#[TemplateGenerator('twig-component')]
class TwigComponentsGenerator implements TemplateGeneratorInterface
{
    private const TWIG_RESERVED_WORDS = [
        'is', 'in', 'for', 'if', 'true', 'false', 'none', 'and', 'or', 'not',
        'loop', 'else', 'as', 'empty', 'with', 'block', 'endblock', 'set',
        'extends', 'include', 'import', 'from', 'macro', 'filter', 'autoescape',
        'endautoescape', 'embed', 'endembed', 'use', 'verbatim', 'endverbatim',
        'do', 'flush', 'sandbox', 'endsandbox', 'props',
    ];

    public function getExtension(): string
    {
        return 'html.twig';
    }

    public function getNamePattern(): string
    {
        return '{Component}.{extension}';
    }

    public function getComponentClassPattern(): string
    {
        return '{Component}.php';
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

    public function render($elementOrDocument): ?string
    {
        if ($elementOrDocument instanceof HTMLElementDelegatorInterface && $this->canRenderElements()) {
            return $this->renderElement($elementOrDocument);
        }

        return null;
    }

    /**
     * Generate a Symfony UX Twig Component template and PHP class
     *
     * Creates a Twig Component with PHP class for validation and type safety.
     */
    public function renderElement(HTMLElementDelegatorInterface $element): string
    {
        // Generate the template
        return $this->renderTemplate($element);
    }

    /**
     * Generate the PHP component class
     */
    public function renderComponentClass(HTMLElementDelegatorInterface $element): string
    {
        $ref = new ReflectionClass($element);
        $elementName = $ref->hasConstant('QUALIFIED_NAME')
            ? $ref->getConstant('QUALIFIED_NAME')
            : strtolower($ref->getShortName());

        $componentName = ucfirst($elementName);
        $props = [];
        $enums = [];
        $enumClasses = [];

        // Collect all properties with getter and setter
        foreach ($ref->getProperties() as $prop) {
            $name = $prop->getName();
            $getter = 'get' . ucfirst($name);
            $setter = 'set' . ucfirst($name);

            if ($ref->hasMethod($getter) && $ref->hasMethod($setter)) {
                $type = $prop->getType();
                $phpType = '?string';
                $enumClass = null;

                if ($type instanceof ReflectionUnionType) {
                    foreach ($type->getTypes() as $unionType) {
                        if ($unionType instanceof ReflectionNamedType && enum_exists($unionType->getName())) {
                            $enumClassName = $unionType->getName();
                            $enumClass = $enumClassName;
                            $shortEnumName = basename(str_replace('\\', '/', $enumClassName));
                            $phpType = '?' . $shortEnumName;
                            $choices = array_map(fn($case) => $case->value, $enumClassName::cases());
                            $enums[$name] = $choices;
                            $enumClasses[$name] = $enumClassName;
                        }
                    }
                } elseif ($type && $type instanceof ReflectionNamedType && enum_exists($type->getName())) {
                    $enumClassName = $type->getName();
                    $enumClass = $enumClassName;
                    $shortEnumName = basename(str_replace('\\', '/', $enumClassName));
                    $phpType = '?' . $shortEnumName;
                    $choices = array_map(fn($case) => $case->value, $enumClassName::cases());
                    $enums[$name] = $choices;
                    $enumClasses[$name] = $enumClassName;
                } elseif ($type instanceof ReflectionNamedType) {
                    $phpType = '?' . $type->getName();
                }

                $props[$name] = [
                    'type' => $phpType,
                    'enumClass' => $enumClass,
                ];
            }
        }

        // Add global attributes
        $globalAttrs = ['id', 'class'];
        foreach ($globalAttrs as $gAttr) {
            $getter = 'get' . ucfirst($gAttr);
            if (method_exists($element, $getter) && !isset($props[$gAttr])) {
                $props[$gAttr] = ['type' => '?string', 'enumClass' => null];
            }
        }

        // Read element metadata from YAML
        $yamlPath = __DIR__ . '/../Resources/specifications/html5-with-aria.yaml';
        if (!is_readable($yamlPath)) {
            $yamlPath = __DIR__ . '/../Resources/specifications/html5.yaml';
        }
        $yaml = is_readable($yamlPath) ? Yaml::parseFile($yamlPath) : [];
        $meta = $yaml[strtolower($elementName)] ?? [];

        $name = $meta['name'] ?? ucfirst($elementName);
        $desc = $meta['description'] ?? '';

        // Build PHP class
        $php = "<?php\n\n";
        $php .= "namespace App\\Twig\\Components;\n\n";

        // Add use statements for enums
        $uniqueEnumClasses = array_unique(array_filter(array_column($props, 'enumClass')));
        foreach ($uniqueEnumClasses as $enumClass) {
            $php .= "use {$enumClass};\n";
        }

        $php .= "use Symfony\\UX\\TwigComponent\\Attribute\\AsTwigComponent;\n";
        $php .= "use Symfony\\UX\\TwigComponent\\Attribute\\PreMount;\n";
        $php .= "use Symfony\\Component\\OptionsResolver\\OptionsResolver;\n\n";

        $php .= "/**\n";
        $php .= " * {$name} - {$desc}\n";
        $php .= " *\n";
        $php .= " * @author vardumper <info@erikpoehler.com>\n";
        $php .= " * @package vardumper/extended-htmldocument\n";
        $php .= " * @see src/TemplateGenerator/TwigComponentsGenerator.php\n";
        $php .= " */\n";
        $php .= "#[AsTwigComponent('{$componentName}')]\n";
        $php .= "class {$componentName}\n";
        $php .= "{\n";

        // Add public properties
        foreach ($props as $propName => $propData) {
            $php .= "    public {$propData['type']} \${$propName} = null;\n";
        }

        $php .= "\n";
        $php .= "    #[PreMount]\n";
        $php .= "    public function preMount(array \$data): array\n";
        $php .= "    {\n";
        $php .= "        \$resolver = new OptionsResolver();\n";
        $php .= "        \$resolver->setIgnoreUndefined(true);\n\n";

        // Define allowed types and values for each prop
        foreach ($props as $propName => $propData) {
            if ($propData['enumClass']) {
                $enumClassName = basename(str_replace('\\', '/', $propData['enumClass']));
                $php .= "        \$resolver->setAllowedTypes('{$propName}', ['null', 'string', {$enumClassName}::class]);\n";
                $php .= "        \$resolver->setNormalizer('{$propName}', function (\$options, \$value) {\n";
                $php .= "            if (is_string(\$value)) {\n";
                $php .= "                return {$enumClassName}::tryFrom(\$value);\n";
                $php .= "            }\n";
                $php .= "            return \$value;\n";
                $php .= "        });\n";
            } else {
                $php .= "        \$resolver->setAllowedTypes('{$propName}', ['null', 'string']);\n";
            }
        }

        $php .= "\n";
        $php .= "        return \$resolver->resolve(\$data) + \$data;\n";
        $php .= "    }\n";
        $php .= "}\n";

        return $php;
    }

    /**
     * Generate the Twig template
     */
    private function renderTemplate(HTMLElementDelegatorInterface $element): string
    {
        $ref = new ReflectionClass($element);
        $elementName = $ref->hasConstant('QUALIFIED_NAME')
            ? $ref->getConstant('QUALIFIED_NAME')
            : strtolower($ref->getShortName());

        $props = [];
        $enums = [];

        // Collect all properties with getter and setter
        foreach ($ref->getProperties() as $prop) {
            $name = $prop->getName();
            $getter = 'get' . ucfirst($name);
            $setter = 'set' . ucfirst($name);

            if ($ref->hasMethod($getter) && $ref->hasMethod($setter)) {
                $type = $prop->getType();

                if ($type instanceof ReflectionUnionType) {
                    foreach ($type->getTypes() as $unionType) {
                        if ($unionType instanceof ReflectionNamedType && enum_exists($unionType->getName())) {
                            $choices = array_map(fn($case) => $case->value, $unionType->getName()::cases());
                            $enums[$name] = [
                                'choices' => $choices,
                                'default' => $choices[0] ?? null,
                            ];
                        }
                    }
                } elseif ($type && $type instanceof ReflectionNamedType && enum_exists($type->getName())) {
                    $choices = array_map(fn($case) => $case->value, $type->getName()::cases());
                    $enums[$name] = [
                        'choices' => $choices,
                        'default' => $choices[0] ?? null,
                    ];
                }

                $props[] = $name;
            }
        }

        // Add global attributes
        $globalAttrs = ['id', 'class'];
        foreach ($globalAttrs as $gAttr) {
            $getter = 'get' . ucfirst($gAttr);
            if (method_exists($element, $getter)) {
                $props[] = $gAttr;
            }
        }

        sort($props, \SORT_NATURAL | \SORT_FLAG_CASE);

        $isSelfClosing = $ref->hasConstant('SELF_CLOSING') && $ref->getConstant('SELF_CLOSING');

        // Read element metadata from YAML
        $yamlPath = __DIR__ . '/../Resources/specifications/html5-with-aria.yaml';
        if (!is_readable($yamlPath)) {
            $yamlPath = __DIR__ . '/../Resources/specifications/html5.yaml';
        }
        $yaml = is_readable($yamlPath) ? Yaml::parseFile($yamlPath) : [];
        $meta = $yaml[strtolower($elementName)] ?? [];

        $name = $meta['name'] ?? ucfirst($elementName);
        $desc = $meta['description'] ?? '';

        // Build Twig Component template
        $twig = "{#\n";
        $twig .= "  This file is auto-generated.\n\n";
        $twig .= "  {$name} - {$desc}\n\n";
        $twig .= "  Symfony UX Twig Component (Anonymous)\n";
        $twig .= "  @see https://symfony.com/bundles/ux-twig-component/current/index.html\n\n";
        $twig .= "  Usage:\n";
        $twig .= "    <twig:" . ucfirst($elementName);

        // Add example usage
        $exampleProps = [];
        foreach ($props as $attr) {
            if ($attr === 'id') {
                $exampleProps[] = 'id="my-' . $elementName . '"';
            } elseif ($attr === 'class') {
                $exampleProps[] = 'class="custom-class"';
            } elseif (isset($enums[$attr])) {
                $exampleProps[] = $attr . '="' . $enums[$attr]['default'] . '"';
            }
        }

        if (!empty($exampleProps)) {
            $twig .= ' ' . implode(' ', array_slice($exampleProps, 0, 2));
        }

        if ($isSelfClosing) {
            $twig .= " />\n";
        } else {
            $twig .= ">\n";
            $twig .= "      Content goes here\n";
            $twig .= "    </twig:" . ucfirst($elementName) . ">\n";
        }

        $twig .= "\n  @author vardumper <info@erikpoehler.com>\n";
        $twig .= "  @package vardumper/extended-htmldocument\n";
        $twig .= "  @see src/TemplateGenerator/TwigComponentsGenerator.php\n";
        $twig .= "#}\n";

        // Build the element - no props tag needed, component class handles it
        $twig .= "<{$elementName}";

        // Render attributes conditionally
        foreach ($props as $attr) {
            $isEnum = isset($enums[$attr]);
            $htmlAttr = $this->camelToKebab($attr);

            // All attributes are rendered via the component properties
            // Enums will be validated and converted by PreMount
            if ($isEnum) {
                $twig .= "\n  {% if this.{$attr} is not null %}{$htmlAttr}=\"{{ this.{$attr}.value }}\"{% endif %}";
            } else {
                $twig .= "\n  {% if this.{$attr} is defined and this.{$attr} is not null %}{$htmlAttr}=\"{{ this.{$attr} }}\"{% endif %}";
            }
        }

        // Add remaining attributes using the attributes variable
        $twig .= "\n  {{ attributes }}";

        if ($isSelfClosing) {
            $twig .= "\n/>\n";
        } else {
            $twig .= "\n>\n";
            $twig .= "  {% block content %}{% endblock %}\n";
            $twig .= "</{$elementName}>\n";
        }

        return $twig;
    }

    /**
     * Generate a composed Twig Component showing valid parent-child relationships
     */
    public function renderComposedElement(HTMLElementDelegatorInterface $element): ?string
    {
        $ref = new ReflectionClass($element);

        // Get content model metadata
        $parentOf = $ref->getStaticPropertyValue('parentOf', []);

        // Only generate composed templates for elements with specific allowed children
        if (empty($parentOf)) {
            return null;
        }

        $elementName = $ref->hasConstant('QUALIFIED_NAME')
            ? $ref->getConstant('QUALIFIED_NAME')
            : strtolower($ref->getShortName());

        // Skip generic containers
        $excludedElements = [
            'div', 'article', 'aside', 'section', 'nav', 'header', 'footer', 'main',
            'blockquote', 'p', 'dialog', 'dd', 'legend', 'li', 'mark', 'slot',
        ];

        if (in_array($elementName, $excludedElements, true)) {
            return null;
        }

        // Read element metadata from YAML
        $yamlPath = __DIR__ . '/../Resources/specifications/html5-with-aria.yaml';
        if (!is_readable($yamlPath)) {
            $yamlPath = __DIR__ . '/../Resources/specifications/html5.yaml';
        }
        $yaml = is_readable($yamlPath) ? Yaml::parseFile($yamlPath) : [];
        $meta = $yaml[strtolower($elementName)] ?? [];

        $name = $meta['name'] ?? ucfirst($elementName);
        $desc = $meta['description'] ?? '';

        return $this->buildComposedTemplate($elementName, $name, $desc, $parentOf);
    }

    /**
     * Build a composed Twig Component template showing parent-child relationships
     */
    private function buildComposedTemplate(
        string $elementName,
        string $name,
        string $description,
        array $parentOf
    ): string {
        $componentName = ucfirst($elementName);

        $twig = "{#\n";
        $twig .= "  This file is auto-generated.\n\n";
        $twig .= "  {$name} - Composed Example\n";
        $twig .= "  {$description}\n\n";
        $twig .= "  Demonstrates nested Twig Components\n";
        $twig .= "  @see https://symfony.com/bundles/ux-twig-component/current/index.html#nested-components\n\n";

        if (!empty($parentOf)) {
            $parentOfNames = array_map(function($class) {
                return (new ReflectionClass($class))->getShortName();
            }, $parentOf);
            $twig .= '  Can contain: ' . implode(', ', $parentOfNames) . "\n";
        }

        $twig .= "\n  @author vardumper <info@erikpoehler.com>\n";
        $twig .= "  @package vardumper/extended-htmldocument\n";
        $twig .= "  @see src/TemplateGenerator/TwigComponentsGenerator.php\n";
        $twig .= "#}\n";

        // Build nested component structure
        $twig .= "<twig:{$componentName} class=\"example\">\n";

        // Generate child components based on content model
        $children = $this->collectChildrenForComposedTemplate($parentOf);

        foreach ($children as $child) {
            $twig .= "  {$child['twigCode']}";
        }

        $twig .= "</twig:{$componentName}>\n";

        return $twig;
    }

    /**
     * Collect and generate Twig component code for child elements
     */
    private function collectChildrenForComposedTemplate(array $parentOf): array
    {
        $children = [];
        $maxChildren = 3;
        $rendered = 0;

        foreach ($parentOf as $childClass) {
            if ($rendered >= $maxChildren) {
                break;
            }

            $childRef = new ReflectionClass($childClass);
            $childElementName = $childRef->hasConstant('QUALIFIED_NAME')
                ? $childRef->getConstant('QUALIFIED_NAME')
                : strtolower($childRef->getShortName());

            $childComponentName = ucfirst($childElementName);
            $isSelfClosing = $childRef->hasConstant('SELF_CLOSING') && $childRef->getConstant('SELF_CLOSING');

            $twigCode = '';

            if ($isSelfClosing) {
                // Self-closing elements
                if ($childElementName === 'input') {
                    $twigCode = "<twig:{$childComponentName} type=\"text\" name=\"example\" />\n";
                } elseif ($childElementName === 'img') {
                    $twigCode = "<twig:{$childComponentName} src=\"/image.jpg\" alt=\"Example\" />\n";
                } else {
                    $twigCode = "<twig:{$childComponentName} />\n";
                }
            } else {
                // Elements with content
                $content = match($childElementName) {
                    'li' => 'List item',
                    'option' => 'Option text',
                    'button' => 'Click me',
                    'label' => 'Label text',
                    default => 'Content',
                };
                $twigCode = "<twig:{$childComponentName}>{$content}</twig:{$childComponentName}>\n";
            }

            $children[] = ['twigCode' => $twigCode];
            $rendered++;
        }

        return $children;
    }

    /**
     * Convert camelCase to kebab-case
     */
    private function camelToKebab(string $string): string
    {
        return strtolower(preg_replace('/([a-z])([A-Z])/', '$1-$2', $string));
    }
}
