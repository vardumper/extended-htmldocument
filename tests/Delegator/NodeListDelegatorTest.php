<?php

use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\NodeDelegator;
use Html\Delegator\NodeListDelegator;

beforeEach(function () {
    // Use Pest's closure state, not $this->property
    $document = HTMLDocumentDelegator::createEmpty();
    $delegator = new NodeListDelegator($document->childNodes);
    // Store in Pest's test context
    test()
        ->document = $document;
    test()
        ->delegator = $delegator;
});

test('constructor', function () {
    expect(test()->delegator)
        ->toBeInstanceOf(NodeListDelegator::class);
});

test('child nodes count', function () {
    expect(iterator_to_array(test()->delegator->getIterator()))
        ->toHaveCount(0);
});

test('call method', function () {
    $this->expectException(BadMethodCallException::class);
    test()
        ->delegator->nonExistentMethod();
});

test('item', function () {
    $document = test()
        ->document;
    $delegator = test()
        ->delegator;
    $element = $document->createElement('div', 'example content');
    $document->appendChild($element);
    $item = $delegator->item(0);
    expect($item instanceof NodeDelegator || strpos(get_class($item), 'Html\\Element\\') === 0)->toBeTrue();
});

test('item count', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = $document->createElement('div', 'example content');
    $document->appendChild($element);
    $delegator = new NodeListDelegator($document->documentElement->childNodes);
    expect(count($delegator))
        ->toEqual(1);

    $document->removeChild($element);
    $delegator = new NodeListDelegator($document->documentElement->childNodes);
    expect(count($delegator))
        ->toEqual(0);
    $document = HTMLDocumentDelegator::createEmpty();
    $element = $document->createElement('div', 'example content');
    $document->appendChild($element);
    $delegator = new NodeListDelegator($document->documentElement->childNodes);
    expect(count($delegator))
        ->toEqual(1);

    $document->removeChild($element);
    $delegator = new NodeListDelegator($document->documentElement->childNodes);
    expect(count($delegator))
        ->toEqual(0);
});

test('remove child', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $element = $document->createElement('div', 'example content');
    $document->appendChild($element);
    $document->removeChild($element);
    $delegator = new NodeListDelegator($document->documentElement->childNodes);
    expect(iterator_to_array($delegator->getIterator()))
        ->toHaveCount(0);
});
