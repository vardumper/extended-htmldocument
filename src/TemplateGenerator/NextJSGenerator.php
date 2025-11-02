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

/**
 * NextJSGenerator - Generates TypeScript React components (.tsx)
 *
 * Despite the name, these components are universal and work in:
 * - Next.js 13+ (Server Components and Client Components)
 * - Next.js 12 and earlier (Pages Router)
 * - Create React App
 * - Vite + React
 * - Remix
 * - Gatsby
 * - Any React application
 *
 * The components are framework-agnostic because they:
 * - Use only React.FC and React.createElement (no JSX)
 * - Don't use hooks (useState, useEffect, etc.)
 * - Don't use browser APIs (window, document, etc.)
 * - Are pure functional components
 *
 * @package Html\TemplateGenerator
 */
#[TemplateGenerator('nextjs')]
class NextJSGenerator implements TemplateGeneratorInterface
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
        return 'tsx';
    }

    public function getNamePattern(): string
    {
        return '{Component}.{extension}';
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

        $componentName = ucfirst($elementName);

        $props = [];
        $propsInterface = [];

        // Add children for non-self-closing elements
        if (! $isSelfClosing) {
            $props['children'] = [
                'name' => 'children',
                'type' => 'React.ReactNode',
                'optional' => true,
                'description' => 'The content to display in the element',
            ];
        }

        // Add className (React equivalent of class attribute)
        $props['className'] = [
            'name' => 'className',
            'type' => 'string',
            'optional' => true,
            'description' => 'CSS class names',
        ];

        // Create an example instance of the element to resolve global attributes
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

                // Skip class - already handled as className
                if ($propName === 'class') {
                    continue;
                }

                // Special handling for DataTrait - it handles arbitrary data-* attributes
                if ($propName === 'data') {
                    $props['data'] = [
                        'name' => 'data',
                        'type' => 'Record<string, string>',
                        'optional' => true,
                        'description' => 'Custom data attributes (data-*)',
                    ];
                    continue;
                }

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

                // Handle JS reserved words by appending 'Prop'
                $jsVarName = in_array($propName, self::JS_RESERVED_WORDS, true) ? $propName . 'Prop' : $propName;

                // Avoid duplicates
                if (isset($props[$jsVarName])) {
                    continue;
                }

                // Determine type and choices from enum properties if possible
                try {
                    $value = $example->{$getter}();
                } catch (TypeError $te) {
                    $value = null;
                } catch (Throwable $e) {
                    $value = null;
                }

                $tsType = 'string';
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
                                    $choices = array_map(fn ($c) => $c->value, $t->getName()::cases());
                                    $tsType = implode(' | ', array_map(fn ($c) => "'{$c}'", $choices));
                                    break;
                                }
                                if ($t->getName() === 'int') {
                                    $tsType = 'number';
                                } elseif ($t->getName() === 'bool') {
                                    $tsType = 'boolean';
                                }
                            }
                        } elseif ($type && $type instanceof ReflectionNamedType) {
                            if (enum_exists($type->getName())) {
                                $choices = array_map(fn ($c) => $c->value, $type->getName()::cases());
                                $tsType = implode(' | ', array_map(fn ($c) => "'{$c}'", $choices));
                            } elseif ($type->getName() === 'int') {
                                $tsType = 'number';
                            } elseif ($type->getName() === 'bool') {
                                $tsType = 'boolean';
                            }
                        }
                    }
                } catch (Throwable $e) {
                    // ignore reflection errors and treat as string
                }

                $props[$jsVarName] = [
                    'name' => $jsVarName,
                    'type' => $tsType,
                    'optional' => true,
                    'description' => '',
                    'htmlAttr' => $this->camelToKebab($propName),
                ];
            }
        }

        // Collect all properties with getter and setter (element-specific attributes)
        foreach ($ref->getProperties() as $prop) {
            $propName = $prop->getName();
            $getter = 'get' . ucfirst($propName);
            $setter = 'set' . ucfirst($propName);

            if ($ref->hasMethod($getter) && $ref->hasMethod($setter)) {
                $type = $prop->getType();
                $tsType = 'string';
                $choices = null;

                if ($type instanceof ReflectionUnionType) {
                    foreach ($type->getTypes() as $unionType) {
                        if ($unionType instanceof ReflectionNamedType && enum_exists($unionType->getName())) {
                            $enumClass = $unionType->getName();
                            $choices = array_map(fn ($case) => $case->value, $enumClass::cases());
                            $tsType = implode(' | ', array_map(fn ($c) => "'{$c}'", $choices));
                            break;
                        }
                    }
                } elseif ($type && $type instanceof ReflectionNamedType) {
                    if (enum_exists($type->getName())) {
                        $enumClass = $type->getName();
                        $choices = array_map(fn ($case) => $case->value, $enumClass::cases());
                        $tsType = implode(' | ', array_map(fn ($c) => "'{$c}'", $choices));
                    } elseif ($type->getName() === 'bool') {
                        $tsType = 'boolean';
                    } elseif ($type->getName() === 'int') {
                        $tsType = 'number';
                    }
                }

                // Get attribute details from YAML
                $attrDetails = $meta['attributes'][$this->camelToKebab($propName)] ??
                              $meta['attributes'][$propName] ?? [];

                // Handle JS reserved words by appending 'Prop'
                $jsVarName = in_array($propName, self::JS_RESERVED_WORDS, true) ? $propName . 'Prop' : $propName;

                $props[$jsVarName] = [
                    'name' => $jsVarName,
                    'type' => $tsType,
                    'optional' => ! ($attrDetails['required'] ?? false),
                    'description' => $attrDetails['description'] ?? '',
                    'htmlAttr' => $this->camelToKebab($propName),
                ];
            }
        }

        // Sort props alphabetically (except children and className which stay at top)
        $reserved = ['children', 'className'];
        $sortedKeys = array_keys($props);
        usort($sortedKeys, function ($a, $b) use ($reserved) {
            $aReserved = in_array($a, $reserved, true);
            $bReserved = in_array($b, $reserved, true);

            if ($aReserved && ! $bReserved) {
                return -1;
            }
            if (! $aReserved && $bReserved) {
                return 1;
            }
            if ($aReserved && $bReserved) {
                // children before className
                if ($a === 'children') {
                    return -1;
                }
                if ($b === 'children') {
                    return 1;
                }
            }

            return strcasecmp($a, $b);
        });

        $sortedProps = [];
        foreach ($sortedKeys as $key) {
            $sortedProps[$key] = $props[$key];
        }

        $tsx = $this->buildNextJSComponent(
            $componentName,
            $elementName,
            $name,
            $desc,
            $sortedProps,
            $isSelfClosing
        );

        return $tsx;
    }

    private function camelToKebab(string $string): string
    {
        return strtolower(preg_replace('/([a-z])([A-Z])/', '$1-$2', $string));
    }

    private function buildNextJSComponent(
        string $componentName,
        string $elementName,
        string $name,
        string $description,
        array $props,
        bool $isSelfClosing
    ): string {
        $date = date('F j, Y H:i:s');

        $tsx = "/**\n";
        $tsx .= " * THIS FILE IS AUTOGENERATED. DO NOT EDIT IT.\n";
        $tsx .= " *\n";
        $tsx .= " * @generated {$date}\n";
        $tsx .= " * @component {$name}\n";
        $tsx .= " * @description {$description}\n";
        $tsx .= " */\n\n";

        $tsx .= "import React from 'react';\n\n";

        // Build Props interface
        $tsx .= "export interface {$componentName}Props {\n";
        foreach ($props as $prop) {
            if ($prop['description']) {
                $tsx .= "  /** {$prop['description']} */\n";
            }
            $optional = $prop['optional'] ? '?' : '';
            // Special handling: style should be React.CSSProperties, not string
            $propType = $prop['name'] === 'style' ? 'React.CSSProperties' : $prop['type'];
            $tsx .= "  {$prop['name']}{$optional}: {$propType};\n";
        }
        $tsx .= "}\n\n";

        // Build component
        $tsx .= "/**\n";
        $tsx .= " * {$name} - {$description}\n";
        $tsx .= " */\n";
        $tsx .= "export const {$componentName}: React.FC<{$componentName}Props> = (props: {$componentName}Props) => {\n";

        // Destructure props inside function body for type safety
        $tsx .= "  const {\n";
        $propNames = array_map(fn ($p) => "    {$p['name']}", $props);
        $tsx .= implode(",\n", $propNames) . "\n";
        $tsx .= "  } = props;\n\n";

        // Build props object for element
        $tsx .= "  const elementProps: React.HTMLAttributes<HTMLElement> & Record<string, any> = {};\n\n";

        // Handle className
        if (isset($props['className'])) {
            $tsx .= "  if (className) {\n";
            $tsx .= "    elementProps.className = className;\n";
            $tsx .= "  }\n\n";
        }

        // Handle data attributes
        if (isset($props['data'])) {
            $tsx .= "  if (data) {\n";
            $tsx .= "    Object.entries(data).forEach(([key, value]) => {\n";
            $tsx .= "      elementProps[`data-\${key}`] = value;\n";
            $tsx .= "    });\n";
            $tsx .= "  }\n\n";
        }

        // Handle other props
        foreach ($props as $prop) {
            if (in_array($prop['name'], ['children', 'className', 'data'], true)) {
                continue;
            }

            $propName = $prop['name'];
            $htmlAttr = $prop['htmlAttr'] ?? $this->camelToKebab($propName);

            // Special handling for boolean attributes - React expects boolean values
            if ($prop['type'] === 'boolean') {
                $tsx .= "  if ({$propName} !== undefined) {\n";
                $tsx .= "    elementProps['{$htmlAttr}'] = {$propName};\n";
                $tsx .= "  }\n\n";
            } else {
                $tsx .= "  if ({$propName} !== undefined) {\n";
                $tsx .= "    elementProps['{$htmlAttr}'] = {$propName};\n";
                $tsx .= "  }\n\n";
            }
        }

        // Render element
        $tsx .= "  return React.createElement(\n";
        $tsx .= "    '{$elementName}',\n";
        $tsx .= "    elementProps";

        if (! $isSelfClosing && isset($props['children'])) {
            $tsx .= ",\n    children";
        }

        $tsx .= "\n  );\n";
        $tsx .= "};\n\n";

        // Add displayName for debugging
        $tsx .= "{$componentName}.displayName = '{$componentName}';\n";

        return $tsx;
    }
}
