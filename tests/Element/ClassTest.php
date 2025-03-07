<?php

use Dom\HTMLElement;
use Html\Delegator\DOMNodeDelegator;
use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\HTMLElementDelegator;
use Html\Element\Inline\Anchor;
use Html\Element\InlineElement;

beforeEach(function () {
    $this->document = HTMLDocumentDelegator::createEmpty();
});

// instantiation

test('constructor', function () {
    $anchor = Anchor::create($this->document);
    expect($anchor)
        ->toBeInstanceOf(Anchor::class);
    expect($anchor)
        ->toBeInstanceOf(InlineElement::class);
    expect($anchor)
        ->toBeInstanceOf(HTMLElementDelegator::class);
    expect($anchor->htmlElement)
        ->toBeInstanceOf(HTMLElement::class);
});

test('constructor htmldocument create element', function () {
    $anchor = $this->document->htmlDocument->createElement('a');
    expect($anchor)
        ->toBeInstanceOf(HTMLElement::class);
    expect($anchor)
        ->not()
        ->toBeInstanceOf(Anchor::class);
    expect($anchor)
        ->toBeInstanceOf(HTMLElement::class);
    expect($anchor?->htmlElement)
        ->toBe(null);
});

test('constructor html document delegator create element', function () {
    $anchor = $this->document->createElement('a');
    expect($anchor)
        ->toBeInstanceOf(HTMLElementDelegator::class);
});

// appending
test('append', function () {
    $anchor = Anchor::create($this->document);
    expect($anchor)
        ->toBeInstanceOf(Anchor::class);
    expect($anchor)
        ->toBeInstanceOf(InlineElement::class);
    expect($anchor)
        ->toBeInstanceOf(HTMLElementDelegator::class);
    expect($anchor->htmlElement)
        ->toBeInstanceOf(HTMLElement::class);
    $this->document->append($anchor);
    $node = $this->document->getElementsByTagName('a')
        ->item(0);
    expect($node->nodeValue)
        ->toBe($anchor->nodeValue);
    expect($node->tagName)
        ->toBe('A');
    expect($node)
        ->toBeInstanceOf(DOMNodeDelegator::class);
    expect($node->domNode)
        ->toBeInstanceOf(HTMLElement::class);
});

test('append htmldocument create element', function () {
    $anchor = $this->document->htmlDocument->createElement('a');
    expect($anchor)
        ->toBeInstanceOf(HTMLElement::class);
    $this->document->append($anchor);
    $node = $this->document->getElementsByTagName('a')
        ->item(0);
    expect($node->nodeValue)
        ->toBe($anchor->nodeValue);
    expect($node->tagName)
        ->toBe('A');
    expect($node)
        ->toBeInstanceOf(DOMNodeDelegator::class);
    expect($node->domNode)->toBeInstanceOf(HTMLElement::class);
});
