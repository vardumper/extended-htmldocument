<?php

namespace Html\Interface;

interface TemplateGeneratorInterface
{
    public function getExtension(): string;

    public function getNamePattern(): string;

    public function canRenderElements(): bool;

    public function canRenderDocuments(): bool;

    public function isTemplated(): bool;

    public function render(HTMLElementDelegatorInterface|HTMLDocumentDelegatorInterface $elementOrDocument): ?string;

    // Optional: Generate PHP component class (for generators like twig-component)
    // public function renderComponentClass(HTMLElementDelegatorInterface $element): ?string;

    // public function renderElement(HTMLElementDelegatorInterface $element): string;

    // public function renderDocument(HTMLDocumentDelegatorInterface $document): string;
}
