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
        'component1' => [
            'structure' => [],
        ],
        'component2' => [
            'structure' => [],
        ],
    ];

    expect(fn () => $this->builder->buildComponent($document, $data))
        ->toThrow(InvalidArgumentException::class, 'Only one component per file is allowed.');
});

test('buildComponent throws exception when structure is missing', function () {
    $document = HTMLDocumentDelegator::createEmpty();
    $data = [
        'component1' => [
            'other' => 'data',
        ],
    ];

    expect(fn () => $this->builder->buildComponent($document, $data))
        ->toThrow(InvalidArgumentException::class, 'Component structure is required');
});

test('buildComponent with valid single component does not throw', function () {
    $document = HTMLDocumentDelegator::createEmpty();

    $data = [
        'myComponent' => [
            'structure' => [
                'div' => [
                    'class' => 'container',
                    'text' => 'Hello World',
                ],
            ],
        ],
    ];

    // This test verifies that the method doesn't throw exceptions with valid structure
    // The actual DOM building would require more complex setup with real element classes
    $this->builder->buildComponent($document, $data);
    expect(true)
        ->toBeTrue(); // Just to have an assertion
});

test('buildComponent throws exception for unknown element', function () {
    $document = HTMLDocumentDelegator::createEmpty();

    $data = [
        'component' => [
            'structure' => [
                'unknown-element' => [],
            ],
        ],
    ];

    expect(fn () => $this->builder->buildComponent($document, $data))
        ->toThrow(InvalidArgumentException::class, "Element class for tag 'unknown-element' not found.");
});

test('buildComponent builds DOM with nested children', function () {
    $document = HTMLDocumentDelegator::createEmpty();

    $data = [
        'myComponent' => [
            'structure' => [
                'div' => [
                    'class' => 'container',
                    'children' => [
                        [
                            'p' => [
                                'text' => 'Hello World',
                                'class' => 'greeting',
                            ],
                        ],
                        [
                            'div' => [
                                'class' => 'nested',
                                'children' => [
                                    [
                                        'p' => [
                                            'text' => 'Nested content',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ];

    $this->builder->buildComponent($document, $data);

    // For HTML documents, elements are appended to the documentElement (html)
    $htmlElement = $document->documentElement;
    expect($htmlElement)
        ->not->toBeNull();
    expect(strtolower($htmlElement->tagName))
        ->toBe('html');

    // Our div should be a child of the html element
    $rootElement = $htmlElement->firstElementChild;
    expect($rootElement)
        ->not->toBeNull();
    expect(strtolower($rootElement->tagName))
        ->toBe('div');
    expect($rootElement->getAttribute('class'))
        ->toBe('container');

    // Check first child paragraph
    $firstChild = $rootElement->firstElementChild;
    expect($firstChild)
        ->not->toBeNull();
    expect(strtolower($firstChild->tagName))
        ->toBe('p');
    expect($firstChild->getAttribute('class'))
        ->toBe('greeting');
    expect($firstChild->textContent)
        ->toBe('Hello World');

    // Check second child div
    $secondChild = $firstChild->nextElementSibling;
    expect($secondChild)
        ->not->toBeNull();
    expect(strtolower($secondChild->tagName))
        ->toBe('div');
    expect($secondChild->getAttribute('class'))
        ->toBe('nested');

    // Check nested paragraph inside second div
    $nestedParagraph = $secondChild->firstElementChild;
    expect($nestedParagraph)
        ->not->toBeNull();
    expect(strtolower($nestedParagraph->tagName))
        ->toBe('p');
    expect($nestedParagraph->textContent)
        ->toBe('Nested content');
});

test('buildComponent handles multiple siblings correctly', function () {
    $document = HTMLDocumentDelegator::createEmpty();

    $data = [
        'myComponent' => [
            'structure' => [
                'div' => [
                    'children' => [
                        [
                            'p' => [
                                'text' => 'First paragraph',
                            ],
                        ],
                        [
                            'p' => [
                                'text' => 'Second paragraph',
                            ],
                        ],
                        [
                            'p' => [
                                'text' => 'Third paragraph',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ];

    $this->builder->buildComponent($document, $data);

    $htmlElement = $document->documentElement;
    $rootElement = $htmlElement->firstElementChild;
    expect($rootElement)
        ->not->toBeNull();

    // Count children
    $childCount = 0;
    $child = $rootElement->firstElementChild;
    while ($child !== null) {
        $childCount++;
        expect(strtolower($child->tagName))
            ->toBe('p');
        $child = $child->nextElementSibling;
    }

    expect($childCount)
        ->toBe(3);
});

test('buildComponent handles attributes on nested elements', function () {
    $document = HTMLDocumentDelegator::createEmpty();

    $data = [
        'myComponent' => [
            'structure' => [
                'div' => [
                    'id' => 'root',
                    'children' => [
                        [
                            'p' => [
                                'id' => 'para1',
                                'class' => 'text-primary',
                                'data-custom' => 'value',
                                'text' => 'Content',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ];

    $this->builder->buildComponent($document, $data);

    $htmlElement = $document->documentElement;
    $rootElement = $htmlElement->firstElementChild;
    expect($rootElement->getAttribute('id'))
        ->toBe('root');

    $paragraph = $rootElement->firstElementChild;
    expect($paragraph->getAttribute('id'))
        ->toBe('para1');
    expect($paragraph->getAttribute('class'))
        ->toBe('text-primary');
    expect($paragraph->getAttribute('data-custom'))
        ->toBe('value');
    expect($paragraph->textContent)
        ->toBe('Content');
});
