<?php

use Html\Delegator\HTMLDocumentDelegator;
use Html\Element\Block\Body;
use Html\Element\Inline\Anchor;
use Html\Interface\TemplateGeneratorInterface;
use Html\TemplateGenerator\HTMLGenerator;

beforeEach(function () {
    $this->generator = new HTMLGenerator();
});

test('implements interface', function () {
    expect($this->generator)->toBeInstanceOf(TemplateGeneratorInterface::class);
});

test('constructor', function () {
    expect($this->generator)->toBeInstanceOf(HTMLGenerator::class);
});

test('get extension', function () {
    expect($this->generator->getExtension())
        ->toBe('html');
});

test('get name pattern', function () {
    expect($this->generator->getNamePattern())
        ->toBe('{component}.{extension}');
});

test('can render elements', function () {
    expect($this->generator->canRenderElements())
        ->toBeTrue();
});

test('can render documents', function () {
    expect($this->generator->canRenderDocuments())
        ->toBeTrue();
});

test('render element', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Anchor::create($document);
    $element->setHref('https://example.com');
    expect($this->generator->render($element))
        ->toBe('<a href="https://example.com"></a>');
});

test('render document', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Body::create($document);
    $document->appendChild($element);
    expect($this->generator->render($document))
        ->toBe('<body></body>');
});
