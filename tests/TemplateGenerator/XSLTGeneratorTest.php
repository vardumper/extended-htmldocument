<?php

use Html\Delegator\HTMLDocumentDelegator;
use Html\Element\Block\Division;
use Html\Element\Inline\Anchor;
use Html\Element\Inline\Image;
use Html\Element\Inline\Input;
use Html\Element\Void\Link;
use Html\Interface\TemplateGeneratorInterface;
use Html\TemplateGenerator\XSLTGenerator;

beforeEach(function () {
    $this->generator = new XSLTGenerator();
});

test('implements interface', function () {
    expect($this->generator)->toBeInstanceOf(TemplateGeneratorInterface::class);
});

test('get extension', function () {
    expect($this->generator->getExtension())
        ->toBe('xsl');
});

test('get name pattern', function () {
    expect($this->generator->getNamePattern())
        ->toBe('styles.{extension}');
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

test('render returns null for a document', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    expect($this->generator->render($document))
        ->toBeNull();
});

test('render an inline element with enum-typed attributes', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Anchor::create($document);
    $element->setHref('https://example.com');
    $element->setRel('nofollow');
    $element->setTarget('_blank');

    $result = $this->generator->render($element);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('<xsl:stylesheet');
    expect($result)
        ->toContain('match="item[@type=\'a\']"');
    expect($result)
        ->toContain('xsl:element name="a"');
    // enum-typed attribute produces an allow-list contains() test
    expect($result)
        ->toContain('contains(');
    // non self-closing element emits apply-templates
    expect($result)
        ->toContain('xsl:apply-templates');
});

test('render a self-closing void element', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Link::create($document);
    $element->setHref('https://example.com/stylesheet.css');

    $result = $this->generator->render($element);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('match="item[@type=\'link\']"');
    // self-closing element must NOT emit apply-templates
    expect($result)
        ->not->toContain('xsl:apply-templates');
});

test('render a block element with declared child types', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Division::create($document);

    $result = $this->generator->render($element);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('match="item[@type=\'div\']"');
    // Division has a populated $parentOf, so the apply-templates is restricted by type
    expect($result)
        ->toContain('xsl:apply-templates');
    expect($result)
        ->toContain('@type=\'');
});

test('renderDataXml produces example xml for an element', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Anchor::create($document);
    $element->setHref('https://example.com');

    $result = $this->generator->renderDataXml($element);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('<?xml version="1.0" encoding="UTF-8"?>');
    expect($result)
        ->toContain('<item type="a" id="example-a">');
    expect($result)
        ->toContain('<![CDATA[');
    expect($result)
        ->toContain('</item>');
});

test('renderDataXml uses enum first value when available', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Anchor::create($document);
    $element->setRel('nofollow');

    $result = $this->generator->renderDataXml($element);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('fragment name="rel"');
});

test('renderDataXml covers src and alt example values', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Image::create($document);
    $element->setSrc('https://example.com/image.jpg');
    $element->setAlt('Example image');

    $result = $this->generator->renderDataXml($element);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('<item type="img" id="example-img">');
    expect($result)
        ->toContain('fragment name="src"');
    expect($result)
        ->toContain('fragment name="alt"');
});

test('renderDataXml covers name and value example values', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Input::create($document);
    $element->setName('example-name');
    $element->setValue('example-value');

    $result = $this->generator->renderDataXml($element);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('fragment name="name"');
    expect($result)
        ->toContain('fragment name="value"');
});

test('renderDataXml for an element with an id set', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = Division::create($document);
    $element->setId('my-id');

    $result = $this->generator->renderDataXml($element);

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('<item type="div" id="example-div">');
    expect($result)
        ->toContain('fragment name="class"');
});

test('renderMainXsl lists rendered elements grouped by level', function () {
    $document = HTMLDocumentDelegator::createEmpty();

    $anchor = Anchor::create($document);
    $this->generator->render($anchor);

    $link = Link::create($document);
    $this->generator->render($link);

    $division = Division::create($document);
    $this->generator->render($division);

    $result = $this->generator->renderMainXsl();

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('<xsl:stylesheet version="1.0"');
    expect($result)
        ->toContain('inline/a/styles.xsl');
    expect($result)
        ->toContain('void/link/styles.xsl');
    expect($result)
        ->toContain('block/div/styles.xsl');
});

test('renderMainXsl with no rendered elements emits no per-element imports', function () {
    $result = $this->generator->renderMainXsl();

    expect($result)
        ->toBeString();
    expect($result)
        ->toContain('<xsl:stylesheet version="1.0"');
    // No rendered elements means no level-specific import lines (the usage
    // comment in the header does contain a literal xsl:import example).
    expect($result)
        ->not->toContain('href="block/');
    expect($result)
        ->not->toContain('href="inline/');
    expect($result)
        ->not->toContain('href="void/');
});
