<?php

declare(strict_types=1);

namespace Html\TemplateGenerator;

use Html\Interface\HTMLDocumentDelegatorInterface;
use Html\Interface\HTMLElementDelegatorInterface;
use Html\Interface\TemplateGeneratorInterface;
use Html\Mapping\TemplateGenerator;
use Html\Trait\ClassResolverTrait;

#[TemplateGenerator('blade-component')]
class BladeComponentGenerator implements TemplateGeneratorInterface
{
    use ClassResolverTrait;

    private const TEMPLATE_PATH = __DIR__ . '/../Resources/templates/BladeComponentDocument.tpl.php';

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
        return false;
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

        return null;
    }

    public function renderDocument(HTMLDocumentDelegatorInterface $document): string
    {
        $componentTree = $this->renderNodeChildren($document->delegated->body ?? $document->delegated, 0);

        ob_start();
        $templatePath = self::TEMPLATE_PATH;
        $component_tree = $componentTree;
        include $templatePath;

        return (string) ob_get_clean();
    }

    public function renderElement(HTMLElementDelegatorInterface $element): string
    {
        return $this->renderNode($element->delegated, 0);
    }

    private function renderNodeChildren(\DOM\Node $node, int $depth): string
    {
        $output = '';
        foreach ($node->childNodes as $child) {
            $output .= $this->renderNode($child, $depth);
        }

        return $output;
    }

    private function renderNode(\DOM\Node $node, int $depth): string
    {
        $indent = str_repeat('  ', $depth);

        if ($node instanceof \DOM\Text) {
            $text = trim($node->nodeValue ?? '');
            if ($text === '') {
                return '';
            }

            return $indent . $text . "\n";
        }

        if (! $node instanceof \DOM\Element) {
            return '';
        }

        $tagName = strtolower($node->tagName);
        if (in_array($tagName, ['html', 'head', 'body'], true)) {
            return $this->renderNodeChildren($node, $depth);
        }

        $componentTag = $this->resolveComponentTag($tagName);
        if ($componentTag === null) {
            return $this->renderRawNode($node, $depth);
        }

        $attributes = $this->buildAttributeString($node);
        $children = $this->renderNodeChildren($node, $depth + 1);
        $isSelfClosing = $this->isVoidElementTag($tagName);
        $hasChildren = trim($children) !== '';

        if ($isSelfClosing) {
            return $indent . '<' . $componentTag . ($attributes !== '' ? ' ' . $attributes : '') . " />\n";
        }

        if (! $hasChildren) {
            return $indent . '<' . $componentTag . ($attributes !== '' ? ' ' . $attributes : '') . '></' . $componentTag . ">\n";
        }

        return $indent . '<' . $componentTag . ($attributes !== '' ? ' ' . $attributes : '') . ">\n"
            . $children
            . $indent . '</' . $componentTag . ">\n";
    }

    private function renderRawNode(\DOM\Node $node, int $depth): string
    {
        $indent = str_repeat('  ', $depth);

        if ($node instanceof \DOM\Text) {
            $text = trim($node->nodeValue ?? '');
            return $text === '' ? '' : $indent . $text . "\n";
        }

        if (! $node instanceof \DOM\Element) {
            return '';
        }

        $tagName = strtolower($node->tagName);
        $attributes = $this->buildAttributeString($node);
        if ($this->isVoidElementTag($tagName)) {
            return $indent . '<' . $tagName . ($attributes !== '' ? ' ' . $attributes : '') . ">\n";
        }

        $children = $this->renderNodeChildren($node, $depth + 1);
        if (trim($children) === '') {
            return $indent . '<' . $tagName . ($attributes !== '' ? ' ' . $attributes : '') . '></' . $tagName . ">\n";
        }

        return $indent . '<' . $tagName . ($attributes !== '' ? ' ' . $attributes : '') . ">\n"
            . $children
            . $indent . '</' . $tagName . ">\n";
    }

    private function buildAttributeString(\DOM\Element $element): string
    {
        $parts = [];
        foreach ($element->attributes as $attribute) {
            $value = $attribute->value;
            $parts[] = $attribute->name . '="' . htmlspecialchars($value, \ENT_QUOTES | \ENT_SUBSTITUTE, 'UTF-8') . '"';
        }

        return implode(' ', $parts);
    }

    private function resolveComponentTag(string $tagName): ?string
    {
        $className = $this->getElementByQualifiedName($tagName);
        if ($className === null) {
            return null;
        }

        return 'x-' . $this->determineLevel($className) . '.' . $tagName;
    }

    private function determineLevel(string $className): string
    {
        if (str_contains($className, 'InlineElement') || str_contains($className, '\\Element\\Inline\\')) {
            return 'inline';
        }

        if (str_contains($className, 'VoidElement') || str_contains($className, '\\Element\\Void\\')) {
            return 'void';
        }

        return 'block';
    }

    private function isVoidElementTag(string $tagName): bool
    {
        return in_array($tagName, [
            'area', 'base', 'br', 'col', 'embed', 'hr', 'img', 'input', 'link',
            'meta', 'param', 'source', 'track', 'wbr',
        ], true);
    }
}
