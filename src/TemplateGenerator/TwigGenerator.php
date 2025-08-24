<?php

namespace Html\TemplateGenerator;

use Html\Interface\HTMLDocumentDelegatorInterface;
use Html\Interface\HTMLElementDelegatorInterface;
use Html\Interface\TemplateGeneratorInterface;
use Html\Mapping\TemplateGenerator;

#[TemplateGenerator('twig')]
class TwigGenerator implements TemplateGeneratorInterface
{
    public const TEMPLATE = 'src/Resources/templates/twig.tpl.php';

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
        if ($elementOrDocument instanceof HTMLElementDelegatorInterface) {
            return $this->renderElement($elementOrDocument);
        }

        return null;
    }

    public function setComponentHandle(string $handle): void
    {
        $this->componentHandle = $handle;
    }

    public function renderElement(HTMLElementDelegatorInterface $element): string
    {
        $html = (string) $element->delegated->ownerDocument->saveHTML($element->delegated);
        // Pretty print the HTML before injecting into the template
        if (class_exists('Edent\\PrettyPrintHtml\\PrettyPrintHtml')) {
            $formatter = new \Edent\PrettyPrintHtml\PrettyPrintHtml();
            $html = $formatter->serializeHtml($element->delegated, rawAttributes: false);
            // Convert tabs to 4 spaces for indentation
            $html = str_replace("\t", '    ', $html);
            // Add 4 spaces to the beginning of every line
            $html = preg_replace('/^/m', '    ', $html);
        }
        $template = file_get_contents(self::TEMPLATE);
        $output = str_replace(
            ['<?= $componentHandle ?>', '<?= $html ?>'],
            [$this->componentHandle, $html],
            $template
        );
        return $output;
    }

    public function renderDocument(HTMLDocumentDelegatorInterface $document): string
    {
        $html = (string) $document->delegated->saveHTML($document->delegated);
        // Pretty print the HTML before injecting into the template
        if (class_exists('Edent\\PrettyPrintHtml\\PrettyPrintHtml')) {
            $formatter = new \Edent\PrettyPrintHtml\PrettyPrintHtml();
            $html = $formatter->serializeHtml($document->delegated, rawAttributes: false);
            // Convert tabs to 4 spaces for indentation
            $html = str_replace("\t", '    ', $html);
            // Add 4 spaces to the beginning of every line
            $html = preg_replace('/^/m', '    ', $html);
        }
        $template = file_get_contents(self::TEMPLATE);
        $output = str_replace(
            ['<?= $componentHandle ?>', '<?= $html ?>'],
            [$this->componentHandle, $html],
            $template
        );
        return $output;
    }
}
