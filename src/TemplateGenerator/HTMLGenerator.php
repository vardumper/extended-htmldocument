<?php

namespace Html\TemplateGenerator;

use Html\Delegator\HTMLDocumentDelegatorInterface;
use Html\Delegator\HTMLElementDelegatorInterface;
use Html\Interface\TemplateGeneratorInterface;

class HTMLGenerator implements TemplateGeneratorInterface
{
    public function getName(): string
    {
        return 'html';
    }

    public function getExtension(): string
    {
        return 'html';
    }

    public function getNamePattern(): string
    {
        return '{component}.html';
    }

    public function canRenderElements(): bool
    {
        return true;
    }

    public function canRenderDocuments(): bool
    {
        return true;
    }

    public function render(HTMLElementDelegatorInterface|HTMLDocumentDelegatorInterface $elementOrDocument): string
    {
        if ($elementOrDocument instanceof HTMLDocumentDelegatorInterface) {
            return $this->renderDocument($elementOrDocument);
        } elseif ($elementOrDocument instanceof HTMLElementDelegatorInterface) {
            return $this->renderElement($elementOrDocument);
        }
        return '';
    }

    public function renderElement(HTMLElementDelegatorInterface $element): string
    {
        return (string) $element->htmlElement;
    }

    public function renderDocument(HTMLDocumentDelegatorInterface $document): string
    {
        return (string) $document->htmlDocument;
    }
}
