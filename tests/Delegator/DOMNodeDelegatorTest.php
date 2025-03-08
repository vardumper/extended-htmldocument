<?php

use DOM\Node;
use Html\Delegator\DOMNodeDelegator;
use Html\Delegator\HTMLDocumentDelegator;

beforeEach(function () {
    $this->document = HTMLDocumentDelegator::createEmpty();
    $node = $this->document->createTextNode('test');
    $this->domNode = $node;
    $this->delegator = new DOMNodeDelegator($node);
});

test('constructor', function () {
    expect($this->delegator)->toBeInstanceOf(DOMNodeDelegator::class);
    expect($this->delegator->domNode)
        ->toBeInstanceOf(Node::class);
});

test('call', function () {
    $clone = $this->delegator->cloneNode();
    expect($this->delegator->domNode)
        ->toEqual($clone);
    // $this->assertEquals($clone, $this->delegator->domNode);
});

test('call with invalid parameter', function () {
    //expect()->
    $delegator = new DOMNodeDelegator($this->document->createTextNode('test'));
    $node = $this->document->createElement('a');
    $this->expectException(InvalidArgumentException::class);
    $delegator->isSameNode($node);

    // $this->expectException(InvalidArgumentException::class);
    expect($delegator->isSameNode('string'))
        ->toBeFalse();


    $span = $this->document->createElement('span');
    $delegator = new DOMNodeDelegator($span);
    $delegator->appendChild($this->delegator); // This should trigger line 29
});


test('call with delegator args', function () {
    $node = $this->document->createComment('This is a comment');
    $otherNode = $this->document->createComment('This is a comment');
    $delegator = new DOMNodeDelegator($node);
    expect($delegator->isEqualNode($otherNode))
        ->toBe(true);
    expect($delegator->isSameNode($otherNode))
        ->toBe(false);

    expect($delegator->isSameNode($node))
        ->toBe(true);

    // expect($delegator->domNode)
    //     ->isEqual($node);

    // expect($delegator->isSameNode($node->domNode))
    // ->toBe(true);
});


test('get', function () {
    $this->delegator->nodeValue = 'custom node value';
    expect($this->delegator->nodeValue)
        ->toEqual('custom node value');
    expect($this->delegator->domNode->nodeValue)
        ->toEqual('custom node value');
});

test('set', function () {
    $this->delegator->nodeValue = 'test';
    expect($this->delegator->nodeValue)
        ->toEqual('test');
    expect($this->delegator->domNode->nodeValue)
        ->toEqual('test');
});

test('get dom node', function () {
    expect($this->delegator->getDomNode())
        ->toBe($this->delegator->domNode);
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

    // $this->assertEquals(1, $anchor->childNodes->length);
    // $this->assertEquals('I\'m a node, too', $anchor->childNodes->item(0)->nodeValue);
    expect($anchor->contains($other))
        ->toBeTrue();
});
