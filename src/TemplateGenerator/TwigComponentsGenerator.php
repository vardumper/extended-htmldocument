<?php

namespace Html\TemplateGenerator;

use BackedEnum;
use Html\Interface\HTMLElementDelegatorInterface;
use Html\Interface\TemplateGeneratorInterface;
use Html\Mapping\TemplateGenerator;
use ReflectionClass;
use ReflectionNamedType;
use ReflectionUnionType;
use UnitEnum;

/**
 * TwigComponentsGenerator - Generates Symfony UX Twig Components
 *
 * Creates PHP component classes with PreMount validation and corresponding
 * Twig templates for use with Symfony UX Twig Component 2.x. Each component
 * includes type safety through OptionsResolver, enum normalization, and
 * automatic attribute mapping.
 *
 * Generated structure:
 * - PHP Classes: src/Twig/{Block|Inline|Void}/ComponentName.php
 * - Templates: src/Resources/{block|inline|void}/element-name/element-name.html.twig
 *
 * Features:
 * - Grouped use statements for enums
 * - PreMount hooks with type validation
 * - Enum string normalization (string -> EnumClass)
 * - Union type support (null|string|bool)
 * - Global attribute handling (id, class)
 *
 * @see https://symfony.com/bundles/ux-twig-component/current/index.html
 */
#[TemplateGenerator('twig-component')]
class TwigComponentsGenerator implements TemplateGeneratorInterface
{
    // @phpstan-ignore-next-line - reserved words constant is kept for future use
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

        $componentName = $this->getComponentClassName(ucfirst($elementName));

        // Determine the level (Block, Inline, or Void)
        $level = $this->determineComponentLevel($ref->getName());
        $levelNamespace = ucfirst($level);

        $props = [];
        $enums = [];
        $enumClasses = [];

        // Collect all properties with getter and setter
        foreach ($ref->getProperties() as $prop) {
            $name = $prop->getName();
            $getter = 'get' . ucfirst($name);
            $setter = 'set' . ucfirst($name);

            if ($ref->hasMethod($getter) && $ref->hasMethod($setter)) {
                // Get the setter method to check its parameter types (more accurate than property type)
                $setterMethod = $ref->getMethod($setter);
                $setterParams = $setterMethod->getParameters();

                // Use setter's first parameter type if available, otherwise fall back to property type
                $type = ! empty($setterParams) ? $setterParams[0]->getType() : $prop->getType();

                $phpType = '?string';
                $enumClass = null;
                $allowedTypes = ['null', 'string'];
                $needsNormalizer = false;

                if ($type instanceof ReflectionUnionType) {
                    $types = [];
                    $hasEnum = false;
                    foreach ($type->getTypes() as $unionType) {
                        if ($unionType instanceof ReflectionNamedType) {
                            $typeName = $unionType->getName();
                            if (enum_exists($typeName)) {
                                $enumClassName = $typeName;
                                $enumClass = $enumClassName;
                                $shortEnumName = basename(str_replace('\\', '/', $enumClassName));
                                $phpType = '?' . $shortEnumName;
                                $choices = array_map(
                                    fn (UnitEnum $case) => $case instanceof BackedEnum ? $case->value : $case->name,
                                    $enumClassName::cases()
                                );
                                $enums[$name] = $choices;
                                $enumClasses[$name] = $enumClassName;
                                $hasEnum = true;
                                $needsNormalizer = true;
                            } else {
                                $types[] = $typeName;
                            }
                        }
                    }

                    if ($hasEnum) {
                        // If it's an enum, allow null, string, and the enum class
                        $shortEnumName = basename(str_replace('\\', '/', $enumClass));
                        $allowedTypes = ['null', 'string', $shortEnumName . '::class'];
                    } elseif (! empty($types)) {
                        // Union type without enum - use the actual types with null as part of union
                        $phpType = 'null|' . implode('|', $types);
                        $allowedTypes = array_merge(['null'], $types);
                    }
                } elseif ($type && $type instanceof ReflectionNamedType) {
                    $typeName = $type->getName();
                    if (enum_exists($typeName)) {
                        $enumClassName = $typeName;
                        $enumClass = $enumClassName;
                        $shortEnumName = basename(str_replace('\\', '/', $enumClassName));
                        $phpType = '?' . $shortEnumName;
                        $choices = array_map(
                            fn (UnitEnum $case) => $case instanceof BackedEnum ? $case->value : $case->name,
                            $enumClassName::cases()
                        );
                        $enums[$name] = $choices;
                        $enumClasses[$name] = $enumClassName;
                        $allowedTypes = ['null', 'string', $shortEnumName . '::class'];
                        $needsNormalizer = true;
                    } else {
                        // Use the actual type from the setter parameter
                        // For the property type, use the property's actual type (e.g., ?bool)
                        $propType = $prop->getType();
                        if ($propType instanceof ReflectionNamedType) {
                            $phpType = ($propType->allowsNull() ? '?' : '') . $propType->getName();
                        } else {
                            $phpType = ($type->allowsNull() ? '?' : '') . $typeName;
                        }

                        // For validation, use setter's accepted types
                        $allowedTypes = $type->allowsNull() ? ['null', $typeName] : [$typeName];
                    }
                }

                $props[$name] = [
                    'type' => $phpType,
                    'enumClass' => $enumClass,
                    'allowedTypes' => $allowedTypes,
                    'needsNormalizer' => $needsNormalizer,
                ];
            }
        }

        // Add global attributes
        $globalAttrs = ['id', 'class'];
        foreach ($globalAttrs as $gAttr) {
            $getter = 'get' . ucfirst($gAttr);
            if (method_exists($element, $getter) && ! isset($props[$gAttr])) {
                $props[$gAttr] = [
                    'type' => '?string',
                    'enumClass' => null,
                    'allowedTypes' => ['null', 'string'],
                    'needsNormalizer' => false,
                ];
            }
        }

        // Get element metadata from class-level doc comment
        $docComment = $ref->getDocComment();
        $desc = '';
        if ($docComment !== false) {
            // Extract description from class docblock (first line of content)
            if (preg_match('/\/\*\*\s*\n\s*\*\s*(.+?)\s*\n/s', $docComment, $matches)) {
                $desc = trim($matches[1]);
            }
        }
        $name = ucfirst($elementName);

        // Build PHP class
        $php = "<?php\n\n";
        $php .= "namespace Html\\TwigComponentBundle\\Twig\\{$levelNamespace};\n\n";

        // Add use statements for enums (grouped)
        $uniqueEnumClasses = array_unique(array_filter(array_column($props, 'enumClass')));
        if (! empty($uniqueEnumClasses)) {
            $php .= "use Html\\Enum\\{\n";
            $enumShortNames = array_map(function ($enumClass) {
                return '    ' . basename(str_replace('\\', '/', $enumClass));
            }, $uniqueEnumClasses);
            $php .= implode(",\n", $enumShortNames);
            $php .= ",\n};\n";
        }

        $php .= "use Symfony\\UX\\TwigComponent\\Attribute\\AsTwigComponent;\n";
        $php .= "use Symfony\\UX\\TwigComponent\\Attribute\\PreMount;\n";
        $php .= "use Symfony\\Component\\OptionsResolver\\OptionsResolver;\n\n";

        $php .= "/**\n";
        $php .= " * {$name} - {$desc}\n";
        $php .= " *\n";
        $php .= " * @author vardumper <info@erikpoehler.com>\n";
        $php .= " * @package Html\\TwigComponentBundle\n";
        $php .= " * @see https://github.com/vardumper/extended-htmldocument\n";
        $php .= " */\n";
        $php .= "#[AsTwigComponent('{$componentName}', template: '@HtmlTwigComponent/{$level}/{$elementName}/{$elementName}.html.twig')]\n";
        $php .= "class {$componentName}\n";
        $php .= "{\n";

        // Add public properties
        foreach ($props as $propName => $propData) {
            // Extract just the class name from the full type string
            $typeDeclaration = $propData['type'];
            $defaultValue = 'null';

            if ($propData['enumClass']) {
                $shortName = basename(str_replace('\\', '/', $propData['enumClass']));
                $typeDeclaration = '?' . $shortName;
            }

            $php .= "    public {$typeDeclaration} \${$propName} = {$defaultValue};\n";
        }

        $php .= "\n";
        $php .= "    #[PreMount]\n";
        $php .= "    public function preMount(array \$data): array\n";
        $php .= "    {\n";
        $php .= "        \$resolver = new OptionsResolver();\n";
        $php .= "        \$resolver->setIgnoreUndefined(true);\n\n";

        // Define allowed types and values for each prop
        foreach ($props as $propName => $propData) {
            // Format allowed types for setAllowedTypes
            $allowedTypesFormatted = array_map(function ($type) {
                if ($type === 'null') {
                    return "'null'";
                } elseif (str_ends_with($type, '::class')) {
                    return $type;
                }
                return "'{$type}'";
            }, $propData['allowedTypes']);

            if (in_array('null', $propData['allowedTypes'])) {
                $php .= "        \$resolver->setDefaults(['{$propName}' => null]);\n";
            } else {
                $php .= "        \$resolver->setDefined('{$propName}');\n";
            }
            $php .= "        \$resolver->setAllowedTypes('{$propName}', [" . implode(
                ', ',
                $allowedTypesFormatted
            ) . "]);\n";

            if ($propData['needsNormalizer']) {
                $enumClassName = basename(str_replace('\\', '/', $propData['enumClass']));
                $php .= "        \$resolver->setNormalizer('{$propName}', function (\$options, \$value) {\n";
                $php .= "            if (is_string(\$value)) {\n";
                $php .= "                return {$enumClassName}::tryFrom(\$value);\n";
                $php .= "            }\n";
                $php .= "            return \$value;\n";
                $php .= "        });\n";
            }
        }

        $php .= "\n";
        $php .= "        \$resolved = \$resolver->resolve(\$data);\n";
        $php .= "        if (isset(\$data['blocks'])) {\n";
        $php .= "            \$resolved['blocks'] = \$data['blocks'];\n";
        $php .= "        }\n";
        $php .= "        return \$resolved;\n";
        $php .= "    }\n";
        $php .= "}\n";

        return $php;
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

        // Get element metadata from class-level doc comment
        $desc = '';
        $docComment = $ref->getDocComment();
        if ($docComment !== false) {
            // Extract description from class docblock (first line of content)
            if (preg_match('/\/\*\*\s*\n\s*\*\s*(.+?)\s*\n/s', $docComment, $matches)) {
                $desc = trim($matches[1]);
            }
        }
        $name = ucfirst($elementName);

        return $this->buildComposedTemplate($elementName, $name, $desc, $parentOf);
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
                            $choices = array_map(
                                fn (UnitEnum $case) => $case instanceof BackedEnum ? $case->value : $case->name,
                                $unionType->getName()::cases()
                            );
                            $enums[$name] = [
                                'choices' => $choices,
                                'default' => $choices[0] ?? null,
                            ];
                        }
                    }
                } elseif ($type && $type instanceof ReflectionNamedType && enum_exists($type->getName())) {
                    $choices = array_map(
                        fn (UnitEnum $case) => $case instanceof BackedEnum ? $case->value : $case->name,
                        $type->getName()::cases()
                    );
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

        // Get element metadata from class-level doc comment
        $desc = '';
        $docComment = $ref->getDocComment();
        if ($docComment !== false) {
            // Extract description from class docblock (first line of content)
            if (preg_match('/\/\*\*\s*\n\s*\*\s*(.+?)\s*\n/s', $docComment, $matches)) {
                $desc = trim($matches[1]);
            }
        }
        $name = ucfirst($elementName);
        $componentName = $this->getComponentClassName(ucfirst($elementName));

        // Build Twig Component template
        $twig = "{#\n";
        $twig .= "  This file is auto-generated.\n\n";
        $twig .= "  {$name} - {$desc}\n\n";
        $twig .= "  Symfony UX Twig Component (Anonymous)\n";
        $twig .= "  @see https://symfony.com/bundles/ux-twig-component/current/index.html\n\n";
        $twig .= "  Usage:\n";
        $twig .= '    <twig:' . $componentName;

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

        if (! empty($exampleProps)) {
            $twig .= ' ' . implode(' ', array_slice($exampleProps, 0, 2));
        }

        if ($isSelfClosing) {
            $twig .= " />\n";
        } else {
            $twig .= ">\n";
            $twig .= "      Content goes here\n";
            $twig .= '    </twig:' . $componentName . ">\n";
        }

        $twig .= "\n  @author vardumper <info@erikpoehler.com>\n";
        $twig .= "  @package vardumper/extended-htmldocument\n";
        $twig .= "  @see src/TemplateGenerator/TwigComponentsGenerator.php\n";
        $twig .= "#}\n";

        // Build the element - no props tag needed, component class handles it
        $twig .= "{% apply spaceless %}\n";
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

        if ($isSelfClosing) {
            $twig .= "\n/>\n";
        } else {
            $twig .= "\n>\n";
            $twig .= "  {%- block content %}{% endblock -%}\n";
            $twig .= "</{$elementName}>\n";
            $twig .= "{% endapply %}\n";
        }

        return $twig;
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
        $componentName = $this->getComponentClassName(ucfirst($elementName));

        $twig = "{#\n";
        $twig .= "  This file is auto-generated.\n\n";
        $twig .= "  {$name} - Composed Example\n";
        $twig .= "  {$description}\n\n";
        $twig .= "  Demonstrates nested Twig Components\n";
        $twig .= "  @see https://symfony.com/bundles/ux-twig-component/current/index.html#nested-components\n\n";

        if (! empty($parentOf)) {
            $parentOfNames = array_map(function ($class) {
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

            $childComponentName = $this->getComponentClassName(ucfirst($childElementName));
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
                $content = match ($childElementName) {
                    'li' => 'List item',
                    'option' => 'Option text',
                    'button' => 'Click me',
                    'label' => 'Label text',
                    default => 'Content',
                };
                $twigCode = "<twig:{$childComponentName}>{$content}</twig:{$childComponentName}>\n";
            }

            $children[] = [
                'twigCode' => $twigCode,
            ];
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

    /**
     * Determine the component level (block, inline, void) from class name
     */
    private function determineComponentLevel(string $className): string
    {
        if (strpos($className, 'InlineElement') !== false || strpos($className, '\\Element\\Inline\\') !== false) {
            return 'inline';
        }
        if (strpos($className, 'VoidElement') !== false || strpos($className, '\\Element\\Void\\') !== false) {
            return 'void';
        }
        return 'block';
    }

    /**
     * Get safe component class name, avoiding PHP reserved words
     */
    private function getComponentClassName(string $className): string
    {
        $reserved = (new \Html\Helper\Helper())->getReservedWords();
        if (in_array(strtolower($className), $reserved, true)) {
            return $className . 'Element';
        }
        return $className;
    }
}
