<?php

namespace Html\TemplateGenerator;

use Html\Interface\HTMLElementDelegatorInterface;
use Html\Interface\TemplateGeneratorInterface;
use Html\Mapping\TemplateGenerator;
use ReflectionClass;
use ReflectionNamedType;
use ReflectionUnionType;

/**
 * TypeScriptGenerator - Generates Pure TypeScript Classes
 *
 * Creates framework-agnostic TypeScript classes that represent HTML elements
 * with full type safety, enum validation, and autocompletion support. These
 * classes can be imported and used to create DOM elements programmatically.
 *
 * Generated structure:
 * - Classes: typescript/{block|inline|void}/ElementName.ts
 * - Composed: typescript/{block|inline|void}/ElementNameExample.ts
 *
 * Features:
 * - TypeScript interfaces with full type safety
 * - Enum validation using union types
 * - Global attribute interfaces
 * - Autocompletion-friendly property exposure
 * - DOM element creation methods
 * - Content model validation in composed examples
 *
 * The classes are pure TypeScript and can be used in any JavaScript environment
 * that supports ES6+ modules and DOM APIs.
 *
 * @see https://www.typescriptlang.org/
 */
#[TemplateGenerator('typescript')]
class TypeScriptGenerator implements TemplateGeneratorInterface
{
    private const TS_RESERVED_WORDS = [
        'break', 'case', 'catch', 'class', 'const', 'continue', 'debugger', 'default',
        'delete', 'do', 'else', 'enum', 'export', 'extends', 'false', 'finally', 'for',
        'function', 'if', 'import', 'in', 'instanceof', 'new', 'null', 'return', 'super',
        'switch', 'this', 'throw', 'true', 'try', 'typeof', 'var', 'void', 'while', 'with',
        'implements', 'interface', 'let', 'package', 'private', 'protected', 'public',
        'static', 'yield', 'any', 'boolean', 'constructor', 'declare', 'get', 'module',
        'require', 'number', 'set', 'string', 'symbol', 'type', 'from', 'of',
    ];

    public function getExtension(): string
    {
        return 'ts';
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
     * Generate a composed TypeScript example showing valid parent-child relationships
     */
    public function renderComposedElement(HTMLElementDelegatorInterface $element): ?string
    {
        $ref = new ReflectionClass($element);

        // Get content model metadata
        $childOf = $ref->getStaticPropertyValue('childOf', []);
        $parentOf = $ref->getStaticPropertyValue('parentOf', []);

        // Only generate composed templates for elements with SPECIFIC allowed children
        if (empty($parentOf)) {
            return null;
        }

        $elementName = $ref->hasConstant('QUALIFIED_NAME') ? $ref->getConstant('QUALIFIED_NAME') : strtolower(
            $ref->getShortName()
        );

        // Skip generic containers that don't have meaningful composition patterns
        $excludedElements = [
            'div', 'span', 'section', 'article', 'header', 'footer', 'main', 'aside',
            'nav', 'body', 'html', 'head', 'title', 'meta', 'link', 'script', 'style',
        ];
        if (in_array($elementName, $excludedElements, true)) {
            return null;
        }

        // Get element metadata from class-level doc comment
        $desc = '';
        $docComment = $ref->getDocComment();
        if ($docComment !== false) {
            $lines = explode("\n", $docComment);
            foreach ($lines as $line) {
                $line = trim($line, " \t/*");
                if (str_starts_with($line, '*') && !str_starts_with($line, '*/') && !str_starts_with($line, '* @')) {
                    $desc = trim(substr($line, 1));
                    break;
                }
            }
        }
        $name = ucfirst($elementName);

        return $this->buildComposedTypeScript($elementName, $name, $desc, $ref, $childOf, $parentOf);
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
            $lines = explode("\n", $docComment);
            foreach ($lines as $line) {
                $line = trim($line, " \t/*");
                if (str_starts_with($line, '*') && !str_starts_with($line, '*/') && !str_starts_with($line, '* @')) {
                    $desc = trim(substr($line, 1));
                    break;
                }
            }
        }
        $name = ucfirst($elementName);
        $level = $this->determineLevel($ref->getName());

        $props = [];
        $enums = [];
        $enumImports = [];

        // Add children for non-self-closing elements
        if (!$isSelfClosing) {
            $props['children'] = [
                'type' => 'string | HTMLElement | (string | HTMLElement)[]',
                'description' => 'Child content or elements',
                'required' => false,
                'defaultValue' => null,
            ];
        }

        // Create an example instance of the element to resolve global attributes
        $example = null;
        try {
            $example = $ref->newInstance();
        } catch (\Throwable $e) {
            // Ignore if we can't create an instance
        }

        // If we have an example instance, read available global attribute traits
        if ($example !== null) {
            $globalTraits = $this->getGlobalAttributeTraits($example);
            foreach ($globalTraits as $traitName => $traitInfo) {
                $propName = $this->camelToKebab($traitName);
                if ($propName === 'class') {
                    $propName = 'className';
                }
                $props[$propName] = [
                    'type' => $traitInfo['type'],
                    'description' => $traitInfo['description'],
                    'required' => false,
                    'defaultValue' => $traitInfo['default'],
                    'isGlobal' => true,
                ];
            }
        }

        // Collect all properties with getter and setter (element-specific attributes)
        foreach ($ref->getProperties() as $prop) {
            $propName = $prop->getName();
            $getter = 'get' . ucfirst($propName);
            $setter = 'set' . ucfirst($propName);
            if ($ref->hasMethod($getter) && $ref->hasMethod($setter)) {
                $getterMethod = $ref->getMethod($getter);
                $setterMethod = $ref->getMethod($setter);

                // Get property type from reflection
                $type = $this->getPropertyType($prop, $getterMethod);

                // Check if it's an enum
                $isEnum = false;
                $enumClass = null;
                $propType = $prop->getType();
                if ($propType instanceof ReflectionNamedType && str_ends_with($propType->getName(), 'Enum')) {
                    $isEnum = true;
                    $enumClass = basename(str_replace('\\', '/', $propType->getName())); // Extract just the enum name
                } elseif ($propType instanceof ReflectionUnionType) {
                    foreach ($propType->getTypes() as $unionType) {
                        if (str_ends_with($unionType->getName(), 'Enum')) {
                            $isEnum = true;
                            $enumClass = basename(str_replace('\\', '/', $unionType->getName())); // Extract just the enum name
                            break;
                        }
                    }
                }

                // Get description from doc comment
                $description = $this->getPropertyDescription($prop);

                // Convert property name to attribute name
                $attrName = $this->camelToKebab($propName);

                $props[$attrName] = [
                    'type' => $type,
                    'description' => $description,
                    'required' => false,
                    'defaultValue' => null,
                    'isEnum' => $isEnum,
                    'enumClass' => $enumClass,
                ];
            }
        }

        // Sort props alphabetically (except children which stays first)
        $reserved = ['children'];
        $sortedKeys = array_keys($props);
        usort($sortedKeys, function ($a, $b) use ($reserved) {
            if (in_array($a, $reserved)) return -1;
            if (in_array($b, $reserved)) return 1;
            return strcasecmp($a, $b);
        });

        $sortedProps = [];
        foreach ($sortedKeys as $key) {
            $sortedProps[$key] = $props[$key];
        }

        $ts = $this->buildTypeScriptClass(
            $elementName,
            $name,
            $desc,
            $sortedProps,
            $enumImports,
            $isSelfClosing
        );

        return $ts;
    }

    private function camelToKebab(string $string): string
    {
        return strtolower(preg_replace('/([a-z])([A-Z])/', '$1-$2', $string));
    }

    private function getPropertyType(\ReflectionProperty $prop, \ReflectionMethod $getter): string
    {
        $type = $prop->getType();
        if ($type instanceof ReflectionNamedType) {
            $typeName = $type->getName();
            $allowsNull = $type->allowsNull();
            
            if ($typeName === 'string') {
                return $allowsNull ? 'string | null | undefined' : 'string | undefined';
            } elseif ($typeName === 'int') {
                return $allowsNull ? 'number | null | undefined' : 'number | undefined';
            } elseif ($typeName === 'bool') {
                return $allowsNull ? 'boolean | null | undefined' : 'boolean | undefined';
            } elseif (str_ends_with($typeName, 'Enum')) {
                return $allowsNull ? 'string | boolean | null | undefined' : 'string | boolean | undefined';
            } else {
                return $allowsNull ? 'string | null | undefined' : 'string | undefined'; // Default fallback
            }
        } elseif ($type instanceof ReflectionUnionType) {
            $types = [];
            foreach ($type->getTypes() as $unionType) {
                $unionTypeName = $unionType->getName();
                if ($unionTypeName === 'null') {
                    continue; // Handle nullability separately
                } elseif (str_ends_with($unionTypeName, 'Enum')) {
                    $types[] = 'string | boolean | null | undefined';
                } else {
                    $types[] = $this->getTypeName($unionTypeName);
                }
            }
            return implode(' | ', $types);
        }
        return 'any';
    }

    private function getTypeName(string $phpType): string
    {
        return match ($phpType) {
            'string' => 'string',
            'int' => 'number',
            'bool' => 'boolean',
            default => str_ends_with($phpType, 'Enum') ? $this->getEnumType(basename(str_replace('\\', '/', $phpType))) : 'any',
        };
    }

    private function getEnumType(string $enumClass): string
    {
        // Try to dynamically load the enum
        $fullClassName = "Html\\Enum\\{$enumClass}";
        if (enum_exists($fullClassName)) {
            try {
                $cases = $fullClassName::cases();
                $values = array_map(fn($case) => "'{$case->value}'", $cases);
                return implode(' | ', $values);
            } catch (\Throwable $e) {
                // Fallback
            }
        }
        return 'string'; // Fallback to string if enum not found
    }

    private function getPropertyDescription(\ReflectionProperty $prop): string
    {
        $docComment = $prop->getDocComment();
        if ($docComment !== false) {
            // Remove the /** and */ and extract the main description
            $docComment = preg_replace('/^\/\*\*\s*\n/', '', $docComment);
            $docComment = preg_replace('/\s*\*\/\s*$/', '', $docComment);
            $lines = explode("\n", $docComment);
            $description = '';
            foreach ($lines as $line) {
                $line = trim($line);
                if (str_starts_with($line, '*')) {
                    $line = trim(substr($line, 1));
                    if (!str_starts_with($line, '@') && !empty($line)) {
                        $description .= $line . ' ';
                    }
                }
            }
            return trim($description);
        }
        return '';
    }

    private function getGlobalAttributeTraits(object $element): array
    {
        $traits = [];
        $ref = new ReflectionClass($element);

        // Check which global attribute traits are used
        $globalTraitClasses = [
            'AccesskeyTrait' => ['type' => 'string', 'description' => 'Keyboard shortcut to activate or focus the element'],
            'AutocapitalizeTrait' => ['type' => 'string', 'description' => 'Controls automatic capitalization'],
            'AutofocusTrait' => ['type' => 'boolean', 'description' => 'Automatically focus the element when the page loads'],
            'ClassTrait' => ['type' => 'string', 'description' => 'CSS class names'],
            'ContenteditableTrait' => ['type' => 'boolean | "true" | "false" | "inherit"', 'description' => 'Whether the element is editable'],
            'DataTrait' => ['type' => 'Record<string, string>', 'description' => 'Custom data attributes'],
            'DirTrait' => ['type' => '"ltr" | "rtl" | "auto"', 'description' => 'Text direction'],
            'DraggableTrait' => ['type' => 'boolean', 'description' => 'Whether the element can be dragged'],
            'HiddenTrait' => ['type' => 'boolean', 'description' => 'Whether the element is hidden'],
            'IdTrait' => ['type' => 'string', 'description' => 'Unique identifier'],
            'InputmodeTrait' => ['type' => 'string', 'description' => 'Type of virtual keyboard to show'],
            'LangTrait' => ['type' => 'string', 'description' => 'Language of the element'],
            'PopoverTrait' => ['type' => 'string', 'description' => 'Controls popover behavior'],
            'SlotTrait' => ['type' => 'string', 'description' => 'Shadow DOM slot name'],
            'SpellcheckTrait' => ['type' => 'boolean', 'description' => 'Whether to check spelling'],
            'StyleTrait' => ['type' => 'string | Partial<CSSStyleDeclaration>', 'description' => 'Inline CSS styles'],
            'TabindexTrait' => ['type' => 'number', 'description' => 'Tab order position'],
            'TitleTrait' => ['type' => 'string', 'description' => 'Tooltip text'],
            'TranslateTrait' => ['type' => 'boolean', 'description' => 'Whether the element should be translated'],
        ];

        foreach ($globalTraitClasses as $traitName => $traitInfo) {
            $traitClass = "Html\\Trait\\GlobalAttribute\\{$traitName}";
            if ($this->usesTrait($ref, $traitClass)) {
                $propName = $this->traitToPropertyName($traitName);
                $traits[$propName] = $traitInfo;
            }
        }

        return $traits;
    }

    private function usesTrait(ReflectionClass $class, string $trait): bool
    {
        $traits = $class->getTraitNames();
        return in_array($trait, $traits);
    }

    private function traitToPropertyName(string $traitName): string
    {
        // Convert trait names to property names
        return match ($traitName) {
            'ClassTrait' => 'className',
            'IdTrait' => 'id',
            'StyleTrait' => 'style',
            'TitleTrait' => 'title',
            'TabindexTrait' => 'tabIndex',
            'ContenteditableTrait' => 'contentEditable',
            'AutofocusTrait' => 'autofocus',
            'DraggableTrait' => 'draggable',
            'HiddenTrait' => 'hidden',
            'LangTrait' => 'lang',
            'DirTrait' => 'dir',
            'SpellcheckTrait' => 'spellcheck',
            'AccesskeyTrait' => 'accessKey',
            'AutocapitalizeTrait' => 'autocapitalize',
            'InputmodeTrait' => 'inputmode',
            'PopoverTrait' => 'popover',
            'SlotTrait' => 'slot',
            'TranslateTrait' => 'translate',
            'DataTrait' => 'data',
            default => lcfirst(str_replace('Trait', '', $traitName)),
        };
    }

    private function buildTypeScriptClass(
        string $elementName,
        string $className,
        string $description,
        array $props,
        array $enumImports,
        bool $isSelfClosing
    ): string {
        $date = date('F j, Y H:i:s');

        $ts = "/**\n";
        $ts .= " * THIS FILE IS AUTOGENERATED. DO NOT EDIT IT.\n";
        $ts .= " *\n";
        $ts .= " * @generated {$date}\n";
        $ts .= " * @component {$className}\n";
        $ts .= " * @description {$description}\n";
        $ts .= " */\n\n";

        // Import statements - none needed for now since we use inline union types
        // if (!empty($enumImports)) {
        //     $ts .= "import { " . implode(', ', array_unique($enumImports)) . " } from './enums';\n\n";
        // }

        // Interface definition
        $ts .= "export interface {$className}Props {\n";
        foreach ($props as $propName => $propData) {
            $optional = $propData['required'] ? '' : '?';
            $ts .= "  /**\n";
            $ts .= "   * {$propData['description']}\n";
            $ts .= "   */\n";
            $quotedPropName = $this->quotePropertyName($propName);
            $ts .= "  {$quotedPropName}{$optional}: {$propData['type']};\n";
        }
        $ts .= "}\n\n";

        // Class definition
        $ts .= "/**\n";
        $ts .= " * {$className} - {$description}\n";
        $ts .= " */\n";
        $ts .= "export class {$className} {\n";
        $ts .= "  private element: HTMLElement;\n\n";

        // Constructor
        $ts .= "  constructor(props: {$className}Props = {}) {\n";
        $ts .= "    this.element = document.createElement('{$elementName}');\n";
        $ts .= "    this.applyProps(props);\n";
        $ts .= "  }\n\n";

        // applyProps method
        $ts .= "  private applyProps(props: {$className}Props): void {\n";
        foreach ($props as $propName => $propData) {
            $quotedPropName = $this->quotePropertyName($propName);
            $isQuoted = $quotedPropName !== $propName;
            $propAccess = $isQuoted ? "['{$propName}']" : ".{$propName}";
            
            if ($propName === 'children') {
                $ts .= "    if (props{$propAccess} !== undefined) {\n";
                $ts .= "      this.setChildren(props{$propAccess});\n";
                $ts .= "    }\n";
            } elseif ($propData['type'] === 'boolean') {
                $ts .= "    if (props{$propAccess} !== undefined) {\n";
                $ts .= "      this.set{$this->toPascalCase($propName)}(props{$propAccess});\n";
                $ts .= "    }\n";
            } elseif ($propData['isEnum'] ?? false) {
                $ts .= "    if (props{$propAccess} !== undefined) {\n";
                $ts .= "      this.set{$this->toPascalCase($propName)}(props{$propAccess});\n";
                $ts .= "    }\n";
            } else {
                $ts .= "    if (props{$propAccess} !== undefined) {\n";
                $ts .= "      this.element.setAttribute('{$propName}', String(props{$propAccess}));\n";
                $ts .= "    }\n";
            }
        }
        $ts .= "  }\n\n";

        // Property setters
        foreach ($props as $propName => $propData) {
            if ($propName === 'children') {
                continue;
            }
            $methodName = $this->toPascalCase($propName);
            $valueType = $propData['type'];
            $ts .= "  set{$methodName}(value: {$valueType}): this {\n";
            if ($valueType === 'string | boolean | null | undefined') {
                $ts .= "    if (value === null || value === undefined) {\n";
                $ts .= "      this.element.removeAttribute('{$propName}');\n";
                $ts .= "    } else {\n";
                $ts .= "      this.element.setAttribute('{$propName}', String(value));\n";
                $ts .= "    }\n";
            } elseif (str_contains($valueType, 'boolean')) {
                $ts .= "    if (value === true) {\n";
                $ts .= "      this.element.setAttribute('{$propName}', '');\n";
                $ts .= "    } else {\n";
                $ts .= "      this.element.removeAttribute('{$propName}');\n";
                $ts .= "    }\n";
            } else {
                $ts .= "    if (value === null || value === undefined) {\n";
                $ts .= "      this.element.removeAttribute('{$propName}');\n";
                $ts .= "    } else {\n";
                $ts .= "      this.element.setAttribute('{$propName}', String(value));\n";
                $ts .= "    }\n";
            }
            $ts .= "    return this;\n";
            $ts .= "  }\n\n";
        }

        // setChildren method
        if (!$isSelfClosing) {
            $ts .= "  setChildren(children: string | HTMLElement | (string | HTMLElement)[]): this {\n";
            $ts .= "    // Clear existing children\n";
            $ts .= "    while (this.element.firstChild) {\n";
            $ts .= "      this.element.removeChild(this.element.firstChild);\n";
            $ts .= "    }\n";
            $ts .= "    \n";
            $ts .= "    if (typeof children === 'string') {\n";
            $ts .= "      this.element.textContent = children;\n";
            $ts .= "    } else if (Array.isArray(children)) {\n";
            $ts .= "      children.forEach(child => {\n";
            $ts .= "        if (typeof child === 'string') {\n";
            $ts .= "          this.element.appendChild(document.createTextNode(child));\n";
            $ts .= "        } else {\n";
            $ts .= "          this.element.appendChild(child);\n";
            $ts .= "        }\n";
            $ts .= "      });\n";
            $ts .= "    } else {\n";
            $ts .= "      this.element.appendChild(children);\n";
            $ts .= "    }\n";
            $ts .= "    return this;\n";
            $ts .= "  }\n\n";
        }

        // getElement method
        $ts .= "  getElement(): HTMLElement {\n";
        $ts .= "    return this.element;\n";
        $ts .= "  }\n";

        $ts .= "}\n";

        return $ts;
    }

    private function toPascalCase(string $string): string
    {
        return str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $string)));
    }

    private function quotePropertyName(string $name): string
    {
        // Quote if contains hyphens or other invalid characters for property names
        if (preg_match('/[^a-zA-Z0-9_$]/', $name)) {
            return "'{$name}'";
        }
        return $name;
    }

    private function buildComposedTypeScript(
        string $elementName,
        string $name,
        string $description,
        ReflectionClass $ref,
        array $childOf,
        array $parentOf
    ): string {
        $ts = "/**\n";
        $ts .= " * THIS FILE IS AUTOGENERATED. DO NOT EDIT IT.\n";
        $ts .= " *\n";
        $ts .= " * @generated " . date('F j, Y H:i:s') . "\n";
        $ts .= " * @component {$name}Example\n";
        $ts .= " * @description {$description} - Composed Example\n";
        $ts .= " */\n\n";

        $ts .= "import { {$name} } from './{$elementName}';\n\n";

        $ts .= "/**\n";
        $ts .= " * {$name}Example - Demonstrates valid parent-child relationships\n";
        $ts .= " *\n";
        $ts .= " * CONTENT MODEL:\n";
        if (!empty($childOf)) {
            $ts .= " * - Can be child of: " . implode(', ', array_map(fn($c) => basename(str_replace('\\', '/', $c)), $childOf)) . "\n";
        }
        if (!empty($parentOf)) {
            $ts .= " * - Can contain: " . implode(', ', array_map(fn($c) => basename(str_replace('\\', '/', $c)), $parentOf)) . "\n";
        }
        $ts .= " */\n";
        $ts .= "export class {$name}Example {\n";
        $ts .= "  static create(): HTMLElement {\n";
        $ts .= "    const element = new {$name}();\n";
        $ts .= "    \n";
        $ts .= "    // Add example content\n";
        $ts .= "    // This would include valid child elements based on content model\n";
        $ts .= "    \n";
        $ts .= "    return element.getElement();\n";
        $ts .= "  }\n";
        $ts .= "}\n";

        return $ts;
    }

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