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
    }

    public function getNamePattern(): string
    {
    }

    public function canRenderElements(): bool
    {
    }

    public function canRenderDocuments(): bool
    {
    }

    public function render(HTMLElementDelegatorInterface|HTMLDocumentDelegatorInterface $elementOrDocument): string
    {
        return '';
    }

    public function renderElement(HTMLElementDelegatorInterface $element): string
    {
        return '';
    }

    public function renderDocument(HTMLDocumentDelegatorInterface $document): string
    {
        return '';
    }
}
