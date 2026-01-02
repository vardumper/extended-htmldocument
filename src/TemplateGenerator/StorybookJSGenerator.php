<?php

namespace Html\TemplateGenerator;

use BackedEnum;
use Html\Delegator\HTMLDocumentDelegator;
use Html\Interface\HTMLElementDelegatorInterface;
use Html\Interface\TemplateGeneratorInterface;
use Html\Mapping\TemplateGenerator;
use ReflectionClass;
use ReflectionNamedType;
use ReflectionUnionType;
use Throwable;
use TypeError;
use UnitEnum;

/**
 * StorybookJSGenerator - Generates Storybook Stories for HTML Elements
 *
 * Creates interactive Storybook stories (.stories.js) with full argTypes
 * documentation, controls, and automatic attribute mapping. Stories use
 * native DOM createElement for framework-agnostic component demonstration.
 *
 * Generated structure:
 * - Stories: storybook/{block|inline|void}/element-name.stories.js
 * - Composed: storybook/{block|inline|void}/element-name-composed.stories.js
 *
 * Features:
 * - Automatic argTypes generation with type inference
 * - Control types (text, number, boolean, select for enums)
 * - Default story with all arguments
 * - Boolean attribute handling (only set if true)
 * - Data attribute object spreading
 * - Autodocs integration
 * - Content model documentation in composed stories
 *
 * Story structure:
 * - Default export with meta configuration
 * - argTypes with descriptions and controls
 * - render function using document.createElement
 * - Default story export
 *
 * @see https://storybook.js.org/
 */
#[TemplateGenerator('storybook')]
class StorybookJSGenerator implements TemplateGeneratorInterface
{
    private const JS_RESERVED_WORDS = [
        'break', 'case', 'catch', 'class', 'const', 'continue', 'debugger', 'default',
        'delete', 'do', 'else', 'export', 'extends', 'finally', 'for', 'function',
        'if', 'import', 'in', 'instanceof', 'new', 'return', 'super', 'switch',
        'this', 'throw', 'try', 'typeof', 'var', 'void', 'while', 'with', 'yield',
        'let', 'static', 'enum', 'await', 'implements', 'interface', 'package',
        'private', 'protected', 'public',
    ];

    public function getExtension(): string
    {
        return 'stories.js';
    }

    public function getNamePattern(): string
    {
        return '{component}.{extension}';
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
     * Generate a composed Storybook story showing valid parent-child relationships
     *
     * Creates an interactive story demonstrating the element with its valid children
     * based on content model metadata ($parentOf).
     */
    public function renderComposedElement(HTMLElementDelegatorInterface $element): ?string
    {
        $ref = new ReflectionClass($element);

        $childOf = $ref->getStaticPropertyValue('childOf', []); /* Get content model metadata */
        $parentOf = $ref->getStaticPropertyValue('parentOf', []);

        if (empty($parentOf)) { /* Only generate composed templates for elements with SPECIFIC allowed children; skip elements that can contain any content (empty $parentOf) */
            return null;
        }

        $elementName = $ref->hasConstant('QUALIFIED_NAME') ? $ref->getConstant('QUALIFIED_NAME') : strtolower(
            $ref->getShortName()
        );

        $excludedElements = [
            'div', 'article', 'aside', 'section', 'nav', 'header', 'footer', 'main',
            'blockquote', 'p', 'dialog', 'dd', 'legend', 'li', 'mark', 'slot',
            'svg', 'template', 'thead', 'tbody', 'tfoot', 'tr', 'td', 'th',
            'caption', 'colgroup', 'col', 'fieldset', 'dt', 'optgroup', 'option',
            'figcaption', 'summary', 'rt', 'rp',
        ]; /* Skip generic containers that don't have meaningful composition patterns */

        if (in_array($elementName, $excludedElements, true)) {
            return null;
        }

        $desc = '';
        $docComment = $ref->getDocComment(); /* Get element metadata from class-level doc comment */
        if ($docComment !== false) {
            // Extract description from class docblock (first line of content)
            if (preg_match('/\/\*\*\s*\n\s*\*\s*(.+?)\s*\n/s', $docComment, $matches)) {
                $desc = trim($matches[1]);
            }
        }
        $name = ucfirst($elementName);
        $level = $this->determineLevel($ref->getName());

        return $this->buildComposedStory($elementName, $name, $desc, $level, $ref, $childOf, $parentOf);
    }

    public function renderElement(HTMLElementDelegatorInterface $element): string
    {
        $ref = new ReflectionClass($element);
        $elementName = $ref->hasConstant('QUALIFIED_NAME') ? $ref->getConstant('QUALIFIED_NAME') : strtolower(
            $ref->getShortName()
        );

        $isSelfClosing = $ref->hasConstant('SELF_CLOSING') && $ref->getConstant('SELF_CLOSING');

        // Get element metadata from class doc comment
        $docComment = $ref->getDocComment();
        $desc = '';
        if ($docComment !== false) {
            // Extract description from class docblock (first line of content)
            if (preg_match('/\/\*\*\s*\n\s*\*\s*(.+?)\s*\n/s', $docComment, $matches)) {
                $desc = trim($matches[1]);
            }
        }
        $name = ucfirst($elementName);
        $level = $this->determineLevel($ref->getName());

        $props = [];
        $argTypes = [];
        $defaultArgs = [];
        $renderAssignmentsMap = []; // Map prop name to render assignment

        // Add text/content for non-self-closing elements
        if (! $isSelfClosing) {
            $props[] = 'text';
            $argTypes[] = $this->generateArgType('text', [
                'type' => 'string',
                'description' => 'The text or HTML to display in the element',
                'required' => true,
                'defaultValue' => 'Sample text',
            ]);
            $defaultArgs['text'] = '"Sample text"';
            // No render assignment for text - it's handled with el.innerHTML
        }

        try {
            $dom = HTMLDocumentDelegator::createEmpty();
            $className = $ref->getName();
            if (method_exists($className, 'create')) {
                $example = $className::create($dom);
            } else {
                $example = null;
            }
        } catch (Throwable $e) {
            $example = null;
        } /* Create an example instance of the element to resolve global attributes using the actual trait getters (e.g. getAccessKey, getAutofocus) */

        // If we have an example instance, read available global attribute traits
        if ($example !== null) {
            $globalTraitDir = __DIR__ . '/../Trait/GlobalAttribute';
            $traitFiles = is_dir($globalTraitDir) ? scandir($globalTraitDir) : [];
            foreach ($traitFiles as $file) {
                if (! str_ends_with($file, 'Trait.php')) {
                    continue;
                }
                $attrBase = substr($file, 0, -9); // remove 'Trait.php'
                $propName = lcfirst($attrBase);

                // Special handling for DataTrait - it handles arbitrary data-* attributes
                if ($propName === 'data') {
                    // Add a generic data object for custom data attributes
                    $jsVarName = 'data';
                    if (! in_array($jsVarName, $props, true)) {
                        $props[] = $jsVarName;
                        $argTypes[] = $this->generateArgType($jsVarName, [
                            'type' => 'object',
                            'description' => 'Custom data attributes (data-*). Provide an object with key-value pairs.',
                            'required' => false,
                            'defaultValue' => '{}',
                            'choices' => null,
                        ]);
                        $defaultArgs[$jsVarName] = '{}';
                        // Special render assignment for data attributes
                        $renderAssignmentsMap[$jsVarName] = $this->generateDataAttributesAssignment();
                    }
                    continue;
                }

                // some trait file names use camelcase that maps directly to attribute name
                $getter = 'get' . ucfirst($propName);
                if (! method_exists($example, $getter)) {
                    // try alternative getter naming: e.g., getAccessKey vs getAccesskey
                    $getterAlt = 'get' . ucfirst(strtolower($propName));
                    if (method_exists($example, $getterAlt)) {
                        $getter = $getterAlt;
                    } else {
                        continue;
                    }
                }

                // Avoid duplicate if property already included by reflection
                $jsVarName = in_array($propName, self::JS_RESERVED_WORDS, true) ? $propName . 'Prop' : $propName;
                if (in_array($jsVarName, $props, true)) {
                    continue;
                }

                // Determine type and choices from enum properties if possible
                try {
                    $value = $example->{$getter}();
                } catch (TypeError $te) {
                    // some trait getters have non-nullable return types but default to null
                    $value = null;
                } catch (Throwable $e) {
                    $value = null;
                }
                $phpType = is_bool($value) ? 'boolean' : (is_int($value) ? 'integer' : 'string');
                $choices = null;

                // If the property is an enum-backed property, try to read the property type via reflection
                try {
                    $rp = new ReflectionClass($example);
                    if ($rp->hasProperty($propName)) {
                        $prop = $rp->getProperty($propName);
                        $type = $prop->getType();
                        if ($type instanceof ReflectionUnionType) {
                            foreach ($type->getTypes() as $t) {
                                if (enum_exists($t->getName())) {
                                    $phpType = 'enum';
                                    $choices = array_map(
                                        fn (UnitEnum $c) => $c instanceof BackedEnum ? $c->value : $c->name,
                                        $t->getName()::cases()
                                    );
                                    break;
                                }
                                if ($t->getName() === 'int') {
                                    $phpType = 'integer';
                                }
                            }
                        } elseif ($type && $type instanceof ReflectionNamedType) {
                            if (enum_exists($type->getName())) {
                                $phpType = 'enum';
                                $choices = array_map(
                                    fn (UnitEnum $c) => $c instanceof BackedEnum ? $c->value : $c->name,
                                    $type->getName()::cases()
                                );
                            } elseif ($type->getName() === 'int') {
                                $phpType = 'integer';
                            }
                        }
                    }
                } catch (Throwable $e) {
                    // ignore reflection errors and treat as string
                }

                $props[] = $jsVarName;
                $argTypes[] = $this->generateArgType($jsVarName, [
                    'type' => $phpType,
                    'description' => '',
                    'required' => false,
                    'defaultValue' => $this->getDefaultValue($phpType, $choices),
                    'choices' => $choices,
                ]);

                $defaultArgs[$jsVarName] = $this->getDefaultValueJs($phpType, $choices);
                $renderAssignmentsMap[$jsVarName] = $this->generateRenderAssignment(
                    $jsVarName,
                    $this->camelToKebab($propName),
                    $phpType
                );
            }
        }

        // Collect all properties with getter and setter (element-specific attributes)
        // These take precedence over global attributes, so we track them and remove duplicates later
        $elementSpecificProps = [];
        foreach ($ref->getProperties() as $prop) {
            $propName = $prop->getName();
            $getter = 'get' . ucfirst($propName);
            $setter = 'set' . ucfirst($propName);

            if ($ref->hasMethod($getter) && $ref->hasMethod($setter)) {
                $type = $prop->getType();
                $phpType = 'string';
                $choices = null;

                if ($type instanceof ReflectionUnionType) {
                    foreach ($type->getTypes() as $unionType) {
                        if ($unionType instanceof ReflectionNamedType && enum_exists($unionType->getName())) {
                            $phpType = 'enum';
                            $enumClass = $unionType->getName();
                            $choices = array_map(
                                fn (UnitEnum $case) => $case instanceof BackedEnum ? $case->value : $case->name,
                                $enumClass::cases()
                            );
                            break;
                        }
                    }
                } elseif ($type && $type instanceof ReflectionNamedType) {
                    if (enum_exists($type->getName())) {
                        $phpType = 'enum';
                        $enumClass = $type->getName();
                        $choices = array_map(
                            fn (UnitEnum $case) => $case instanceof BackedEnum ? $case->value : $case->name,
                            $enumClass::cases()
                        );
                    } elseif ($type->getName() === 'bool') {
                        $phpType = 'boolean';
                    } elseif ($type->getName() === 'int') {
                        $phpType = 'integer';
                    }
                }

                // Handle JS reserved words by appending 'Prop'
                $jsVarName = in_array($propName, self::JS_RESERVED_WORDS, true) ? $propName . 'Prop' : $propName;

                // Track this as element-specific so we can remove global duplicates
                $elementSpecificProps[] = $jsVarName;

                $props[] = $jsVarName;
                $argTypes[] = $this->generateArgType($jsVarName, [
                    'type' => $phpType,
                    'description' => '',
                    'required' => false,
                    'defaultValue' => $this->getDefaultValue($phpType, $choices),
                    'choices' => $choices,
                ]);

                $defaultArgs[$jsVarName] = $this->getDefaultValueJs($phpType, $choices);
                $renderAssignmentsMap[$jsVarName] = $this->generateRenderAssignment(
                    $jsVarName,
                    $this->camelToKebab($propName),
                    $phpType
                );
            }
        }

        // Remove duplicates - element-specific attributes take precedence over global attributes
        // Build a map to track unique properties and their data (last occurrence wins)
        $propsMap = [];

        // Build map with all data for each prop
        for ($i = 0; $i < count($props); $i++) {
            $prop = $props[$i];
            $propsMap[$prop] = [
                'prop' => $prop,
                'argType' => $argTypes[$i] ?? null,
                'defaultArg' => $defaultArgs[$prop] ?? null,
                'renderAssignment' => $renderAssignmentsMap[$prop] ?? null,
            ];
        }

        // Rebuild arrays from the map, maintaining order
        $props = [];
        $argTypes = [];
        $defaultArgs = [];
        $renderAssignments = []; // Back to indexed array for building JS

        // Sort alphabetically by prop name (text should stay first if present)
        $sortedProps = array_keys($propsMap);
        usort($sortedProps, function ($a, $b) {
            // Keep 'text' at the beginning
            if ($a === 'text') {
                return -1;
            }
            if ($b === 'text') {
                return 1;
            }
            return strcasecmp($a, $b);
        });

        foreach ($sortedProps as $prop) {
            $propData = $propsMap[$prop];
            $props[] = $propData['prop'];
            if ($propData['argType'] !== null) {
                $argTypes[] = $propData['argType'];
            }
            if ($propData['defaultArg'] !== null) {
                $defaultArgs[$propData['prop']] = $propData['defaultArg'];
            }
            if ($propData['renderAssignment'] !== null) {
                $renderAssignments[] = $propData['renderAssignment'];
            }
        }

        $category = 'HTML5';
        $folder = ucfirst($level) . ' Elements';
        $title = "{$category}/{$folder}/{$name}";

        $js = $this->buildStorybookJS(
            $elementName,
            $name,
            $desc,
            $title,
            $level,
            $props,
            $argTypes,
            $defaultArgs,
            $renderAssignments,
            $isSelfClosing
        );

        return $js;
    }

    private function camelToKebab(string $string): string
    {
        return strtolower(preg_replace('/([a-z])([A-Z])/', '$1-$2', $string));
    }

    private function escapeJsString(string $str): string
    {
        return addslashes($str);
    }

    private function getControlType(string $type): string
    {
        return match ($type) {
            'enum' => 'select',
            'boolean' => 'boolean',
            'integer' => 'number',
            default => 'text',
        };
    }

    private function generateArgType(string $propName, array $details): string
    {
        $type = $details['type'];
        // Map internal types to Storybook types
        if ($type === 'integer') {
            $type = 'number';
        } elseif ($type === 'enum') {
            $type = 'string'; // Enums are strings with select control
        }

        $description = $this->escapeJsString($details['description']);
        $required = $details['required'] ? 'true' : 'false';
        $defaultValue = $details['defaultValue'];
        $control = $this->getControlType($details['type']); // Use original type for control

        $argType = "    {$propName}: {\n";
        $argType .= "      type: {\n";
        $argType .= "        name: \"{$type}\",\n";
        $argType .= "        required: {$required}\n";
        $argType .= "      },\n";

        if ($description) {
            $argType .= "      description: \"{$description}\",\n";
        }

        if ($type === 'object') {
            $argType .= "      defaultValue: {},\n";
            $argType .= "      control: {\n";
            $argType .= "        type: \"object\"\n";
            $argType .= "      },\n";
        } else {
            $argType .= '      defaultValue: ';
            if ($type === 'boolean') {
                $argType .= $defaultValue ? 'true' : 'false';
            } elseif ($type === 'number') {
                $argType .= is_numeric($defaultValue) ? $defaultValue : '0';
            } elseif ($details['type'] === 'enum') {
                // For enums (which have select control), use empty string default
                $argType .= '""';
            } else {
                $argType .= "\"{$this->escapeJsString($defaultValue)}\"";
            }
            $argType .= ",\n";

            $argType .= "      control: {\n";
            $argType .= "        type: \"{$control}\"\n";
            $argType .= "      },\n";

            if ($details['type'] === 'enum' && ! empty($details['choices'])) {
                $options = array_map(fn ($c) => "\"{$this->escapeJsString($c)}\"", $details['choices']);
                $argType .= '      options: ["", ' . implode(', ', $options) . "],\n";
            }
        }

        $argType .= '    },';

        return $argType;
    }

    private function getDefaultValue(string $type, ?array $choices = null): string
    {
        return match ($type) {
            'boolean' => 'false',
            'integer' => '0',
            'enum' => ! empty($choices) ? $choices[0] : '',
            default => 'Sample value',
        };
    }

    private function getDefaultValueJs(string $type, ?array $choices = null): string
    {
        return match ($type) {
            'boolean' => 'false',
            'integer' => '0',
            'enum' => '""',
            default => '"Sample value"',
        };
    }

    private function generateRenderAssignment(string $jsVarName, string $htmlAttr, string $type): string
    {
        $assignment = "    if ({$jsVarName}) {\n";

        if ($htmlAttr === 'data-theme') {
            $assignment .= "      if ({$jsVarName} === 'dark') {\n";
            $assignment .= "        el.setAttribute('data-theme', 'dark');\n";
            $assignment .= "        document.querySelector('#storybook-root').setAttribute('data-theme', 'dark');\n";
            $assignment .= "      } else if ({$jsVarName} === 'light') {\n";
            $assignment .= "        el.setAttribute('data-theme', 'light');\n";
            $assignment .= "        document.querySelector('#storybook-root').setAttribute('data-theme', 'light');\n";
            $assignment .= "      } else {\n";
            $assignment .= "        document.querySelector('#storybook-root').removeAttribute('data-theme');\n";
            $assignment .= "      }\n";
        } else {
            $assignment .= "      el.setAttribute('{$htmlAttr}', {$jsVarName});\n";
        }

        $assignment .= '    }';

        return $assignment;
    }

    private function generateDataAttributesAssignment(): string
    {
        $assignment = "    if (data && typeof data === 'object') {\n";
        $assignment .= "      Object.keys(data).forEach(key => {\n";
        $assignment .= "        el.setAttribute(`data-\${key}`, data[key]);\n";
        $assignment .= "      });\n";
        $assignment .= '    }';

        return $assignment;
    }

    private function buildStorybookJS(
        string $elementName,
        string $name,
        string $description,
        string $title,
        string $level,
        array $props,
        array $argTypes,
        array $defaultArgs,
        array $renderAssignments,
        bool $isSelfClosing
    ): string {
        $date = date('F j, Y H:i');

        $js = "/**\n";
        $js .= " *\n";
        $js .= " * THIS FILE IS AUTOGENERATED. DO NOT EDIT IT.\n";
        $js .= " *\n";
        $js .= " * @generated {$date}\n";
        $js .= " * @component {$name}\n";
        $js .= " * @description {$description}\n";
        $js .= " */\n\n";

        // $js .= "import {\n";
        // $js .= "  withActions\n";
        // $js .= "} from '@storybook/addon-actions/decorator';\n\n";

        $js .= "export default {\n";
        $js .= "  title: \"{$title}\",\n";
        $js .= "  tags: [\"autodocs\"],\n";
        $js .= "  parameters: {\n";
        $js .= "    actions: {\n";
        $js .= "      handles: ['change'],\n";
        $js .= "    },\n";
        $js .= "    layout: \"centered\",\n";
        $js .= '    componentSubtitle: "' . ucfirst($level) . " Element\",\n";
        $js .= "    docs: {\n";
        $js .= "      inlineStories: true,\n";
        $js .= "      source: true,\n";
        $js .= "      description: {\n";
        $js .= "        component: \"{$description}\",\n";
        $js .= "      },\n";
        $js .= "    },\n";
        $js .= "  },\n";

        // argTypes
        $js .= "  argTypes: {\n";
        $js .= implode("\n", $argTypes);
        $js .= "\n  },\n";

        // render function
        $js .= "  render: (args) => {\n";
        $js .= "    let el = document.createElement(\"{$elementName}\");\n";
        if (! $isSelfClosing) {
            $js .= "    el.innerHTML = args.text;\n";
        }
        $js .= "\n    // Map argument keys to attribute names, handle special cases\n";
        $js .= "    const argMap = {\n";
        $js .= "      classProp: 'class',\n";
        $js .= "      style: 'style',\n";
        $js .= "      tabindex: 'tabindex',\n";
        $js .= "    };\n";
        $js .= "    Object.entries(args).forEach(([key, value]) => {\n";
        $js .= "      if (key === 'text' || value === undefined || value === \"\") return;\n";
        $js .= "      if (key === 'data' && typeof value === 'object') {\n";
        $js .= "        Object.keys(value).forEach(dataKey => {\n";
        $js .= "          el.setAttribute(`data-\${dataKey}`, value[dataKey]);\n";
        $js .= "        });\n";
        $js .= "        return;\n";
        $js .= "      }\n";
        $js .= "      const attr = argMap[key] || key.replace(/[A-Z]/g, m => '-' + m.toLowerCase());\n";
        $js .= "      // Only set boolean attributes if true, omit if false\n";
        $js .= "      if (typeof value === 'boolean') {\n";
        $js .= "        if (value) {\n";
        $js .= "          el.setAttribute(attr, \"\");\n";
        $js .= "        }\n";
        $js .= "        return;\n";
        $js .= "      }\n";
        $js .= "      el.setAttribute(attr, value);\n";
        $js .= "    });\n";
        $js .= "    return el;\n";
        $js .= "  },\n";
        $js .= "  decorators: [],\n";
        $js .= "};\n\n";

        // Default story
        $js .= "export const Default = {\n";
        $js .= "  parameters: {\n";
        $js .= "    docs: {\n";
        $js .= "      description: {\n";
        $js .= "        story: 'Default story with all arguments set to default values'\n";
        $js .= "      },\n";
        $js .= "    },\n";
        $js .= "  },\n";
        $js .= "  args: {\n";
        foreach ($defaultArgs as $prop => $value) {
            // Handle object types (like data attributes) without quotes
            if ($value === '{}') {
                $js .= "    {$prop}: {},\n";
            } else {
                $js .= "    {$prop}: {$value},\n";
            }
        }
        $js .= "  },\n";
        $js .= "};\n";

        return $js;
    }

    /**
     * Build a composed Storybook story showing parent-child relationships
     */
    private function buildComposedStory(
        string $elementName,
        string $name,
        string $description,
        string $level,
        ReflectionClass $ref,
        array $childOf,
        array $parentOf
    ): string {
        $date = date('F j, Y H:i:s');
        $escapedDesc = $this->escapeJsString($description);

        $category = 'HTML5';
        $folder = 'Content Model';
        $title = "{$category}/{$folder}/{$name} - Composed";

        $js = "/**\n";
        $js .= " * THIS FILE IS AUTOGENERATED. DO NOT EDIT IT.\n";
        $js .= " *\n";
        $js .= " * @generated {$date}\n";
        $js .= " * @component {$name} - Composed Example\n";
        $js .= " * @description {$description}\n";
        $js .= " *\n";
        $js .= " * CONTENT MODEL:\n";

        if (! empty($childOf)) {
            $childOfNames = array_map(function ($class) {
                return (new ReflectionClass($class))->getShortName();
            }, $childOf);
            $js .= ' * - Can be a child of: ' . implode(', ', $childOfNames) . "\n";
        }

        if (! empty($parentOf)) {
            $parentOfNames = array_map(function ($class) {
                return (new ReflectionClass($class))->getShortName();
            }, $parentOf);
            $js .= ' * - Can contain: ' . implode(', ', $parentOfNames) . "\n";
        }

        $uniquePerParent = $ref->getStaticPropertyValue('uniquePerParent', false);
        $unique = $ref->getStaticPropertyValue('unique', false);

        if ($unique) {
            $js .= " * - UNIQUE: Only one allowed per document\n";
        }
        if ($uniquePerParent) {
            $js .= " * - UNIQUE PER PARENT: Only one allowed per parent element\n";
        }

        $js .= " */\n\n";

        // Collect imports and render logic for child elements
        $imports = $this->collectImportsForComposedStory($elementName, $parentOf, $ref);

        // Add imports
        foreach ($imports['imports'] as $import) {
            $js .= $import . "\n";
        }
        $js .= "\n";

        $js .= "export default {\n";
        $js .= "  title: \"{$title}\",\n";
        $js .= "  tags: [\"autodocs\"],\n";
        $js .= "  parameters: {\n";
        $js .= "    layout: \"centered\",\n";
        $js .= '    componentSubtitle: "Composed Example with Valid Children",' . "\n";
        $js .= "    docs: {\n";
        $js .= "      description: {\n";
        $js .= "        component: \"{$escapedDesc}\",\n";
        $js .= "      },\n";
        $js .= "    },\n";
        $js .= "  },\n";
        $js .= "};\n\n";

        $js .= "export const WithValidChildren = {\n";
        $js .= "  parameters: {\n";
        $js .= "    docs: {\n";
        $js .= "      description: {\n";
        $js .= "        story: 'Example showing {$name} with its valid child elements based on HTML5 content model'\n";
        $js .= "      },\n";
        $js .= "    },\n";
        $js .= "  },\n";
        $js .= "  render: () => {\n";
        $js .= "    const parent = document.createElement('{$elementName}');\n";
        $js .= "    parent.className = 'example';\n\n";

        // Add children using the Default story renders
        foreach ($imports['children'] as $child) {
            $js .= $child['renderCode'];
        }

        $js .= "\n    return parent;\n";
        $js .= "  },\n";
        $js .= "};\n";

        return $js;
    }

    /**
     * Collect imports and generate render code for child elements
     */
    private function collectImportsForComposedStory(
        string $parentElementName,
        array $parentOf,
        ReflectionClass $parentRef
    ): array {
        // Priority elements for specific containers
        $priorityElements = [
            'form' => ['fieldset', 'label', 'input', 'textarea', 'button', 'select'],
            'fieldset' => ['legend', 'label', 'input', 'textarea', 'button'],
            'select' => ['optgroup', 'option'],
            'datalist' => ['option'],
            'table' => ['caption', 'colgroup', 'thead', 'tbody', 'tfoot', 'tr'],
            'head' => ['title', 'base', 'meta', 'link', 'script', 'style'],
            'details' => ['summary', 'p'],
        ];

        // Get children to render
        $children = [];
        foreach ($parentOf as $childClass) {
            $childRef = new ReflectionClass($childClass);
            $childElementName = $childRef->hasConstant('QUALIFIED_NAME')
                ? $childRef->getConstant('QUALIFIED_NAME')
                : strtolower($childRef->getShortName());

            $children[] = [
                'name' => $childElementName,
                'ref' => $childRef,
                'class' => $childClass,
            ];
        }

        // Filter to priority elements if there are too many children
        $relevantChildren = $children;
        if (isset($priorityElements[$parentElementName]) && count($children) > 5) {
            $priorities = $priorityElements[$parentElementName];
            $filtered = array_filter($children, fn ($c) => in_array($c['name'], $priorities, true));
            if (! empty($filtered)) {
                $relevantChildren = array_values($filtered);
            }
        }

        // Limit to reasonable number of examples
        $maxChildren = 3;
        if ($parentElementName === 'head') {
            $maxChildren = 6;
        } elseif (count($children) > 10) {
            $maxChildren = 4;
        }

        $imports = [];
        $childrenRenderCode = [];
        $rendered = 0;
        $importedNames = []; // Track to avoid duplicate imports

        foreach ($relevantChildren as $child) {
            if ($rendered >= $maxChildren) {
                break;
            }

            $childName = $child['name'];
            $childRef = $child['ref'];
            $uniquePerParent = $childRef->getStaticPropertyValue('uniquePerParent', false);
            $childLevel = $this->determineLevel($child['class']);

            $renderCount = $uniquePerParent ? 1 : 2;

            // Determine import name (capitalize first letter)
            $importName = ucfirst($childName) . 'Stories';

            // Add import if not already imported
            if (! isset($importedNames[$importName])) {
                $imports[] = "import * as {$importName} from './../../{$childLevel}/{$childName}/{$childName}.stories.js';";
                $importedNames[$importName] = true;
            }

            for ($i = 0; $i < $renderCount && $rendered < $maxChildren; $i++) {
                $childrenRenderCode[] = [
                    'renderCode' => "    const child{$rendered} = {$importName}.default.render({$importName}.Default.args);\n    parent.appendChild(child{$rendered});\n",
                ];
                $rendered++;
            }
        }

        return [
            'imports' => $imports,
            'children' => $childrenRenderCode,
        ];
    }

    /**
     * Determine the level (directory) for a given element class
     */
    private function determineLevel(string $className): string
    {
        if (strpos($className, 'InlineElement') !== false || strpos($className, '\\Element\\Inline\\') !== false) {
            return 'inline';
        }
        if (strpos($className, 'VoidElement') !== false || strpos($className, '\\Element\\Void\\') !== false) {
            return 'void';
        }
        return 'block';
    }
}
