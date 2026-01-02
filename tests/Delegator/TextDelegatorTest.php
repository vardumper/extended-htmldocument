<?php

use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\TextDelegator;

beforeEach(function () {
    $this->document = HTMLDocumentDelegator::createEmpty();
    $textNode = $this->document->createTextNode('Hello World');
    $this->delegator = $textNode;
});

test('constructor', function () {
    expect($this->delegator)->toBeInstanceOf(TextDelegator::class);
});

test('get text', function () {
    expect($this->delegator->getText())
        ->toBeInstanceOf(\DOM\Text::class);
    expect($this->delegator->getText()->data)
        ->toBe('Hello World');
});

test('get owner document', function () {
    expect($this->delegator->getOwnerDocument())
        ->toBe($this->document);
});
