<?php

use Dom\HTMLElement;
use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\HTMLElementDelegator;
use Html\Delegator\NodeDelegator;
use Html\Element\Block\ListItem;
use Html\Element\Block\UnorderedList;
use Html\Element\Inline\Anchor;
use Html\Element\Inline\Input;
use Html\Element\InlineElement;
use Html\Enum\InputTypeEnum;

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
    expect($anchor->delegated)
        ->toBeInstanceOf(HTMLElement::class);
});

test('constructor htmldocument create element', function () {
    $anchor = $this->document->delegated->createElement('a');
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
    expect($anchor->delegated)
        ->toBeInstanceOf(HTMLElement::class);
    $this->document->append($anchor->delegated);
    $node = $this->document->delegated->getElementsByTagName('a')
        ->item(0);
    expect($node->nodeValue)
        ->toBe($anchor->nodeValue);
    expect($node->tagName)
        ->toBe('A');
});

test('append htmldocument create element', function () {
    $anchor = $this->document->delegated->createElement('a');
    expect($anchor)
        ->toBeInstanceOf(HTMLElement::class);
    $this->document->append($anchor);
    $node = $this->document->getElementsByTagName('a')
        ->item(0);
    expect($node->nodeValue)
        ->toBe($anchor->nodeValue);
    expect($node->tagName)
        ->toBe('A');
    // Accept either NodeDelegator or Anchor (or any HTMLElementDelegator)
    expect($node instanceof NodeDelegator || $node instanceof HTMLElementDelegator)
        ->toBeTrue();
    expect($node->delegated)
        ->toBeInstanceOf(HTMLElement::class);
});

test('appending an element created with its own document to a different document imports the node', function () {
    $ul = UnorderedList::create($this->document);

    $li = new ListItem();
    $li->setTextContent('Item 1');

    $ul->appendChild($li);

    expect($li->getOwnerDocument())
        ->toBe($this->document);
    expect((string) $ul)
        ->toBe('<ul><li>Item 1</li></ul>');
});

test('unordered list can accept list items from the same document', function () {
    $ul = UnorderedList::create($this->document);

    $li1 = ListItem::create($this->document);
    $li1->setTextContent('One');
    $li2 = ListItem::create($this->document);
    $li2->setTextContent('Two');

    $ul->appendChild($li1);
    $ul->appendChild($li2);

    expect($ul->delegated->childNodes->length)->toBe(2);
    expect(strtolower($ul->delegated->firstChild->nodeName))->toBe('li');
    expect((string) $ul)->toBe('<ul><li>One</li><li>Two</li></ul>');
});

test('setting properties via Setter', function () {
    $input = Input::create($this->document);
    $input->setType('text');
    expect($input->getType())
        ->toEqual(InputTypeEnum::TEXT);
    expect($input->getAttribute('type'))
        ->toEqual(InputTypeEnum::TEXT);
});

test('setting properties via direct property access', function () {
    $input = Input::create($this->document);
    $input->type = InputTypeEnum::from('text');
    expect($input->getType())
        ->toBe(InputTypeEnum::TEXT);
    expect($input->getAttribute('type'))
        ->toBe(InputTypeEnum::TEXT);
    expect($input->getAttribute('type')->value)
        ->toBe('text');
});

test('setting properties via direct property access different enum instantiation', function () {
    $input = Input::create($this->document);
    $input->type = InputTypeEnum::TEXT;
    expect($input->getType())
        ->toBe(InputTypeEnum::TEXT);
    expect($input->getAttribute('type'))
        ->toBe(InputTypeEnum::TEXT);
    expect($input->getAttribute('type')->value)
        ->toBe('text');
});

test('check type of ownerDocument', function () {
    $input = Input::create($this->document);
    expect($input->delegated->ownerDocument)
        ->toBeInstanceOf(Dom\HTMLDocument::class);
});
