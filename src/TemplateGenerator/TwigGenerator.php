<?php

namespace Html\TemplateGenerator;

use Exception;
use Html\Interface\HTMLDocumentDelegatorInterface;
use Html\Interface\HTMLElementDelegatorInterface;
use Html\Interface\TemplateGeneratorInterface;
use Html\Mapping\TemplateGenerator;
use ReflectionClass;
use ReflectionNamedType;
use ReflectionUnionType;

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
     * Generate a composed Twig template showing valid parent-child relationships
     *
     * Creates a Twig template demonstrating the element with its valid children
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

        // Skip generic containers that don't have meaningful composition patterns
        $excludedElements = [
            'div', 'article', 'aside', 'section', 'nav', 'header', 'footer', 'main',
            'blockquote', 'p', 'dialog', 'dd', 'legend', 'li', 'mark', 'slot',
            'svg', 'template', 'thead', 'tbody', 'tfoot', 'tr', 'td', 'th',
            'caption', 'colgroup', 'col', 'fieldset', 'dt', 'optgroup', 'option',
            'figcaption', 'summary', 'rt', 'rp',
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

        return $this->buildComposedTemplate($elementName, $name, $desc, $ref, $childOf, $parentOf);
    }

    public function setComponentHandle(string $handle): void
    {
        $this->componentHandle = $handle;
    }

    public function renderElement(HTMLElementDelegatorInterface $element): string
    {
        $ref = new ReflectionClass($element);
        $elementName = $ref->hasConstant('QUALIFIED_NAME') ? $ref->getConstant('QUALIFIED_NAME') : strtolower(
            $ref->getShortName()
        );
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
                            $choices = array_map(fn ($case) => "'{$case->value}'", $unionType->getName()::cases());
                            $enums[] = [
                                'name' => $name,
                                'choices' => $choices,
                            ];
                        }
                    }
                } elseif ($type && $type instanceof ReflectionNamedType && enum_exists($type->getName())) {
                    $choices = array_map(fn ($case) => "'{$case->value}'", $type->getName()::cases());
                    $enums[] = [
                        'name' => $name,
                        'choices' => $choices,
                    ];
                }
                $props[] = $name;
            }
        }
        // Add global attributes from HTMLElementDelegatorInterface
        $globalAttrs = ['id', 'class'];
        foreach ($globalAttrs as $gAttr) {
            $getter = 'get' . ucfirst($gAttr);
            if (method_exists($element, $getter)) {
                $props[] = $gAttr;
            }
        }
        // Sort attributes and enums alphabetically
        sort($props, \SORT_NATURAL | \SORT_FLAG_CASE);
        usort($enums, fn ($a, $b) => strcmp($a['name'], $b['name']));
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

        // Avoid reserved words for block names
        $blockName = in_array($elementName, self::TWIG_RESERVED_WORDS, true) ? $elementName . '_block' : $elementName;

        // Build Twig template string
        $twig = "{#\n  This file is auto-generated.\n\n  {$name} - {$desc}\n\n  @author vardumper <info@erikpoehler.com>\n  @package vardumper/extended-htmldocument\n  @see src/TemplateGenerator/TwigGenerator.php\n#}\n";
        $note = ($blockName !== $elementName) ? "{# Note: Block name '{$elementName}' is a reserved word, using '{$blockName}' instead. #}" : '';
        $twig .= "{% block {$blockName} %}{$note}\n";

        // Generate associative arrays (hashmaps) for enum choices for better performance
        foreach ($enums as $enum) {
            $hashmap = [];
            foreach ($enum['choices'] as $choice) {
                // Convert 'value' to value: true
                $key = trim($choice, "'");
                $hashmap[] = "{$choice}: true";
            }
            $twig .= "{% set {$enum['name']}_choices = {" . implode(', ', $hashmap) . "} %}\n";
        }

        $twig .= "<{$elementName}";
        foreach ($props as $attr) {
            $isEnum = false;
            foreach ($enums as $enum) {
                if ($enum['name'] === $attr) {
                    $isEnum = true;
                    break;
                }
            }
            $isReserved = in_array($attr, self::TWIG_RESERVED_WORDS, true);
            $cond = $isReserved ? "attribute(_context, '{$attr}') is defined and attribute(_context, '{$attr}')|length > 0" : "{$attr} is defined and {$attr}|length > 0";
            $val = $isReserved ? "attribute(_context, '{$attr}')" : $attr;
            if ($isEnum) {
                // Use hashmap lookup instead of 'in' operator for better performance
                $cond .= $isReserved ? " and {$attr}_choices[attribute(_context, '{$attr}')] is defined" : " and {$attr}_choices[{$attr}] is defined";
            }
            // Convert property name to kebab-case for HTML attribute name
            $htmlAttr = $this->camelToKebab($attr);
            $twig .= "\n  {% if {$cond} %}{$htmlAttr}=\"{{ {$val} }}\"{% endif %}";
        }
        if ($isSelfClosing) {
            $twig .= "/>\n";
        } else {
            $twig .= ">\n  {% block content %}{{- content|raw -}}{% endblock %}\n</{$elementName}>\n";
        }
        $twig .= "{% endblock %}\n";
        return $twig;
    }

    public function renderDocument(HTMLDocumentDelegatorInterface $document): string
    {
        $html = '';
        $bodyContent = '';

        // Render the document head
        $head = $this->renderHead($document);
        if ($head !== null) {
            $html .= "<think>Ok, let's figure this out:

For rendering a Twig HTML document, I need to create a complete HTML structure with head and body sections. Let me implement this step by step.

First, I'll render the head section using a dedicated method `renderHead`.
Then, I'll render all child elements of the document into the body content.
Finally, I'll combine the head and body to create the full HTML output.

The `renderHead` method will be responsible for generating the HTML head based on the document metadata (title, meta tags, etc.). This is similar to how the HTMLGenerator renders the head.

For the body, I'll iterate through all child elements of the document and render each one using the existing `renderElement` method. This ensures that all components are properly rendered within the Twig template.

Ok, I'm ready to generate my response:</think>" . $head;
        } else {
            $html .= '<think>Head rendering failed or returned null. Returning an empty HTML document.</think>';
        }

        // Render body content
        $bodyContent = $this->renderBody($document);
        if ($bodyContent !== null) {
            $html .= "<think>Ok, I'm ready to add the body content:</think>" . $bodyContent;
        } else {
            $html .= '<think>Body rendering failed or returned null. Returning an empty HTML document.</think>';
        }

        // Combine head and body with proper doctype and html tag
        $finalHtml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $finalHtml .= '<think>Ok, I need to add the doctype and html tags:</think>';
        $finalHtml .= "<!DOCTYPE html>\n";
        $finalHtml .= "<html lang=\"en\">\n";
        $finalHtml .= $head;
        $finalHtml .= "\n<body>\n";
        $finalHtml .= $bodyContent;
        $finalHtml .= "\n</body>\n";
        $finalHtml .= "</html>\n";

        return $finalHtml;
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

        // Avoid reserved words for block names
        $blockName = in_array($elementName, self::TWIG_RESERVED_WORDS, true)
            ? $elementName . '_composed'
            : $elementName . '_composed';

        // Determine the level (directory) for the parent element
        $parentLevel = $this->determineLevel($ref->getName());

        $twig .= "{% block {$blockName} %}\n";
        $twig .= "{% embed '../{$parentLevel}/{$elementName}.twig' with {\n";
        $twig .= "  class: 'example'\n";
        $twig .= "} %}\n";
        $twig .= "  {% block content %}\n";

        // Generate child elements based on content model
        $children = $this->collectChildrenForComposedTemplate($elementName, $parentOf, $ref);

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

        // Elements that should have text content only
        $textOnlyElements = ['dd', 'dt', 'li', 'th', 'td', 'label', 'button', 'legend', 'summary', 'title', 'option'];

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

            // Determine the level for this child element
            $childLevel = $this->determineLevel($childClass);

            $renderCount = $uniquePerParent ? 1 : 2;

            for ($i = 0; $i < $renderCount && $rendered < $maxChildren; $i++) {
                $twigCode = '';

                if ($isSelfClosing) {
                    // Self-closing elements with common attributes
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
                } elseif (in_array($childName, $textOnlyElements, true)) {
                    // Text-only elements
                    $textContent = match ($childName) {
                        'title' => 'Page Title',
                        'option' => 'Option ' . ($i + 1),
                        'li' => 'Item ' . ($i + 1),
                        'dt' => 'Term ' . ($i + 1),
                        'dd' => 'Definition ' . ($i + 1),
                        'th', 'td' => 'Cell ' . ($i + 1),
                        'label' => 'Label ' . ($i + 1),
                        'button' => 'Button ' . ($i + 1),
                        'legend' => 'Legend',
                        'summary' => 'Summary',
                        default => 'Example content',
                    };
                    $twigCode .= "{% include '../{$childLevel}/{$childName}.twig' with {'content': '{$textContent}'} %}\n";
                } else {
                    // Elements with content
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

    /**
     * Render the HTML head section using Twig
     */
    private function renderHead(HTMLDocumentDelegatorInterface $document): ?string
    {
        // Get document metadata (title, meta tags) from somewhere - needs implementation
        $metadata = $this->getDocumentMetadata($document);

        if (empty($metadata)) {
            return null; // Or return a default head if preferred
        }

        // Render the head using a Twig template
        return $this->renderTwigTemplate('head', [
            'metadata' => $metadata,
        ]);
    }

    /**
     * Render the body content of the document
     */
    private function renderBody(HTMLDocumentDelegatorInterface $document): ?string
    {
        $bodyContent = '';
        foreach ($document->getChildren() as $child) {
            if ($child instanceof HTMLElementDelegatorInterface) {
                $elementHtml = $this->renderElement($child);
                if ($elementHtml !== null) {
                    $bodyContent .= $elementHtml;
                }
            }
        }

        return $bodyContent === '' ? null : $bodyContent;
    }

    /**
     * Get document metadata (title, meta tags, etc.) - needs implementation
     */
    private function getDocumentMetadata(HTMLDocumentDelegatorInterface $document): array
    {
        // This is a placeholder - implement logic to extract metadata from the document
        return [];
    }

    /**
     * Render a Twig template with provided variables
     */
    private function renderTwigTemplate(string $templateName, array $context = []): ?string
    {
        // Load the template (implementation needed - where are templates stored?)
        $template = $this->loadTwigTemplate($templateName);

        if ($template === null) {
            return null; // Or return a default template if preferred
        }

        // Render the template with context variables
        try {
            return $template->render($context);
        } catch (Exception $e) {
            error_log('Twig rendering error: ' . $e->getMessage());
            return null; // Or return an error message
        }
    }

    /**
     * Load a Twig template - implementation needed
     */
    private function loadTwigTemplate(string $templateName): ?\Twig\Environment
    {
        // This is a placeholder - implement logic to load the Twig template
        return null;
    }
}
