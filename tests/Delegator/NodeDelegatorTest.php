<?php

use DOM\Node;
use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\NodeDelegator;

beforeEach(function () {
    $this->document = HTMLDocumentDelegator::createEmpty();
    $node = $this->document->createTextNode('test');
    $this->node = $node;
    $this->delegator = new NodeDelegator($node);
});

test('constructor', function () {
    expect($this->delegator)->toBeInstanceOf(NodeDelegator::class);
    expect($this->delegator->delegated)
        ->toBeInstanceOf(Node::class);
});

test('call', function () {
    $clone = $this->delegator->cloneNode();
    expect($this->delegator->delegated)
        ->toEqual($clone);
    // $this->assertEquals($clone, $this->delegator->delegated);
});

test('call with invalid parameter', function () {
    $delegator = new NodeDelegator($this->document->createTextNode('test'));
    $node = $this->document->createElement('a');
    $this->expectException(TypeError::class);
    $delegator->isSameNode($node);

    // $this->expectException(InvalidArgumentException::class);
    expect($delegator->isSameNode('string'))
        ->toBeFalse();


    $span = $this->document->createElement('span');
    $delegator = new NodeDelegator($span);
    $delegator->appendChild($this->delegator); // This should trigger line 29
});


test('call with delegator args', function () {
    $node = $this->document->createComment('This is a comment');
    $otherNode = $this->document->createComment('This is a comment');
    $delegator = new NodeDelegator($node);
    expect($delegator->isEqualNode($otherNode))
        ->toBe(true);
    expect($delegator->isSameNode($otherNode))
        ->toBe(false);

    expect($delegator->isSameNode($node))
        ->toBe(true);

    // expect($delegator->delegated)
    //     ->isEqual($node);

    // expect($delegator->isSameNode($node->node))
    // ->toBe(true);
});


test('get', function () {
    $this->delegator->nodeValue = 'custom node value';
    expect($this->delegator->nodeValue)
        ->toEqual('custom node value');
    expect($this->delegator->delegated->nodeValue)
        ->toEqual('custom node value');
});

test('set', function () {
    $this->delegator->nodeValue = 'test';
    expect($this->delegator->nodeValue)
        ->toEqual('test');
    expect($this->delegator->delegated->nodeValue)
        ->toEqual('test');
});

test('get dom node', function () {
    expect($this->delegator->getnode())
        ->toBe($this->delegator->delegated);
});

test('call invalid method', function () {
    $this->expectException(BadMethodCallException::class);
    $this->delegator->nonExistentMethod();
});

test('get invalid property', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->delegator->nonExistentProperty;
});

test('set invalid property', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->delegator->nonExistentProperty = 'value';
});

test('call with htmlelement delegator argument', function () {
    // Create an HTMLElementDelegator instance
    $anchor = $this->document->createElement('a');
    $anchor->htmlElement->setAttribute('href', 'https://example.com');

    $other = $this->document->createTextNode('I\'m a node, too');
    $anchor->appendChild($other);

    expect($anchor->contains($other))
        ->toBeTrue();
});
