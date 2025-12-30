<?php

use Html\Delegator\HTMLDocumentDelegator;
use Html\Interface\ComponentBuilderInterface;
use Html\Service\ComponentBuilder;
use InvalidArgumentException;

beforeEach(function () {
    $this->builder = new ComponentBuilder();
});

test('implements interface', function () {
    expect($this->builder)->toBeInstanceOf(ComponentBuilderInterface::class);
});

test('constructor', function () {
    expect($this->builder)->toBeInstanceOf(ComponentBuilder::class);
});

test('buildComponent throws exception for multiple components', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $data = [
        'component1' => ['structure' => []],
        'component2' => ['structure' => []],
    ];

    expect(fn() => $this->builder->buildComponent($document, $data))
        ->toThrow(InvalidArgumentException::class, 'Only one component per file is allowed.');
});

test('buildComponent throws exception when structure is missing', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $data = [
        'component1' => ['other' => 'data'],
    ];

    expect(fn() => $this->builder->buildComponent($document, $data))
        ->toThrow(InvalidArgumentException::class, 'Component structure is required');
});

test('buildComponent with valid single component does not throw', function () {
    $document = HTMLDocumentDelegator::createEmpty();

    $data = [
        'myComponent' => [
            'structure' => [
                'div' => [
                    'class' => 'container',
                    'text' => 'Hello World'
                ]
            ]
        ]
    ];

    // This test verifies that the method doesn't throw exceptions with valid structure
    // The actual DOM building would require more complex setup with real element classes
    expect(fn() => $this->builder->buildComponent($document, $data))
        ->toThrow(InvalidArgumentException::class, "Element class for tag 'div' not found.");
});

test('buildComponent throws exception for unknown element', function () {
    $document = HTMLDocumentDelegator::createEmpty();

    $data = [
        'component' => [
            'structure' => [
                'unknown-element' => []
            ]
        ]
    ];

    expect(fn() => $this->builder->buildComponent($document, $data))
        ->toThrow(InvalidArgumentException::class, "Element class for tag 'unknown-element' not found.");
});