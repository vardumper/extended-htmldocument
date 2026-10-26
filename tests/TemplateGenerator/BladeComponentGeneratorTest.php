<?php

use Html\Delegator\HTMLDocumentDelegator;
use Html\Element\Block\Division;
use Html\Element\Inline\Anchor;
use Html\Interface\TemplateGeneratorInterface;
use Html\TemplateGenerator\BladeComponentGenerator;

beforeEach(function () {
    $this->generator = new BladeComponentGenerator();
});

test('implements interface', function () {
    expect($this->generator)->toBeInstanceOf(TemplateGeneratorInterface::class);
});

test('get extension', function () {
    expect($this->generator->getExtension())
        ->toBe('blade.php');
});

test('get name pattern', function () {
    expect($this->generator->getNamePattern())
        ->toBe('{component}.{extension}');
});

test('can render elements', function () {
    expect($this->generator->canRenderElements())
        ->toBeFalse();
});

test('can render documents', function () {
    expect($this->generator->canRenderDocuments())
        ->toBeTrue();
});

test('is templated', function () {
    expect($this->generator->isTemplated())
        ->toBeTrue();
});

test('render returns null for an element', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Division::create($document);
    expect($this->generator->render($element))
        ->toBeNull();
});

test('render a document produces the blade component tree', function () {
    $document = HTMLDocumentDelegator::createFromString(
        '<!doctype html><html><head></head><body>'
        . '<div id="wrapper">Hello</div>'
        . '<a href="https://example.com">Link</a>'
        . '<img src="x.jpg" alt="x">'
        . '<br>'
        . '</body></html>'
    );

    $result = $this->generator->render($document);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('auto-generated');
    // block component with children
    expect($result)
        ->toContain('x-block.div');
    // inline component
    expect($result)
        ->toContain('x-inline.a');
    // img is an inline element
    expect($result)
        ->toContain('x-inline.img');
    // void element rendered self-closing
    expect($result)
        ->toContain('x-void.br');
});

test('renderDocument renders raw (unregistered) nodes', function () {
    $document = HTMLDocumentDelegator::createFromString(
        '<!doctype html><html><head></head><body>'
        . '<custom-widget data-x="1">inner</custom-widget>'
        . '<div></div>'
        . '</body></html>'
    );

    $result = $this->generator->renderDocument($document);

    expect($result)
        ->toBeString();
    // unregistered tag falls back to the raw node renderer
    expect($result)
        ->toContain('<custom-widget');
    expect($result)
        ->toContain('data-x="1"');
    // empty component element
    expect($result)
        ->toContain('x-block.div');
});

test('renderDocument skips empty text nodes', function () {
    $document = HTMLDocumentDelegator::createFromString(
        '<!doctype html><html><head></head><body><div>   </div></body></html>'
    );

    $result = $this->generator->renderDocument($document);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('x-block.div');
});

test('renderElement renders a single element node', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Anchor::create($document);
    $element->setHref('https://example.com');

    $result = $this->generator->renderElement($element);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('x-inline.a');
    expect($result)
        ->toContain('href="https://example.com"');
});

test('renderDocument handles comment nodes and raw void/empty elements', function () {
    $document = HTMLDocumentDelegator::createFromString(
        '<!doctype html><html><head></head><body>'
        . '<!-- a comment node -->'
        . '<unknown-void-tag>'
        . '<empty-raw></empty-raw>'
        . '</body></html>'
    );

    $result = $this->generator->renderDocument($document);

    expect($result)
        ->toBeString();
    // comment nodes are dropped (non-element, non-text)
    expect($result)
        ->not->toContain('a comment node');
    // unregistered void-ish tag rendered raw
    expect($result)
        ->toContain('<unknown-void-tag');
    // unregistered element with no children
    expect($result)
        ->toContain('<empty-raw></empty-raw>');
});
