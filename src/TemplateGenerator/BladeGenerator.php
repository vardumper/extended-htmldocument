<?php

namespace Html\TemplateGenerator;

use BackedEnum;
use Html\Interface\HTMLDocumentDelegatorInterface;
use Html\Interface\HTMLElementDelegatorInterface;
use Html\Interface\TemplateGeneratorInterface;
use Html\Mapping\TemplateGenerator;
use Html\Trait\ClassResolverTrait;
use ReflectionClass;
use ReflectionNamedType;
use ReflectionUnionType;
use UnitEnum;

/**
 * BladeGenerator - Generates Laravel Blade Templates
 *
 * Creates Blade component templates with automatic attribute binding,
 * enum validation, and content sections. Templates use @php blocks for
 * attribute logic and @section/@yield for content composition.
 *
 * Generated structure:
 * - Templates: blade/{block|inline|void}/element-name/element-name.blade.php
 *
 * Features:
 * - Enum choices validation via associative arrays
 * - Boolean attribute handling (autofocus, draggable, hidden)
 * - Automatic camelCase to kebab-case conversion
 * - Reserved word collision avoidance
 * - Content model documentation in composed templates
 *
 * @see https://laravel.com/docs/blade
 */
#[TemplateGenerator('blade')]
class BladeGenerator implements TemplateGeneratorInterface
{
    use ClassResolverTrait;

    private const BLADE_RESERVED_WORDS = [
        'if', 'else', 'elseif', 'endif', 'foreach', 'endforeach', 'for', 'endfor', 'while', 'endwhile', 'switch', 'endswitch', 'case', 'break', 'default', 'continue', 'extends', 'section', 'endsection', 'yield', 'show', 'include', 'each', 'parent', 'php', 'endphp', 'verbatim', 'endverbatim', 'csrf', 'method', 'error', 'enderror', 'push', 'endpush', 'stack', 'prepend', 'endprepend', 'auth', 'endauth', 'guest', 'endguest', 'hasSection', 'inject', 'json', 'once', 'endonce', 'isset', 'endisset', 'empty', 'endempty', 'env', 'production', 'env', 'endenv',
    ];

    private string $documentRenderMode = 'raw';

    public function getExtension(): string
    {
        return 'blade.php';
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
        return true;
    }

    public function isTemplated(): bool
    {
        return true;
    }

    public function render($elementOrDocument): ?string
    {
        if ($elementOrDocument instanceof HTMLDocumentDelegatorInterface && $this->canRenderDocuments()) {
            return $this->renderDocument($elementOrDocument);
        }

        if ($elementOrDocument instanceof HTMLElementDelegatorInterface && $this->canRenderElements()) {
            return $this->renderElement($elementOrDocument);
        }
        return null;
    }

    public function setDocumentRenderMode(string $mode): void
    {
        $normalized = strtolower(trim($mode));
        $this->documentRenderMode = $normalized === 'raw' ? 'raw' : 'include';
    }

    public function renderDocument(HTMLDocumentDelegatorInterface $document): string
    {
        if ($this->documentRenderMode === 'raw') {
            return $this->renderDocumentRaw($document);
        }

        return $this->renderDocumentFromTemplates($document);
    }

    public function renderElement(HTMLElementDelegatorInterface $element): string
    {
        $ref = new ReflectionClass($element);
        $elementName = $ref->hasConstant('QUALIFIED_NAME') ? $ref->getConstant('QUALIFIED_NAME') : strtolower(
            $ref->getShortName()
        );
        $props = [];
        $enums = [];

        foreach ($ref->getProperties() as $prop) { /* Collect all properties with getter and setter */
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
                            $enums[$name] = $choices;
                        }
                    }
                } elseif ($type && $type instanceof ReflectionNamedType && enum_exists($type->getName())) {
                    $choices = array_map(
                        fn (UnitEnum $case) => $case instanceof BackedEnum ? $case->value : $case->name,
                        $type->getName()::cases()
                    );
                    $enums[$name] = $choices;
                }
                $props[] = $name;
            }
        }

        $globalAttrs = ['id', 'class']; /* Add global attributes */
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

        $blade = "{{--\n  This file is auto-generated.\n\n  {$name} - {$desc}\n\n  @component {$elementName}\n  @author vardumper <info@erikpoehler.com>\n  @package vardumper/extended-htmldocument\n  @see src/TemplateGenerator/BladeGenerator.php\n--}}\n";

        $blade .= "@php\n"; /* Emit enum choices as Blade @php associative arrays */
        foreach ($enums as $attr => $choices) {
            $assoc = [];
            foreach ($choices as $choice) {
                $assoc[] = var_export($choice, true) . ' => true';
            }
            $blade .= '$' . $attr . 'Choices = [' . implode(', ', $assoc) . '];' . "\n";
        }

        $blade .= '$attrs = [];' . "\n"; /* Attribute rendering logic */
        foreach ($props as $attr) {
            $htmlAttr = $this->camelToKebab($attr);
            if (array_key_exists($attr, $enums)) {
                $blade .= 'if (isset($' . $attr . ') && isset($' . $attr . 'Choices[$' . $attr . '])) $attrs[] = \'' . $htmlAttr . '="\' . e($' . $attr . ') . \'"\';' . "\n";
            } elseif (in_array($attr, ['autofocus', 'draggable', 'hidden'], true)) {
                $blade .= 'if (isset($' . $attr . ') && $' . $attr . ') $attrs[] = \'' . $htmlAttr . '\';' . "\n";
            } else {
                $blade .= 'if (isset($' . $attr . ')) $attrs[] = \'' . $htmlAttr . '="\' . e($' . $attr . ') . \'"\';' . "\n";
            }
        }
        $blade .= "@endphp\n";

        if ($isSelfClosing) {
            $blade .= "<{$elementName} {!! implode(' ', \$attrs) !!} />\n";
        } else {
            $blade .= "<{$elementName} {!! implode(' ', \$attrs) !!}>\n  {!! \$content ?? trim(\$__env->yieldContent('content')) !!}\n</{$elementName}>\n";
        }

        return $blade;
    }

    /**
     * Generate a composed Blade template showing valid parent-child relationships
     *
     * Creates a Blade template demonstrating the element with its valid children
     * based on content model metadata ($parentOf).
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

        return $this->buildComposedBladeTemplate($elementName, $name, $desc, $ref, $childOf, $parentOf);
    }

    private function renderDocumentRaw(HTMLDocumentDelegatorInterface $document): string
    {
        $blade = "{{--\n";
        $blade .= "  This file is auto-generated.\n\n";
        $blade .= "  @see src/TemplateGenerator/BladeGenerator.php\n";
        $blade .= "--}}\n";

        $dom = $document->delegated;
        if ($dom->body !== null && $dom->body->childNodes->length > 0) {
            $blade .= $this->serializeRawNodeChildren($dom->body, 0);
        } elseif ($dom->documentElement !== null) {
            $blade .= $this->serializeRawNodeChildren($dom->documentElement, 0);
        } else {
            $blade .= $this->serializeRawNodeChildren($dom, 0);
        }

        return $blade;
    }

    private function renderDocumentFromTemplates(HTMLDocumentDelegatorInterface $document): string
    {
        $blade = "{{--\n";
        $blade .= "  This file is auto-generated.\n\n";
        $blade .= "  Strict mode: include\n\n";
        $blade .= "  @see src/TemplateGenerator/BladeGenerator.php\n";
        $blade .= "--}}\n";

        $counter = 0;
        $root = $document->delegated->body ?? $document->delegated;
        foreach ($root->childNodes as $child) {
            $blade .= $this->renderTemplateNode($child, 0, $counter);
        }

        return $blade;
    }

    private function renderTemplateNode(\DOM\Node $node, int $depth, int &$counter): string
    {
        $indent = str_repeat('  ', $depth);

        if ($node instanceof \DOM\Text) {
            $text = trim($node->nodeValue ?? '');
            if ($text === '') {
                return '';
            }

            return $indent . $text . "\n";
        }

        if (! ($node instanceof \DOM\Element)) {
            return '';
        }

        $tag = strtolower($node->tagName);
        if ($tag === 'html' || $tag === 'head' || $tag === 'body') {
            $output = '';
            foreach ($node->childNodes as $child) {
                $output .= $this->renderTemplateNode($child, $depth, $counter);
            }
            return $output;
        }

        $templatePath = $this->resolveBladeTemplatePath($tag);
        if ($templatePath === null) {
            return $this->serializeRawNode($node, $depth);
        }

        $params = $this->buildBladeTemplateParams($node);
        $children = $this->renderTemplateChildren($node, $depth + 1, $counter);
        if (trim($children) !== '') {
            $counter++;
            $contentVar = '$__bladeContent' . $counter;
            $output = $indent . "@php(ob_start())\n";
            $output .= $children;
            $output .= $indent . $contentVar . " = ob_get_clean();\n";
            $output .= $indent . "@endphp\n";
            $params['content'] = $contentVar;
            $output .= $this->buildBladeIncludeLine($templatePath, $params, $depth);
            return $output;
        }

        return $this->buildBladeIncludeLine($templatePath, $params, $depth);
    }

    private function renderTemplateChildren(\DOM\Element $element, int $depth, int &$counter): string
    {
        $output = '';
        foreach ($element->childNodes as $child) {
            $output .= $this->renderTemplateNode($child, $depth, $counter);
        }
        return $output;
    }

    private function buildBladeTemplateParams(\DOM\Element $element): array
    {
        $params = [];
        foreach ($element->attributes as $attribute) {
            $params[$attribute->name] = $attribute->value;
        }

        if ($element->childNodes->length === 1 && $element->firstChild instanceof \DOM\Text) {
            $text = trim($element->firstChild->nodeValue ?? '');
            if ($text !== '') {
                $params['content'] = $text;
            }
        }

        return $params;
    }

    private function buildBladeIncludeLine(string $templatePath, array $params, int $depth): string
    {
        $indent = str_repeat('  ', $depth);
        if ($params === []) {
            return $indent . "@include('{$templatePath}')\n";
        }

        $parts = [];
        foreach ($params as $key => $value) {
            if (is_string($value) && str_starts_with($value, '$')) {
                $parts[] = "'{$key}' => {$value}";
            } else {
                $parts[] = "'{$key}' => " . var_export($value, true);
            }
        }

        return $indent . "@include('{$templatePath}', [" . implode(', ', $parts) . "])\n";
    }

    private function resolveBladeTemplatePath(string $tagName): ?string
    {
        $className = $this->getElementByQualifiedName($tagName);
        if ($className === null) {
            return null;
        }

        $level = $this->determineLevel($className);
        return 'blade.' . $level . '.' . $tagName . '.' . $tagName;
    }

    private function serializeRawNodeChildren(\DOM\Node $node, int $depth): string
    {
        $output = '';
        foreach ($node->childNodes as $child) {
            $output .= $this->serializeRawNode($child, $depth);
        }
        return $output;
    }

    private function serializeRawNode(\DOM\Node $node, int $depth): string
    {
        $indent = str_repeat('  ', $depth);

        if ($node instanceof \DOM\Element) {
            $tag = strtolower($node->tagName);
            if ($tag === 'html' || $tag === 'head' || $tag === 'body') {
                return $this->serializeRawNodeChildren($node, $depth);
            }

            $attrs = '';
            foreach ($node->attributes as $attr) {
                $attrs .= ' ' . $attr->name . '="' . $attr->value . '"';
            }

            $voidElements = [
                'area',
                'base',
                'br',
                'col',
                'embed',
                'hr',
                'img',
                'input',
                'link',
                'meta',
                'param',
                'source',
                'track',
                'wbr',
            ];
            if (in_array($tag, $voidElements, true)) {
                return $indent . "<{$tag}{$attrs}>\n";
            }

            if ($node->childNodes->length === 1 && $node->firstChild instanceof \DOM\Text) {
                $text = $node->firstChild->nodeValue ?? '';
                return $indent . "<{$tag}{$attrs}>{$text}</{$tag}>\n";
            }

            $inner = $this->serializeRawNodeChildren($node, $depth + 1);
            if ($inner === '') {
                return $indent . "<{$tag}{$attrs}></{$tag}>\n";
            }

            return $indent . "<{$tag}{$attrs}>\n" . $inner . $indent . "</{$tag}>\n";
        }

        if ($node instanceof \DOM\Text) {
            $text = trim($node->nodeValue ?? '');
            if ($text === '') {
                return '';
            }

            return $indent . $text . "\n";
        }

        return '';
    }

    private function camelToKebab(string $string): string
    {
        return strtolower(preg_replace('/([a-z])([A-Z])/', '$1-$2', $string));
    }

    /**
     * Build a composed Blade template showing parent-child relationships
     */
    private function buildComposedBladeTemplate(
        string $elementName,
        string $name,
        string $description,
        ReflectionClass $ref,
        array $childOf,
        array $parentOf
    ): string {
        $blade = "{{--\n  This file is auto-generated.\n\n  {$name} - Composed Example\n  {$description}\n\n  CONTENT MODEL:\n";
        if (! empty($childOf)) {
            $childOfNames = array_map(function ($class) {
                return (new ReflectionClass($class))->getShortName();
            }, $childOf);
            $blade .= '  - Can be a child of: ' . implode(', ', $childOfNames) . "\n";
        }
        if (! empty($parentOf)) {
            $parentOfNames = array_map(function ($class) {
                return (new ReflectionClass($class))->getShortName();
            }, $parentOf);
            $blade .= '  - Can have children: ' . implode(', ', $parentOfNames) . "\n";
        }
        $blade .= "--}}\n";

        $sectionName = in_array(
            $elementName,
            self::BLADE_RESERVED_WORDS,
            true
        ) ? $elementName . '_section' : $elementName;
        $blade .= "@section('{$sectionName}')\n";
        $blade .= "<{$elementName} class=\"example\">\n";

        $children = $this->collectChildrenForComposedBladeTemplate($elementName, $parentOf, $ref);
        foreach ($children as $child) {
            $blade .= $child['bladeCode'];
        }

        $blade .= "</{$elementName}>\n";
        $blade .= "@endsection\n";

        return $blade;
    }

    /**
     * Collect and generate Blade code for child elements
     */
    private function collectChildrenForComposedBladeTemplate(
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
                'class' => $childClass,
                'ref' => $childRef,
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

        // Elements that should have text content only
        $textOnlyElements = ['dd', 'dt', 'li', 'th', 'td', 'label', 'button', 'legend', 'summary', 'title', 'option'];
        $childrenBladeCode = [];
        $rendered = 0;

        foreach ($relevantChildren as $child) {
            if ($rendered >= $maxChildren) {
                break;
            }
            $childName = $child['name'];
            $childRef = $child['ref'];
            $childClass = $child['class'];
            $uniquePerParent = $childRef->getStaticPropertyValue('uniquePerParent', false);
            $isSelfClosing = $childRef->hasConstant('SELF_CLOSING') && $childRef->getConstant('SELF_CLOSING');
            $childLevel = $this->determineLevel($childClass);
            $renderCount = $uniquePerParent ? 1 : 2;

            for ($i = 0; $i < $renderCount && $rendered < $maxChildren; $i++) {
                $bladeCode = '';
                if ($isSelfClosing) {
                    if ($childName === 'input') {
                        $bladeCode .= "@include('blade.{$childLevel}.{$childName}.{$childName}', ['type' => 'text', 'name' => 'example'])\n";
                    } elseif ($childName === 'img') {
                        $bladeCode .= "@include('blade.{$childLevel}.{$childName}.{$childName}', ['src' => '/image.jpg', 'alt' => 'Example'])\n";
                    } elseif ($childName === 'link') {
                        $bladeCode .= "@include('blade.{$childLevel}.{$childName}.{$childName}', ['rel' => 'stylesheet', 'href' => '/styles.css'])\n";
                    } elseif ($childName === 'meta') {
                        $bladeCode .= "@include('blade.{$childLevel}.{$childName}.{$childName}', ['name' => 'description', 'content' => 'Example'])\n";
                    } elseif ($childName === 'base') {
                        $bladeCode .= "@include('blade.{$childLevel}.{$childName}.{$childName}', ['href' => '/'])\n";
                    } else {
                        $bladeCode .= "@include('blade.{$childLevel}.{$childName}.{$childName}')\n";
                    }
                } elseif (in_array($childName, $textOnlyElements, true)) {
                    if ($childName === 'title') {
                        $textContent = 'Page Title';
                    } elseif ($childName === 'option') {
                        $textContent = 'Option ' . ($i + 1);
                    } elseif ($childName === 'li') {
                        $textContent = 'Item ' . ($i + 1);
                    } elseif ($childName === 'dt') {
                        $textContent = 'Term ' . ($i + 1);
                    } elseif ($childName === 'dd') {
                        $textContent = 'Definition ' . ($i + 1);
                    } elseif ($childName === 'th' || $childName === 'td') {
                        $textContent = 'Cell ' . ($i + 1);
                    } elseif ($childName === 'label') {
                        $textContent = 'Label ' . ($i + 1);
                    } elseif ($childName === 'button') {
                        $textContent = 'Button ' . ($i + 1);
                    } elseif ($childName === 'legend') {
                        $textContent = 'Legend';
                    }
                    // @phpstan-ignore-next-line - comparison may be flagged as tautological by static analysis
                    elseif ($childName === 'summary') {
                        $textContent = 'Summary';
                    } else {
                        $textContent = 'Example content';
                    }
                    $bladeCode .= "@include('blade.{$childLevel}.{$childName}.{$childName}', ['content' => '{$textContent}'])\n";
                } else {
                    $bladeCode .= "@include('blade.{$childLevel}.{$childName}.{$childName}', ['content' => 'Example content'])\n";
                }
                $childrenBladeCode[] = [
                    'bladeCode' => $bladeCode,
                ];
                $rendered++;
            }
        }
        return $childrenBladeCode;
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
