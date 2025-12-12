<?php

namespace Html\TemplateGenerator;

use Html\Delegator\HTMLDocumentDelegator;
use Html\Interface\HTMLElementDelegatorInterface;
use Html\Interface\TemplateGeneratorInterface;
use Html\Mapping\TemplateGenerator;
use ReflectionClass;
use ReflectionNamedType;
use ReflectionUnionType;
use Throwable;
use TypeError;

/**
 * NextJSGenerator - Generates TypeScript React Components (.tsx)
 *
 * Creates framework-agnostic React components that work universally across:
 * - Next.js 13+ (Server Components and Client Components)
 * - Next.js 12 and earlier (Pages Router)
 * - Create React App
 * - Vite + React
 * - Remix
 * - Gatsby
 * - Any React application
 *
 * Generated structure:
 * - Components: nextjs/{block|inline|void}/ComponentName.tsx
 * - Composed: nextjs/{block|inline|void}/ComponentNameExample.tsx
 *
 * Features:
 * - TypeScript interfaces with full type safety
 * - React.createElement (no JSX compilation required)
 * - Pure functional components (no hooks or state)
 * - Automatic camelCase to kebab-case attribute conversion
 * - Boolean attribute handling
 * - Data attribute object spreading
 * - Content model documentation in composed examples
 *
 * The components are framework-agnostic because they:
 * - Use only React.FC and React.createElement
 * - Don't use hooks (useState, useEffect, etc.)
 * - Don't use browser APIs (window, document, etc.)
 * - Are pure functional components
 *
 * @see https://react.dev/
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

    /**
     * Generate a composed template using content model metadata
     * This creates examples showing valid parent-child relationships
     *
     * Only generates templates for elements with SPECIFIC child requirements.
     * Skips elements with empty $parentOf (can contain any content).
     * Also skips generic containers that don't have meaningful composition patterns.
     */
    public function renderComposedElement(HTMLElementDelegatorInterface $element): ?string
    {
        $ref = new ReflectionClass($element);

        // Get content model metadata
        $childOf = $ref->getStaticPropertyValue('childOf', []);
        $parentOf = $ref->getStaticPropertyValue('parentOf', []);

        // Only generate composed templates for elements with SPECIFIC allowed children
        // Skip elements that can contain any content (empty $parentOf)
        if (empty($parentOf)) {
            return null;
        }

        $elementName = $ref->hasConstant('QUALIFIED_NAME') ? $ref->getConstant('QUALIFIED_NAME') : strtolower(
            $ref->getShortName()
        );

        // Skip generic containers that don't have meaningful composition patterns
        // These elements can contain too many different children to be useful as examples
        $excludedElements = [
            'div',           // Generic container
            'article',       // Document section
            'aside',         // Document section
            'section',       // Document section
            'nav',           // Document section
            'header',        // Document section
            'footer',        // Document section
            'main',          // Document section
            'blockquote',    // Quotation (generic content)
            'p',             // Paragraph (generic phrasing content)
            'dialog',        // Dialog (generic content)
            'dd',            // Definition description (generic content)
            'legend',        // Fieldset legend (generic content)
            'li',            // List item (generic content)
            'mark',          // Marked text (generic phrasing)
            'slot',          // Web component slot (generic content)
            'svg',           // SVG (too complex)
            'template',      // Template (generic content)
            // Table sub-elements (should be shown in table.composed.tsx)
            'thead',         // Table header - part of table
            'tbody',         // Table body - part of table
            'tfoot',         // Table footer - part of table
            'tr',            // Table row - part of table
            'td',            // Table data cell - part of tr
            'th',            // Table header cell - part of tr
            'caption',       // Table caption - part of table
            'colgroup',      // Column group - part of table
            'col',           // Column - part of colgroup
            // Fieldset sub-elements (should be shown in form context)
            'fieldset',      // Fieldset - part of form
            // List item (should be shown in ol/ul/menu context)
            // Definition list items (should be shown in dl context)
            'dt',            // Definition term - part of dl
            // Option elements (should be shown in select context)
            'optgroup',      // Option group - part of select
            'option',        // Option - part of select/optgroup
            // Figure elements
            'figcaption',    // Figure caption - part of figure
            // Details elements
            'summary',       // Summary - part of details
            // Ruby elements
            'rt',            // Ruby text - part of ruby
            'rp',            // Ruby parenthesis - part of ruby
        ];

        if (in_array($elementName, $excludedElements, true)) {
            return null;
        }

        $componentName = ucfirst($elementName);

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

        return $this->buildComposedComponent($componentName, $elementName, $name, $desc, $ref, $childOf, $parentOf);
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
        $level = 'inline'; // Will be determined by class hierarchy

        $componentName = ucfirst($elementName);
        // Avoid shadowing global Object in TS
        if ($componentName === 'Object') {
            $componentName = 'ObjectComponent';
        }

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
        $classTypeScript = 'string';
        $classDescription = 'CSS class names';

        $props['className'] = [
            'name' => 'className',
            'type' => $classTypeScript,
            'optional' => true,
            'description' => $classDescription,
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
                    $props['dataSet'] = [
                        'name' => 'dataSet',
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
                $jsVarName = in_array($propName, self::JS_RESERVED_WORDS, true) ? 'html' . ucfirst(
                    $propName
                ) : $propName;

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

                // Use reflection for PHP enum-backed properties
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

            // Skip class - already handled as className
            if ($propName === 'class' || $propName === 'className') {
                continue;
            }

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

                // Handle JS reserved words by appending 'Prop'
                $jsVarName = in_array($propName, self::JS_RESERVED_WORDS, true) ? 'html' . ucfirst(
                    $propName
                ) : $propName;

                $props[$jsVarName] = [
                    'name' => $jsVarName,
                    'type' => $tsType,
                    'optional' => true,
                    'description' => '',
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

        // Handle data attributes specially
        if (isset($props['dataSet'])) {
            $tsx .= "  // Handle data attributes specially\n";
            $tsx .= "  if (dataSet) {\n";
            $tsx .= "    Object.entries(dataSet).forEach(([key, value]: [string, string]) => {\n";
            $tsx .= "      elementProps[`data-\${key}`] = value;\n";
            $tsx .= "    });\n";
            $tsx .= "  }\n\n";
        }

        // Handle 'data' attribute (string) for <object data="...">
        if (isset($props['data']) && !isset($props['dataSet'])) {
            $tsx .= "  if (data !== undefined) {\n";
            $tsx .= "    elementProps['data'] = data;\n";
            $tsx .= "  }\n\n";
        }
        if (isset($props['data']) && isset($props['dataSet'])) {
            $tsx .= "  if (data !== undefined) {\n";
            $tsx .= "    elementProps['data'] = data;\n";
            $tsx .= "  }\n\n";
        }

        $tsx .= "  // Convert camelCase to kebab-case for attribute names\n";
        $tsx .= "  const toKebabCase = (str: string): string => {\n";
        $tsx .= "    return str.replace(/([a-z])([A-Z])/g, '\$1-\$2').toLowerCase();\n";
        $tsx .= "  };\n\n";

        $tsx .= "  // Props to exclude from automatic mapping\n";
        $tsx .= "  const excludedProps = new Set(['children', 'data']);\n\n";

        $tsx .= "  // Iterate over all props and map them to element attributes\n";
        $tsx .= "  Object.entries(props).forEach(([key, value]: [string, any]) => {\n";
        $tsx .= "    if (excludedProps.has(key) || value === undefined) {\n";
        $tsx .= "      return;\n";
        $tsx .= "    }\n\n";

        $tsx .= "    // Convert camelCase aria/contenteditable/autocapitalize to kebab-case\n";
        $tsx .= "    const attrName = key.startsWith('aria') || key === 'contenteditable' || key === 'autocapitalize' \n";
        $tsx .= "      ? toKebabCase(key)\n";
        $tsx .= "      : key;\n\n";

        // Collect boolean prop names for the generated code
        $booleanProps = [];
        foreach ($props as $prop) {
            if ($prop['type'] === 'boolean' && ! in_array($prop['name'], ['children', 'data'], true)) {
                $booleanProps[] = $prop['name'];
            }
        }

        if (! empty($booleanProps)) {
            $tsx .= "    // Handle boolean props that need explicit conversion\n";
            $booleanPropsStr = implode("' || key === '", $booleanProps);
            $tsx .= "    if (typeof value === 'boolean' && (key === '{$booleanPropsStr}')) {\n";
            $tsx .= "      elementProps[attrName] = value ? true : false;\n";
            $tsx .= "    } else {\n";
            $tsx .= "      elementProps[attrName] = value;\n";
            $tsx .= "    }\n";
        } else {
            $tsx .= "    elementProps[attrName] = value;\n";
        }

        $tsx .= "  });\n\n";

        // Render element
        $tsx .= "  return React.createElement(\n";
        $tsx .= "    '{$elementName}',\n";
        $tsx .= '    elementProps';

        if (! $isSelfClosing && isset($props['children'])) {
            $tsx .= ",\n    children";
        }

        $tsx .= "\n  );\n";
        $tsx .= "};\n\n";

        // Add displayName for debugging
        $tsx .= "{$componentName}.displayName = '{$componentName}';\n";

        return $tsx;
    }

    private function buildComposedComponent(
        string $componentName,
        string $elementName,
        string $name,
        string $description,
        ReflectionClass $ref,
        array $childOf,
        array $parentOf
    ): string {
        $date = date('F j, Y H:i:s');

        $tsx = "/**\n";
        $tsx .= " * THIS FILE IS AUTOGENERATED. DO NOT EDIT IT.\n";
        $tsx .= " *\n";
        $tsx .= " * @generated {$date}\n";
        $tsx .= " * @component {$name} - Composed Template\n";
        $tsx .= " * @description {$description}\n";
        $tsx .= " *\n";
        $tsx .= " * CONTENT MODEL:\n";

        if (! empty($childOf)) {
            $tsx .= ' * - Can be a child of: ' . implode(', ', array_map(function ($class) {
                return (new ReflectionClass($class))->getShortName();
            }, $childOf)) . "\n";
        }

        if (! empty($parentOf)) {
            $tsx .= ' * - Can contain: ' . implode(', ', array_map(function ($class) {
                return (new ReflectionClass($class))->getShortName();
            }, $parentOf)) . "\n";
        }

        $uniquePerParent = $ref->getStaticPropertyValue('uniquePerParent', false);
        $unique = $ref->getStaticPropertyValue('unique', false);

        if ($unique) {
            $tsx .= " * - UNIQUE: Only one allowed per document\n";
        }
        if ($uniquePerParent) {
            $tsx .= " * - UNIQUE PER PARENT: Only one allowed per parent element\n";
        }

        $tsx .= " */\n\n";

        $tsx .= "import React from 'react';\n";
        $tsx .= "import { {$componentName} } from '../" . $this->determineLevel(
            $ref->getName()
        ) . "/{$elementName}';\n";

        // Import child components - we'll collect all needed imports recursively
        $collected = [];
        $importedComponents = $this->collectImportsRecursively($parentOf, $elementName, $collected);

        foreach ($importedComponents as $import) {
            $tsx .= "import { {$import['componentName']} } from '../{$import['level']}/{$import['elementName']}';\n";
        }

        $tsx .= "\n/**\n";
        $tsx .= " * Example usage of {$name} with valid content model\n";
        $tsx .= " */\n";
        $tsx .= "export const {$componentName}Example: React.FC = () => {\n";
        $tsx .= "  return (\n";
        $tsx .= "    <{$componentName} className=\"example\">\n";

        // Generate nested example programmatically based on content model
        $tsx .= $this->generateNestedExampleFromContentModel($elementName, $parentOf, 3);

        $tsx .= "    </{$componentName}>\n";
        $tsx .= "  );\n";
        $tsx .= "};\n\n";

        $tsx .= "{$componentName}Example.displayName = '{$componentName}Example';\n";

        return $tsx;
    }

    /**
     * Recursively collect all imports needed for the composition
     */
    private function collectImportsRecursively(
        array $parentOf,
        string $parentElementName,
        array &$collected = [],
        int $depth = 0
    ): array {
        // Prevent infinite recursion and limit depth
        if ($depth > 2) {
            return [];
        }

        $importMap = [];

        foreach ($parentOf as $childClass) {
            $childRef = new ReflectionClass($childClass);
            $childElementName = $childRef->hasConstant('QUALIFIED_NAME')
                ? $childRef->getConstant('QUALIFIED_NAME')
                : strtolower($childRef->getShortName());

            $childComponentName = ucfirst($childElementName);
            $childLevel = $this->determineLevel($childClass);

            $key = "{$childLevel}/{$childElementName}";

            // Skip if already collected or if it's the parent itself (prevent circular reference)
            if (isset($collected[$key]) || $childElementName === $parentElementName) {
                continue;
            }

            $collected[$key] = true;
            $importMap[] = [
                'componentName' => $childComponentName,
                'elementName' => $childElementName,
                'level' => $childLevel,
                'class' => $childClass,
            ];

            // Get children of this child element
            $grandChildren = $childRef->getStaticPropertyValue('parentOf', []);

            // Only recurse if this element has a limited, specific set of children (< 10)
            // This prevents collecting all flow content from generic containers
            if (! empty($grandChildren) && count($grandChildren) < 10) {
                // Recursively collect imports for nested children
                $nestedImports = $this->collectImportsRecursively(
                    $grandChildren,
                    $childElementName,
                    $collected,
                    $depth + 1
                );
                $importMap = array_merge($importMap, $nestedImports);
            }
        }

        return $importMap;
    }

    /**
     * Generate nested example code based on content model metadata
     */
    private function generateNestedExampleFromContentModel(
        string $elementName,
        array $parentOf,
        int $indentLevel = 3,
        int $depth = 0
    ): string {
        // Prevent infinite recursion - limit nesting depth
        if ($depth >= 3) {
            return '';
        }

        $tsx = '';
        $indent = str_repeat('  ', $indentLevel);

        // Get direct children
        $children = [];
        foreach ($parentOf as $childClass) {
            $childRef = new ReflectionClass($childClass);
            $childElementName = $childRef->hasConstant('QUALIFIED_NAME')
                ? $childRef->getConstant('QUALIFIED_NAME')
                : strtolower($childRef->getShortName());

            $children[] = [
                'name' => $childElementName,
                'componentName' => ucfirst($childElementName),
                'class' => $childClass,
                'ref' => $childRef,
                'parentOf' => $childRef->getStaticPropertyValue('parentOf', []),
            ];
        }

        // For elements with many children, prioritize the most relevant ones
        $priorityElements = [
            'form' => ['fieldset', 'label', 'input', 'textarea', 'button', 'select', 'legend', 'meter', 'progress'],
            'fieldset' => ['legend', 'label', 'input', 'textarea', 'button'],
            'select' => ['optgroup', 'option'],
            'datalist' => ['option'],
            'table' => ['caption', 'colgroup', 'thead', 'tbody', 'tfoot', 'tr'],
            'head' => ['title', 'base', 'meta', 'link', 'script', 'style'],
            'details' => ['summary', 'p'],
        ];

        $relevantChildren = $children;
        if (isset($priorityElements[$elementName]) && count($children) > 5) {
            // Filter to priority elements first
            $priorities = $priorityElements[$elementName];
            $filtered = array_filter($children, fn ($c) => in_array($c['name'], $priorities, true));

            if (! empty($filtered)) {
                $relevantChildren = array_values($filtered);

                // For head element, ensure title comes first, then base
                if ($elementName === 'head') {
                    usort($relevantChildren, function ($a, $b) {
                        $order = [
                            'title' => 0,
                            'base' => 1,
                        ];
                        $aOrder = $order[$a['name']] ?? 999;
                        $bOrder = $order[$b['name']] ?? 999;
                        return $aOrder <=> $bOrder;
                    });
                }
            }
        }

        // Elements that should render with simple text content instead of nested children
        $textOnlyElements = [
            'dd',
            'dt',
            'li',
            'th',
            'td',
            'label',
            'button',
            'legend',
            'summary',
            'figcaption',
            'caption',
            'body',
            'title',
            'p',
        ];

        // Generate examples for each child based on common patterns
        $rendered = 0;
        foreach ($relevantChildren as $index => $child) {
            $componentName = $child['componentName'];
            $childParentOf = $child['parentOf'];
            $childRef = $child['ref'];

            // Check if element is unique per parent (only render one instance)
            $uniquePerParent = $childRef->getStaticPropertyValue('uniquePerParent', false);
            $renderCount = $uniquePerParent ? 1 : 2;

            // Render the element 1 or 2 times based on uniquePerParent
            for ($i = 0; $i < $renderCount; $i++) {
                $currentIndex = $index + $i;

                // Check if this element should only have text content
                $forceTextOnly = in_array($child['name'], $textOnlyElements, true);

                // Check if child has its own children (needs nesting)
                if (! empty($childParentOf) && ! $forceTextOnly) {
                    // This child has its own structure - render it nested
                    $tsx .= "{$indent}<{$componentName}>\n";
                    $tsx .= $this->generateNestedExampleFromContentModel(
                        $child['name'],
                        $childParentOf,
                        $indentLevel + 1,
                        $depth + 1
                    );
                    $tsx .= "{$indent}</{$componentName}>\n";
                } else {
                    // Leaf node or text-only element - render with sample content
                    $tsx .= $this->generateLeafExample($child['name'], $componentName, $indent, $currentIndex);
                }
            }

            $rendered++;

            // Limit to keep examples concise (3-5 children depending on element)
            // Special case for head - show all priority elements
            if ($elementName === 'head') {
                $maxChildren = 6; // title, base, meta, link, script, style
            } else {
                $maxChildren = count($relevantChildren) > 10 ? 4 : 3;
            }

            if ($rendered >= $maxChildren) {
                break;
            }
        }

        return $tsx;
    }

    /**
     * Generate example for a leaf element (no children)
     */
    private function generateLeafExample(string $elementName, string $componentName, string $indent, int $index): string
    {
        // Self-closing elements
        $selfClosing = [
            'img',
            'input',
            'br',
            'hr',
            'area',
            'source',
            'col',
            'track',
            'wbr',
            'meta',
            'link',
            'base',
            'param',
        ];

        $tsx = '';

        if (in_array($elementName, $selfClosing, true)) {
            // Generate realistic props for common self-closing elements
            switch ($elementName) {
                case 'img':
                    $tsx .= "{$indent}<{$componentName} src=\"image.jpg\" alt=\"Description\" />\n";
                    break;
                case 'input':
                    $type = ['text', 'email', 'number'][$index % 3];
                    $tsx .= "{$indent}<{$componentName} type=\"{$type}\" name=\"field{$index}\" />\n";
                    break;
                case 'source':
                    $tsx .= "{$indent}<{$componentName} srcset=\"image-{$index}.jpg\" media=\"(min-width: 400px)\" />\n";
                    break;
                case 'area':
                    $tsx .= "{$indent}<{$componentName} shape=\"rect\" coords=\"0,0,100,100\" href=\"#link{$index}\" alt=\"Area {$index}\" />\n";
                    break;
                case 'col':
                    $tsx .= "{$indent}<{$componentName} span={1} />\n";
                    break;
                default:
                    $tsx .= "{$indent}<{$componentName} />\n";
            }
        } else {
            // Elements with content
            switch ($elementName) {
                case 'option':
                    $tsx .= "{$indent}<{$componentName} value=\"{$index}\">Option " . ($index + 1) . "</{$componentName}>\n";
                    break;
                case 'li':
                    $tsx .= "{$indent}<{$componentName}>Item " . ($index + 1) . "</{$componentName}>\n";
                    break;
                case 'dt':
                    $tsx .= "{$indent}<{$componentName}>Term " . ($index + 1) . "</{$componentName}>\n";
                    break;
                case 'dd':
                    $tsx .= "{$indent}<{$componentName}>Definition " . ($index + 1) . "</{$componentName}>\n";
                    break;
                case 'th':
                case 'td':
                    $tsx .= "{$indent}<{$componentName}>" . ($elementName === 'th' ? 'Header' : 'Data') . ' ' . ($index + 1) . "</{$componentName}>\n";
                    break;
                case 'legend':
                    $tsx .= "{$indent}<{$componentName}>Group Title</{$componentName}>\n";
                    break;
                case 'summary':
                    $tsx .= "{$indent}<{$componentName}>Click to expand</{$componentName}>\n";
                    break;
                case 'figcaption':
                    $tsx .= "{$indent}<{$componentName}>Figure caption</{$componentName}>\n";
                    break;
                case 'label':
                    $tsx .= "{$indent}<{$componentName} htmlFor=\"field{$index}\">Label " . ($index + 1) . ":</{$componentName}>\n";
                    break;
                case 'button':
                    $tsx .= "{$indent}<{$componentName} type=\"submit\">Submit</{$componentName}>\n";
                    break;
                case 'title':
                    $tsx .= "{$indent}<{$componentName}>Page Title</{$componentName}>\n";
                    break;
                case 'textarea':
                    $tsx .= "{$indent}<{$componentName} name=\"message\" rows={4} />\n";
                    break;
                case 'h1':
                case 'h2':
                case 'h3':
                case 'h4':
                case 'h5':
                case 'h6':
                    $level = substr($elementName, 1);
                    $tsx .= "{$indent}<{$componentName}>Heading Level {$level}</{$componentName}>\n";
                    break;
                case 'rt':
                    $tsx .= "{$indent}<{$componentName}>annotation</{$componentName}>\n";
                    break;
                default:
                    $tsx .= "{$indent}<{$componentName}>Example content</{$componentName}>\n";
            }
        }

        return $tsx;
    }

    private function determineLevel(string $className): string
    {
        $level = (new ReflectionClass($className))->getParentClass();
        if (! $level) {
            return 'inline'; // default
        }
        $parts = explode('\\', $level->getName());
        return strtolower(str_replace('Element', '', end($parts)));
    }
}
