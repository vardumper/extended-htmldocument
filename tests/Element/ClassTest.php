<?php

use Dom\HTMLElement;
use Html\Delegator\DOMNodeDelegator;
use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\HTMLElementDelegator;
use Html\Element\Inline\Anchor;
use Html\Element\Inline\Input;
use Html\Element\InlineElement;
use Html\Enum\TypeInputEnum;

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
    expect($node->domNode)
        ->toBeInstanceOf(HTMLElement::class);
});

test('setting properties via Setter', function () {
    $input = Input::create($this->document);
    $input->setType('text');
    expect($input->getType())
        ->toBe(TypeInputEnum::TEXT);
    expect($input->getAttribute('type'))
        ->toBe(TypeInputEnum::TEXT);
});

test('setting properties via direct property access', function () {
    $input = Input::create($this->document);
    $input->type = TypeInputEnum::from('text');
    expect($input->getType())
        ->toBe(TypeInputEnum::TEXT);
    expect($input->getAttribute('type'))
        ->toBe(TypeInputEnum::TEXT);
    expect($input->getAttribute('type')->value)
        ->toBe('text');
});

test('setting properties via direct property access different enum instantiation', function () {
    $input = Input::create($this->document);
    $input->type = TypeInputEnum::TEXT;
    expect($input->getType())
        ->toBe(TypeInputEnum::TEXT);
    expect($input->getAttribute('type'))
        ->toBe(TypeInputEnum::TEXT);
    expect($input->getAttribute('type')->value)
        ->toBe('text');
});

test('check type of ownerDocument', function () {
    $input = Input::create($this->document);
    expect($input->ownerDocument)
        ->toBeInstanceOf(HTMLDocumentDelegator::class);
});
