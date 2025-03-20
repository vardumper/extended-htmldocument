<?php

namespace Html\TemplateGenerator;

#use Html\Delegator\HTMLDocumentDelegatorInterface;
#use Html\Delegator\HTMLElementDelegatorInterface;
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

    public function render($elementOrDocument): string
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
        return (string) $element->htmlElement->ownerDocument->saveHTML($element->htmlElement);
    }

    public function renderDocument(HTMLDocumentDelegatorInterface $document): string
    {
        return (string) $document->ownerDocument->saveHTML($document->htmlDocument);
    }
}
