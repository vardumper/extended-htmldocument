<?php

use Html\Delegator\HTMLDocumentDelegator;
use Html\Element\Block\Body;
use Html\Element\Inline\Anchor;
use Html\Interface\TemplateGeneratorInterface;
use Html\TemplateGenerator\NextJSGenerator;

beforeEach(function () {
    $this->generator = new NextJSGenerator();
});

test('implements interface', function () {
    expect($this->generator)->toBeInstanceOf(TemplateGeneratorInterface::class);
});

test('constructor', function () {
    expect($this->generator)->toBeInstanceOf(NextJSGenerator::class);
});

test('get extension', function () {
    expect($this->generator->getExtension())
        ->toBe('tsx');
});

test('get name pattern', function () {
    expect($this->generator->getNamePattern())
        ->toBe('{Component}.{extension}');
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
    expect($result)->toContain('React');
    expect($result)->toContain('href');
    expect($result)->toContain('export const');
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