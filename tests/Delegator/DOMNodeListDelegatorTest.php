<?php

use Html\Delegator\DOMNodeListDelegator;
use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\NodeDelegator;

beforeEach(function () {
    $this->document = HTMLDocumentDelegator::createEmpty();
    $this->delegator = new DOMNodeListDelegator($this->document->childNodes);
});

test('constructor', function () {
    expect($this->delegator)->toBeInstanceOf(DOMNodeListDelegator::class);
});

test('child nodes count', function () {
    expect($this->delegator->getIterator())
        ->toHaveCount(0);
});

test('call method', function () {
    $this->expectException(BadMethodCallException::class);
    $this->delegator->nonExistentMethod();
});

test('item', function () {
    $element = $this->document->createElement('div', 'example content');
    $this->document->appendChild($element);
    expect($this->delegator->item(0))
        ->toBeInstanceOf(NodeDelegator::class);
});

test('item count', function () {
    $element = $this->document->createElement('div', 'example content');
    $this->document->appendChild($element);
    expect($this->delegator->count())
        ->toEqual(1);

    $this->document->removeChild($element);
    expect($this->delegator->count())
        ->toEqual(0);
});

test('remove child', function () {
    $element = $this->document->createElement('div', 'example content');
    $this->document->appendChild($element);
    $this->document->removeChild($element);
    expect($this->delegator->getIterator())
        ->toHaveCount(0);
});
