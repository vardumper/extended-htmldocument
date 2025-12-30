<?php

use Html\Mapping\Element;

test('Element attribute can be instantiated', function () {
    $element = new Element();
    expect($element)->toBeInstanceOf(Element::class);
});

test('Element attribute accepts qualified name', function () {
    $element = new Element('div');
    expect($element->qualifiedName)->toBe('div');
});

test('Element attribute accepts null qualified name', function () {
    $element = new Element(null);
    expect($element->qualifiedName)->toBeNull();
});

test('Element attribute has default null qualified name', function () {
    $element = new Element();
    expect($element->qualifiedName)->toBeNull();
});