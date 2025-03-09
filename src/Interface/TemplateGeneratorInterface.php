<?php

namespace Html\Interface;

interface TemplateGeneratorInterface
{
    public function getName(): string;

    public function getExtension(): string;

    public function getNamePattern(): string;

    public function canRenderElements(): bool;

    public function canRenderDocuments(): bool;

    public function render(HTMLElementDelegatorInterface|HTMLDocumentDelegatorInterface $elementOrDocument): string;

    public function renderElement(HTMLElementDelegatorInterface $element): string;

    public function renderDocument(HTMLDocumentDelegatorInterface $document): string;
}
