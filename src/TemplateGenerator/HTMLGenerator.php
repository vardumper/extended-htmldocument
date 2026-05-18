<?php

namespace Html\TemplateGenerator;

use Dom\Comment;
use Dom\Element;
use Dom\Text;
use Edent\PrettyPrintHtml\PrettyPrintHtml;
use Html\Delegator\HTMLDocumentDelegator;
use Html\Interface\HTMLDocumentDelegatorInterface;
use Html\Interface\HTMLElementDelegatorInterface;
use Html\Interface\TemplateGeneratorInterface;
use Html\Mapping\TemplateGenerator;

#[TemplateGenerator('html')]
class HTMLGenerator implements TemplateGeneratorInterface
{
    public function getExtension(): string
    {
        return 'html';
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
        return false;
    }

    public function render($elementOrDocument): ?string
    {
        if ($elementOrDocument instanceof HTMLDocumentDelegatorInterface) {
            return $this->renderDocument($elementOrDocument);
        }
        if ($elementOrDocument instanceof HTMLElementDelegatorInterface) {
            return $this->renderElement($elementOrDocument);
        }

        return null;
    }

    public function renderElement(HTMLElementDelegatorInterface $element): string
    {
        /** @var \DOM\HTMLDocument $doc */
        $doc = $element->delegated->ownerDocument;
        return (string) $doc->saveHTML($element->delegated);
    }

    public function renderDocument(HTMLDocumentDelegatorInterface $document): string
    {
        /** @var \DOM\HTMLDocument $doc */
        $doc = $document->delegated;

        if ($doc->documentElement === null) {
            return '';
        }

        $body = $doc->getElementsByTagName('body')
            ->item(0);
        $container = $body ?? $doc->documentElement;
        $html = '';

        foreach ($container->childNodes as $child) {
            if ($body === null && $child instanceof Element && strtolower($child->tagName) === 'head') {
                continue;
            }

            $html .= $doc->saveHTML($child);
        }

        return $this->formatHtml($html);
    }

    private function formatHtml(string $html): string
    {
        if ($html === '') {
            return '';
        }

        $formatted = $html;
        $document = HTMLDocumentDelegator::createFromString(
            '<!doctype html><html><body><div id="__html_generator_fragment__">' . $html . '</div></body></html>'
        );
        $wrapper = $document->delegated->getElementById('__html_generator_fragment__');

        if ($wrapper !== null) {
            $formatter = new PrettyPrintHtml();
            $fragments = [];
            foreach ($wrapper->childNodes as $child) {
                // Only serialize nodes that PrettyPrintHtml accepts
                if ($child instanceof Element || $child instanceof Text || $child instanceof Comment) {
                    $fragments[] = rtrim($formatter->serializeHtml($child, 0, false, true, false), "\r\n");
                }
            }

            $formatted = implode(
                "\n",
                array_filter($fragments, static fn (string $fragment): bool => $fragment !== '')
            );
        }

        return $formatted;
    }
}
