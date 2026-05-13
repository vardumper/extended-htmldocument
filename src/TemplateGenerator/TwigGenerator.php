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
 * TwigGenerator - Generates Standard Twig Templates
 *
 * Creates classic Twig templates with blocks, conditional attributes,
 * and enum validation. These templates use traditional Twig syntax
 * (not Symfony UX Twig Components) and are suitable for any Twig-based
 * application.
 *
 * Generated structure:
 * - Templates: twig/{block|inline|void}/element-name.twig
 * - Composed: twig/{block|inline|void}/element-name-composed.twig
 *
 * Features:
 * - Block-based template structure
 * - Enum validation via hashmap lookup (better performance)
 * - Conditional attribute rendering
 * - Reserved word collision avoidance
 * - Content block with raw filter
 * - Automatic camelCase to kebab-case conversion
 * - Content model documentation in composed templates
 *
 * Template structure:
 * - {% block element_name %}
 * - {% set enum_choices = {...} %} for enum validation
 * - <element {% if condition %}attribute="{{ value }}"{% endif %}>
 * - {% block content %}{% endblock %}
 *
 * @see https://twig.symfony.com/
 */
#[TemplateGenerator('twig')]
class TwigGenerator implements TemplateGeneratorInterface
{
    use ClassResolverTrait;

    private const TWIG_RESERVED_WORDS = [
        'is',
        'in',
        'for',
        'if',
        'true',
        'false',
        'none',
        'and',
        'or',
        'not',
        'loop',
        'else',
        'as',
        'empty',
        'with',
        'block',
        'endblock',
        'set',
        'extends',
        'include',
        'import',
        'from',
        'macro',
        'filter',
        'autoescape',
        'endautoescape',
        'embed',
        'endembed',
        'use',
        'verbatim',
        'endverbatim',
        'do',
        'flush',
        'sandbox',
        'endsandbox',
    ];

    private string $componentHandle = 'component';

    private string $documentRenderMode = 'raw';

    public function getExtension(): string
    {
        return 'twig';
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
        if ($elementOrDocument instanceof HTMLDocumentDelegatorInterface) {
            return $this->renderDocument($elementOrDocument);
        }

        if ($elementOrDocument instanceof HTMLElementDelegatorInterface && $this->canRenderElements()) {
            return $this->renderElement($elementOrDocument);
        }

        return null;
    }

    /**
     * Generate a composed Twig template showing valid parent-child relationships
     *
     * Creates a Twig template demonstrating the element with its valid children
     * based on content model metadata ($parentOf).
     */
    public function renderComposedElement(HTMLElementDelegatorInterface $element): ?string
    {
        $ref = new ReflectionClass($element);

        $childOf = $ref->getStaticPropertyValue('childOf', []); /* Get content model metadata */
        $parentOf = $ref->getStaticPropertyValue('parentOf', []);

        if (empty($parentOf)) { /* Only generate composed templates for elements with SPECIFIC allowed children */
            return null;
        }

        $elementName = strtolower($element->tagName);

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

        $desc = ''; /* Get element metadata from class-level doc comment */
        $docComment = $ref->getDocComment();
        if ($docComment !== false) { /* Extract description from class docblock (first line of content) */
            if (preg_match('/\/\*\*\s*\n\s*\*\s*(.+?)\s*\n/s', $docComment, $matches)) {
                $desc = trim($matches[1]);
            }
        }
        $name = ucfirst($elementName);

        return $this->buildComposedTemplate($elementName, $name, $desc, $ref, $childOf, $parentOf);
    }

    public function setComponentHandle(string $handle): void
    {
        $this->componentHandle = $handle;
    }

    public function getComponentHandle(): string
    {
        return $this->componentHandle;
    }

    public function setDocumentRenderMode(string $mode): void
    {
        $normalized = strtolower(trim($mode));
        $supported = ['raw', 'include', 'embed', 'use'];
        $this->documentRenderMode = in_array($normalized, $supported, true) ? $normalized : 'raw';
    }

    public function renderElement(HTMLElementDelegatorInterface $element): string
    {
        $ref = new ReflectionClass($element);
        $elementName = strtolower($element->tagName);
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
                                fn (UnitEnum $case) => ($case instanceof BackedEnum ? "'{$case->value}'" : "'{$case->name}'"),
                                $unionType->getName()::cases()
                            );
                            $enums[] = [
                                'name' => $name,
                                'choices' => $choices,
                            ];
                        }
                    }
                } elseif ($type && $type instanceof ReflectionNamedType && enum_exists($type->getName())) {
                    $choices = array_map(
                        fn (UnitEnum $case) => ($case instanceof BackedEnum ? "'{$case->value}'" : "'{$case->name}'"),
                        $type->getName()::cases()
                    );
                    $enums[] = [
                        'name' => $name,
                        'choices' => $choices,
                    ];
                }
                $props[] = $name;
            }
        }
        $globalAttrs = ['id', 'class']; /* Add global attributes from HTMLElementDelegatorInterface */
        foreach ($globalAttrs as $gAttr) {
            $getter = 'get' . ucfirst($gAttr);
            if (method_exists($element, $getter)) {
                $props[] = $gAttr;
            }
        }

        if ($ref->hasProperty('dataAttributes') || $ref->hasMethod('getDataAttribute') || $ref->hasMethod(
            'getDataAttributes'
        )) { /* Handle DataTrait singular setter/getter: ensure dataAttributes present to render data-* */ $props[] = 'dataAttributes';
        }

        $props = array_values(
            array_unique($props)
        ); /* Remove duplicates that may result from reflection + explicit additions */

        sort($props, \SORT_NATURAL | \SORT_FLAG_CASE); /* Sort attributes alphabetically */
        usort($enums, fn ($a, $b) => strcmp($a['name'], $b['name'])); /* Sort enums alphabetically */
        $isSelfClosing = $ref->hasConstant('SELF_CLOSING') && $ref->getConstant('SELF_CLOSING');

        $desc = ''; /* Get element metadata from class-level doc comment */
        $docComment = $ref->getDocComment();
        if ($docComment !== false) { /* Extract description from class docblock (first line of content) */
            if (preg_match('/\/\*\*\s*\n\s*\*\s*(.+?)\s*\n/s', $docComment, $matches)) {
                $desc = trim($matches[1]);
            }
        }
        $name = ucfirst($elementName);

        $blockName = in_array(
            $elementName,
            self::TWIG_RESERVED_WORDS,
            true
        ) ? $elementName . '_block' : $elementName; /* Avoid reserved words for block names */

        $twig = "{#\n  This file is auto-generated.\n\n  {$name} - {$desc}\n\n  @author vardumper <info@erikpoehler.com>\n  @package vardumper/extended-htmldocument\n  @see src/TemplateGenerator/TwigGenerator.php\n#}\n"; /* Build Twig template string */
        $note = ($blockName !== $elementName) ? "{# Note: Block name '{$elementName}' is a reserved word, using '{$blockName}' instead. #}" : '';
        $twig .= "{% block {$blockName} %}{$note}\n{% apply spaceless %}\n"; /* Wrap block output in spaceless to remove unwanted whitespace for tidy HTML */

        foreach ($enums as $enum) { /* Generate associative arrays (hashmaps) for enum choices for better performance */
            $hashmap = [];
            foreach ($enum['choices'] as $choice) {
                $key = trim($choice, "'"); /* Convert 'value' to value: true */
                $hashmap[] = "{$choice}: true";
            }
            $twig .= "{% set {$enum['name']}_choices = {" . implode(', ', $hashmap) . "} %}\n";
        }

        $twig .= "<{$elementName}";
        foreach ($props as $attr) {
            $isEnum = false;
            $enumName = null;
            foreach ($enums as $enum) {
                if ($enum['name'] === $attr) {
                    $isEnum = true;
                    $enumName = $enum['name'];
                    break;
                }
            }

            $htmlAttr = $this->camelToKebab($attr); /* Convert property name to kebab-case for HTML attribute name */

            $htmlAttr = preg_replace(
                '/^x-on-/',
                'x-on:',
                $htmlAttr
            ); /* Map "x-on-foo" to "x-on:foo" for Alpine event handlers (e.g., getXOnClick() -> 'x-on:click') */

            $isReserved = in_array(
                $attr,
                self::TWIG_RESERVED_WORDS,
                true
            ); /* Decide whether to access the value directly as a Twig variable or via attribute(_context, 'name'); use attribute() when the HTML attribute name is not a valid Twig identifier or it's a reserved word */
            $isValidIdentifier = (bool) preg_match('/^[A-Za-z_][A-Za-z0-9_]*$/', $htmlAttr);
            $useAttributeFunction = $isReserved || ! $isValidIdentifier || $htmlAttr !== $attr;

            if ($useAttributeFunction) {
                $cond = "attribute(_context, '{$htmlAttr}') is defined and attribute(_context, '{$htmlAttr}')|length > 0";
                $val = "attribute(_context, '{$htmlAttr}')";
            } else {
                $cond = "{$attr} is defined and {$attr}|length > 0";
                $val = $attr;
            }

            if ($isEnum && $enumName !== null) {
                if ($useAttributeFunction) { /* Use hashmap lookup instead of 'in' operator for better performance */
                    $cond .= " and {$enumName}_choices[attribute(_context, '{$htmlAttr}')] is defined";
                } else {
                    $cond .= " and {$enumName}_choices[{$attr}] is defined";
                }
            }

            if ($htmlAttr === 'alpine-attributes') { /* Special-case for Alpine attributes: render key/value pairs (e.g., {'@click':'do()'} -> @click="do()") */
                $twig .= "\n  {% if attribute(_context, 'alpine-attributes') is defined and attribute(_context, 'alpine-attributes')|length > 0 %}";
                $twig .= "\n    {% for __k, __v in attribute(_context, 'alpine-attributes') %} {{ __k }}=\"{{ __v }}\"{% endfor %}";
                $twig .= "\n  {% endif %}";
            } elseif ($htmlAttr === 'data-attributes') { /* Special-case for data-* attributes: provided as associative 'data-attributes' mapping; render each key as data-KEY attribute */
                $twig .= "\n  {% if attribute(_context, 'data-attributes') is defined and attribute(_context, 'data-attributes')|length > 0 %}";
                $twig .= "\n    {% for __k, __v in attribute(_context, 'data-attributes') %} data-{{ __k }}=\"{{ __v }}\"{% endfor %}";
                $twig .= "\n  {% endif %}";
            } else {
                $twig .= "\n  {% if {$cond} %}{$htmlAttr}=\"{{ {$val} }}\"{% endif %}";
            }
        }
        if ($isSelfClosing) {
            $twig .= "/>\n";
        } else {
            $twig .= ">\n  {% block content %}{{- content|raw -}}{% endblock %}\n</{$elementName}>\n";
        }
        $twig .= "{% endapply %}\n{% endblock %}\n"; /* Close spaceless apply, then end the block */
        return $twig;
    }

    public function renderDocument(HTMLDocumentDelegatorInterface $document): string
    {
        if ($this->documentRenderMode === 'raw') {
            return $this->renderDocumentRaw($document);
        }

        return $this->renderDocumentFromTemplates($document);
    }

    private function renderDocumentRaw(HTMLDocumentDelegatorInterface $document): string
    {
        $handle = $this->componentHandle;
        $twig = "{#\n";
        $twig .= "  This file is auto-generated.\n\n";
        $twig .= "  Component: {$handle}\n\n";
        $twig .= "  @see src/TemplateGenerator/TwigGenerator.php\n";
        $twig .= "#}\n";

        // Prefer body children; fall back to html element children (skip the html/head wrappers)
        $dom = $document->delegated;
        if ($dom->body !== null && $dom->body->childNodes->length > 0) {
            $twig .= $this->serializeNodeChildrenRaw($dom->body, 0);
        } elseif ($dom->documentElement !== null) {
            $twig .= $this->serializeNodeChildrenRaw($dom->documentElement, 0);
        } else {
            $twig .= $this->serializeNodeChildrenRaw($dom, 0);
        }

        return $twig;
    }

    private function serializeNodeChildrenRaw(\DOM\Node $node, int $depth): string
    {
        $output = '';
        foreach ($node->childNodes as $child) {
            $output .= $this->serializeNodeRaw($child, $depth);
        }
        return $output;
    }

    private function serializeNodeRaw(\DOM\Node $node, int $depth): string
    {
        $indent = str_repeat('  ', $depth);

        if ($node instanceof \DOM\Element) {
            $tag = strtolower($node->tagName);

            // Skip html/head wrappers — recurse directly into their children
            if ($tag === 'html' || $tag === 'head') {
                return $this->serializeNodeChildrenRaw($node, $depth);
            }

            // For body, skip the wrapper but preserve indentation
            if ($tag === 'body') {
                return $this->serializeNodeChildrenRaw($node, $depth);
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

            // Single inline text child — render on one line
            if ($node->childNodes->length === 1 && $node->firstChild instanceof \DOM\Text) {
                $text = $node->firstChild->nodeValue ?? '';
                return $indent . "<{$tag}{$attrs}>{$text}</{$tag}>\n";
            }

            $inner = $this->serializeNodeChildrenRaw($node, $depth + 1);

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

    private function renderDocumentFromTemplates(HTMLDocumentDelegatorInterface $document): string
    {
        $handle = $this->componentHandle;
        $mode = $this->documentRenderMode;
        $twig = "{#\n";
        $twig .= "  This file is auto-generated.\n\n";
        $twig .= "  Component: {$handle}\n";
        $twig .= "  Strict mode: {$mode}\n\n";
        $twig .= "  @see src/TemplateGenerator/TwigGenerator.php\n";
        $twig .= "#}\n";

        $root = $document->delegated->body ?? $document->delegated;
        foreach ($root->childNodes as $child) {
            $twig .= $this->renderNodeWithTemplates($child, 0, $mode);
        }

        return $twig;
    }

    private function renderNodeWithTemplates(\DOM\Node $node, int $depth, string $mode): string
    {
        $indent = str_repeat('  ', $depth);

        if ($node instanceof \DOM\Text) {
            $text = trim($node->nodeValue ?? '');
            if ($text === '') {
                return '';
            }

            $expression = $this->extractTwigExpression($text);
            if ($expression !== null) {
                return $indent . '{{ ' . $expression . " }}\n";
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
                $output .= $this->renderNodeWithTemplates($child, $depth, $mode);
            }
            return $output;
        }

        $templatePath = $this->resolveTwigTemplatePath($tag);
        if ($templatePath === null) {
            // Fallback to raw rendering when no matching generated template exists.
            return $this->serializeNodeRaw($node, $depth);
        }

        $params = $this->buildTwigTemplateParams($node);
        $paramString = $this->buildTwigMapString($params);
        $children = $this->renderChildrenWithTemplates($node, $depth + 2, $mode);
        $hasChildren = trim($children) !== '';

        if ($hasChildren && array_key_exists('content', $params)) {
            unset($params['content']);
            $paramString = $this->buildTwigMapString($params);
        }

        if ($this->isVoidElementTag($tag)) {
            return $indent . "{% include '{$templatePath}'" . ($paramString === '{}' ? '' : " with {$paramString}") . " %}\n";
        }

        if ($mode === 'include' && ! $hasChildren) {
            return $indent . "{% include '{$templatePath}'" . ($paramString === '{}' ? '' : " with {$paramString}") . " %}\n";
        }

        $effectiveMode = $mode === 'use' ? 'embed' : $mode;
        if ($effectiveMode === 'embed' || ($mode === 'include' && $hasChildren)) {
            $output = $indent . "{% embed '{$templatePath}'" . ($paramString === '{}' ? '' : " with {$paramString}") . " %}\n";
            if ($hasChildren) {
                $output .= $indent . "  {% block content %}\n";
                $output .= $children;
                $output .= $indent . "  {% endblock %}\n";
            }
            $output .= $indent . "{% endembed %}\n";
            return $output;
        }

        return $indent . "{% include '{$templatePath}'" . ($paramString === '{}' ? '' : " with {$paramString}") . " %}\n";
    }

    private function renderChildrenWithTemplates(\DOM\Element $element, int $depth, string $mode): string
    {
        $output = '';
        foreach ($element->childNodes as $child) {
            $output .= $this->renderNodeWithTemplates($child, $depth, $mode);
        }
        return $output;
    }

    private function buildTwigTemplateParams(\DOM\Element $element): array
    {
        $params = [];
        foreach ($element->attributes as $attribute) {
            $params[$attribute->name] = $this->convertAttributeValueToTwigLiteral($attribute->value);
        }

        if ($element->childNodes->length === 1 && $element->firstChild instanceof \DOM\Text) {
            $text = trim($element->firstChild->nodeValue ?? '');
            if ($text !== '') {
                $expression = $this->extractTwigExpression($text);
                $params['content'] = $expression !== null ? [
                    '__twig_expr' => $expression,
                ] : $text;
            }
        }

        return $params;
    }

    private function convertAttributeValueToTwigLiteral(string $value): mixed
    {
        $expression = $this->extractTwigExpression($value);
        if ($expression !== null) {
            return [
                '__twig_expr' => $expression,
            ];
        }

        return $value;
    }

    private function buildTwigMapString(array $params): string
    {
        if ($params === []) {
            return '{}';
        }

        $parts = [];
        foreach ($params as $key => $value) {
            $twigKey = preg_match('/^[A-Za-z_][A-Za-z0-9_]*$/', $key) ? $key : "'{$key}'";
            if (is_array($value) && array_key_exists('__twig_expr', $value)) {
                $twigValue = (string) $value['__twig_expr'];
            } else {
                $twigValue = var_export($value, true);
            }
            $parts[] = "{$twigKey}: {$twigValue}";
        }

        return '{ ' . implode(', ', $parts) . ' }';
    }

    private function extractTwigExpression(string $value): ?string
    {
        if (preg_match('/^\s*\{\{\s*(.+?)\s*\}\}\s*$/s', $value, $matches) === 1) {
            return $matches[1];
        }

        return null;
    }

    private function resolveTwigTemplatePath(string $tagName): ?string
    {
        $className = $this->getElementByQualifiedName($tagName);
        if ($className === null) {
            return null;
        }

        $level = $this->determineLevel($className);
        return $level . '/' . $tagName . '/' . $tagName . '.twig';
    }

    private function isVoidElementTag(string $tagName): bool
    {
        return in_array($tagName, [
            'area', 'base', 'br', 'col', 'embed', 'hr', 'img', 'input', 'link',
            'meta', 'param', 'source', 'track', 'wbr',
        ], true);
    }

    private function camelToKebab(string $string): string
    {
        return strtolower(preg_replace('/([a-z])([A-Z])/', '$1-$2', $string));
    }

    /**
     * Build a composed Twig template showing parent-child relationships
     */
    private function buildComposedTemplate(
        string $elementName,
        string $name,
        string $description,
        ReflectionClass $ref,
        array $childOf,
        array $parentOf
    ): string {
        $twig = "{#\n";
        $twig .= "  This file is auto-generated.\n\n";
        $twig .= "  {$name} - Composed Example\n";
        $twig .= "  {$description}\n\n";
        $twig .= "  CONTENT MODEL:\n";

        if (! empty($childOf)) {
            $childOfNames = array_map(function ($class) {
                return (new ReflectionClass($class))->getShortName();
            }, $childOf);
            $twig .= '  - Can be a child of: ' . implode(', ', $childOfNames) . "\n";
        }

        if (! empty($parentOf)) {
            $parentOfNames = array_map(function ($class) {
                return (new ReflectionClass($class))->getShortName();
            }, $parentOf);
            $twig .= '  - Can contain: ' . implode(', ', $parentOfNames) . "\n";
        }

        $uniquePerParent = $ref->getStaticPropertyValue('uniquePerParent', false);
        $unique = $ref->getStaticPropertyValue('unique', false);

        if ($unique) {
            $twig .= "  - UNIQUE: Only one allowed per document\n";
        }
        if ($uniquePerParent) {
            $twig .= "  - UNIQUE PER PARENT: Only one allowed per parent element\n";
        }

        $twig .= "\n  @author vardumper <info@erikpoehler.com>\n";
        $twig .= "  @package vardumper/extended-htmldocument\n";
        $twig .= "  @see src/TemplateGenerator/TwigGenerator.php\n";
        $twig .= "#}\n";

        $blockName = in_array($elementName, self::TWIG_RESERVED_WORDS, true) /* Avoid reserved words for block names */
            ? $elementName . '_composed'
            : $elementName . '_composed';

        $parentLevel = $this->determineLevel(
            $ref->getName()
        ); /* Determine the level (directory) for the parent element */

        $twig .= "{% block {$blockName} %}\n";
        $twig .= "{% embed '../{$parentLevel}/{$elementName}.twig' with {\n";
        $twig .= "  class: 'example'\n";
        $twig .= "} %}\n";
        $twig .= "  {% block content %}\n";

        $children = $this->collectChildrenForComposedTemplate(
            $elementName,
            $parentOf,
            $ref
        ); /* Generate child elements based on content model */

        foreach ($children as $child) {
            $twig .= '  ' . $child['twigCode'];
        }

        $twig .= "  {% endblock %}\n";
        $twig .= "{% endembed %}\n";
        $twig .= "{% endblock %}\n";

        return $twig;
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

    /**
     * Collect and generate Twig code for child elements
     */
    private function collectChildrenForComposedTemplate(
        string $parentElementName,
        array $parentOf,
        ReflectionClass $parentRef
    ): array {
        $priorityElements = [
            'form' => ['fieldset', 'label', 'input', 'textarea', 'button', 'select'],
            'fieldset' => ['legend', 'label', 'input', 'textarea', 'button'],
            'select' => ['optgroup', 'option'],
            'datalist' => ['option'],
            'table' => ['caption', 'colgroup', 'thead', 'tbody', 'tfoot', 'tr'],
            'head' => ['title', 'base', 'meta', 'link', 'script', 'style'],
            'details' => ['summary', 'p'],
        ]; /* Priority elements for specific containers */

        $children = []; /* Get children to render */
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

        $relevantChildren = $children; /* Filter to priority elements if there are too many children */
        if (isset($priorityElements[$parentElementName]) && count($children) > 5) {
            $priorities = $priorityElements[$parentElementName];
            $filtered = array_filter($children, fn ($c) => in_array($c['name'], $priorities, true));
            if (! empty($filtered)) {
                $relevantChildren = array_values($filtered);
            }
        }

        $maxChildren = 3; /* Limit to reasonable number of examples */
        if ($parentElementName === 'head') {
            $maxChildren = 6;
        } elseif (count($children) > 10) {
            $maxChildren = 4;
        }

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
            'title',
            'option',
        ]; /* Elements that should have text content only */

        $childrenTwigCode = [];
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

            $childLevel = $this->determineLevel($childClass); /* Determine the level for this child element */

            $renderCount = $uniquePerParent ? 1 : 2;

            for ($i = 0; $i < $renderCount && $rendered < $maxChildren; $i++) {
                $twigCode = '';

                if ($isSelfClosing) { /* Self-closing elements with common attributes */
                    if ($childName === 'input') {
                        $twigCode .= "{% include '../{$childLevel}/{$childName}.twig' with {'type': 'text', 'name': 'example'} %}\n";
                    } elseif ($childName === 'img') {
                        $twigCode .= "{% include '../{$childLevel}/{$childName}.twig' with {'src': '/image.jpg', 'alt': 'Example'} %}\n";
                    } elseif ($childName === 'link') {
                        $twigCode .= "{% include '../{$childLevel}/{$childName}.twig' with {'rel': 'stylesheet', 'href': '/styles.css'} %}\n";
                    } elseif ($childName === 'meta') {
                        $twigCode .= "{% include '../{$childLevel}/{$childName}.twig' with {'name': 'description', 'content': 'Example'} %}\n";
                    } elseif ($childName === 'base') {
                        $twigCode .= "{% include '../{$childLevel}/{$childName}.twig' with {'href': '/'} %}\n";
                    } else {
                        $twigCode .= "{% include '../{$childLevel}/{$childName}.twig' %}\n";
                    }
                } elseif (in_array($childName, $textOnlyElements, true)) { /* Text-only elements */
                    switch ($childName) {
                        case 'title':
                            $textContent = 'Page Title';
                            break;
                        case 'option':
                            $textContent = 'Option ' . ($i + 1);
                            break;
                        case 'li':
                            $textContent = 'Item ' . ($i + 1);
                            break;
                        case 'dt':
                            $textContent = 'Term ' . ($i + 1);
                            break;
                        case 'dd':
                            $textContent = 'Definition ' . ($i + 1);
                            break;
                        case 'th':
                        case 'td':
                            $textContent = 'Cell ' . ($i + 1);
                            break;
                        case 'label':
                            $textContent = 'Label ' . ($i + 1);
                            break;
                        case 'button':
                            $textContent = 'Button ' . ($i + 1);
                            break;
                        case 'legend':
                            $textContent = 'Legend';
                            break;
                        case 'summary':
                            $textContent = 'Summary';
                            break;
                        default:
                            $textContent = 'Example content';
                    }
                    $twigCode .= "{% include '../{$childLevel}/{$childName}.twig' with {'content': '{$textContent}'} %}\n";
                } else { /* Elements with content */
                    $twigCode .= "{% include '../{$childLevel}/{$childName}.twig' with {'content': 'Example content'} %}\n";
                }

                $childrenTwigCode[] = [
                    'twigCode' => $twigCode,
                ];
                $rendered++;
            }
        }

        return $childrenTwigCode;
    }
}
