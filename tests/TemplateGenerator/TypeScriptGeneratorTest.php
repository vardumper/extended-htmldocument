<?php

use Html\Delegator\HTMLDocumentDelegator;
use Html\Element\Block\Body;
use Html\Element\Inline\Anchor;
use Html\Interface\TemplateGeneratorInterface;
use Html\TemplateGenerator\TypeScriptGenerator;

beforeEach(function () {
    $this->generator = new TypeScriptGenerator();
});

test('implements interface', function () {
    expect($this->generator)->toBeInstanceOf(TemplateGeneratorInterface::class);
});

test('constructor', function () {
    expect($this->generator)->toBeInstanceOf(TypeScriptGenerator::class);
});

test('get extension', function () {
    expect($this->generator->getExtension())
        ->toBe('ts');
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
        ->toBeFalse();
});

test('is templated', function () {
    expect($this->generator->isTemplated())
        ->toBeFalse();
});

test('render element', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Anchor::create($document);
    $element->setHref('https://example.com');
    $result = $this->generator->render($element);
    expect($result)->toBeString();
    expect($result)->toContain('interface');
    expect($result)->toContain('class');
});

test('render document', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Body::create($document);
    $document->appendChild($element);
    $result = $this->generator->render($document);
    expect($result)->toBeNull();
});

test('render invalid', function () {
    expect($this->generator->render('string'))
        ->toBe(null);
});