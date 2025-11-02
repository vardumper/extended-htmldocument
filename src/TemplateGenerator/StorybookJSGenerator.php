<?php

namespace Html\TemplateGenerator;

use Html\Delegator\HTMLDocumentDelegator;
use Html\Interface\HTMLElementDelegatorInterface;
use Html\Interface\TemplateGeneratorInterface;
use Html\Mapping\TemplateGenerator;
use ReflectionClass;
use ReflectionNamedType;
use ReflectionUnionType;
use Symfony\Component\Yaml\Yaml;
use Throwable;
use TypeError;

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

    public function renderElement(HTMLElementDelegatorInterface $element): string
    {
        $ref = new ReflectionClass($element);
        $elementName = $ref->hasConstant('QUALIFIED_NAME') ? $ref->getConstant('QUALIFIED_NAME') : strtolower(
            $ref->getShortName()
        );

        $isSelfClosing = $ref->hasConstant('SELF_CLOSING') && $ref->getConstant('SELF_CLOSING');

        // Read element metadata from YAML
        $yamlPath = __DIR__ . '/../Resources/specifications/html5-with-aria.yaml';
        if (! is_readable($yamlPath)) {
            $yamlPath = __DIR__ . '/../Resources/specifications/html5.yaml';
        }
        $yaml = is_readable($yamlPath) ? Yaml::parseFile($yamlPath) : [];
        $meta = $yaml[strtolower($elementName)] ?? [];

        $name = $meta['name'] ?? ucfirst($elementName);
        $desc = $meta['description'] ?? '';
        $level = $meta['level'] ?? 'inline';

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

        // Create an example instance of the element to resolve global attributes
        // using the actual trait getters (e.g. getAccessKey, getAutofocus)
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
        }

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
                                    $choices = array_map(fn ($c) => $c->value, $t->getName()::cases());
                                    break;
                                }
                                if ($t->getName() === 'int') {
                                    $phpType = 'integer';
                                }
                            }
                        } elseif ($type && $type instanceof ReflectionNamedType) {
                            if (enum_exists($type->getName())) {
                                $phpType = 'enum';
                                $choices = array_map(fn ($c) => $c->value, $type->getName()::cases());
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
                            $choices = array_map(fn ($case) => $case->value, $enumClass::cases());
                            break;
                        }
                    }
                } elseif ($type && $type instanceof ReflectionNamedType) {
                    if (enum_exists($type->getName())) {
                        $phpType = 'enum';
                        $enumClass = $type->getName();
                        $choices = array_map(fn ($case) => $case->value, $enumClass::cases());
                    } elseif ($type->getName() === 'bool') {
                        $phpType = 'boolean';
                    } elseif ($type->getName() === 'int') {
                        $phpType = 'integer';
                    }
                }

                // Get attribute details from YAML
                $attrDetails = $meta['attributes'][$this->camelToKebab($propName)] ??
                              $meta['attributes'][$propName] ?? [];

                // Handle JS reserved words by appending 'Prop'
                $jsVarName = in_array($propName, self::JS_RESERVED_WORDS, true) ? $propName . 'Prop' : $propName;

                // Track this as element-specific so we can remove global duplicates
                $elementSpecificProps[] = $jsVarName;

                $props[] = $jsVarName;
                $argTypes[] = $this->generateArgType($jsVarName, [
                    'type' => $phpType,
                    'description' => $attrDetails['description'] ?? '',
                    'required' => $attrDetails['required'] ?? false,
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
        $escapedDesc = $this->escapeJsString($description);

        $js = "/**\n";
        $js .= " *\n";
        $js .= " * THIS FILE IS AUTOGENERATED. DO NOT EDIT IT.\n";
        $js .= " *\n";
        $js .= " * @generated {$date}\n";
        $js .= " * @component {$name}\n";
        $js .= " * @description {$description}\n";
        $js .= " */\n\n";

        $js .= "import {\n";
        $js .= "  withActions\n";
        $js .= "} from '@storybook/addon-actions/decorator';\n\n";

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
        $js .= "        component: \"{$escapedDesc}\",\n";
        $js .= "      },\n";
        $js .= "    },\n";
        $js .= "  },\n";

        // argTypes
        $js .= "  argTypes: {\n";
        $js .= implode("\n", $argTypes);
        $js .= "\n  },\n";

        // render function
        $js .= "  render: ({\n";
        $js .= '    ' . implode(",\n    ", $props) . ",\n";
        $js .= "  }) => {\n";
        $js .= "    let el = document.createElement(\"{$elementName}\");\n";

        if (! $isSelfClosing) {
            $js .= "    el.innerHTML = text;\n";
        }

        $js .= implode("\n", $renderAssignments);
        $js .= "\n    return el;\n";
        $js .= "  },\n";
        $js .= "  decorators: [withActions],\n";
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
}
