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

    public function renderElement(HTMLElementDelegatorInterface $element): string
    {
        return (string) $element->delegated->ownerDocument->saveHTML($element->delegated);
    }

    public function renderDocument(HTMLDocumentDelegatorInterface $document): string
    {
        return (string) $document->delegated->saveHTML($document->delegated);
    }
}
