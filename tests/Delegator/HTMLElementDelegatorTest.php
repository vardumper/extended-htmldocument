<?php

use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\HTMLElementDelegator;
use Html\Element\Block\Body;
use Html\Element\Block\HTML;
use Html\Element\Inline\Anchor;
use Html\Element\Void\Head;
use Html\Enum\ContentEditableEnum;
use Html\Enum\RelEnum;
use Html\Enum\TargetEnum;

uses(\Html\Trait\GlobalAttributesTrait::class);

beforeEach(function () {
    $this->document = HTMLDocumentDelegator::createEmpty();
    $this->delegator = Anchor::create($this->document);
});

test('constructor', function () {
    expect($this->delegator)->toBeInstanceOf(HTMLElementDelegator::class);
});

test('call get global attribute', function () {
    $this->delegator->setAttribute('id', 'test');
    expect($this->delegator->getAttribute('id'))
        ->toEqual('test');
});

test('call get element attribute', function () {
    $this->delegator->setAttribute('href', 'https://example.com');

    // var_dump((string) $this->delegator);
    expect($this->delegator->getAttribute('href'))
        ->toEqual('https://example.com');
});

test('get', function () {
    $this->delegator->setAttribute('href', 'https://example.com');

    // var_dump((string) $this->delegator);
    expect($this->delegator->href)
        ->toEqual('https://example.com');
    expect($this->delegator->htmlElement->getAttribute('href'))
        ->toEqual('https://example.com');
});

test('get global id', function () {
    $this->delegator->setAttribute('id', 'unique-id');

    // var_dump((string) $this->delegator);
    expect($this->delegator->id)
        ->toEqual('unique-id');
});

test('get global class name', function () {
    $this->delegator->setAttribute('class', 'my-class');

    // var_dump((string) $this->delegator);
    expect($this->delegator->className)
        ->toEqual('my-class');
    expect($this->delegator->getAttribute('class'))
        ->toEqual('my-class');
    expect($this->delegator->htmlElement->getAttribute('class'))
        ->toEqual('my-class');
    expect($this->delegator->htmlElement->className)
        ->toEqual('my-class');
});

test('set global class name', function () {
    $this->delegator->className = 'my-new-class';
    expect($this->delegator->className)
        ->toEqual('my-new-class');
    expect($this->delegator->getAttribute('class'))
        ->toEqual('my-new-class');
    expect($this->delegator->htmlElement->getAttribute('class'))
        ->toEqual('my-new-class');
    expect($this->delegator->htmlElement->className)
        ->toEqual('my-new-class');
});

test('set global attribute set attribute', function () {
    $this->delegator->setAttribute('contenteditable', ContentEditableEnum::TRUE);
    expect($this->delegator->getContentEditable())
        ->toEqual(ContentEditableEnum::TRUE);
    expect($this->delegator->getContentEditable()->value)
        ->toEqual('true');
    expect($this->delegator->getAttribute('contenteditable'))
        ->toEqual(ContentEditableEnum::TRUE);
    expect($this->delegator->htmlElement->getAttribute('contenteditable'))
        ->toEqual('true');
});

test('set global attribute directly', function () {
    // __set is not used, property exists, the contenteditable attribute is not set
    $this->delegator->contenteditable = ContentEditableEnum::TRUE;

    // $this->{ContentEditableEnum::getQualifiedName()} = ContentEditableEnum::TRUE;
    expect($this->delegator->getContentEditable())
        ->toEqual(ContentEditableEnum::TRUE);
    expect($this->delegator->getContentEditable()->value)
        ->toEqual('true');
    expect($this->delegator->getAttribute('contenteditable'))
        ->toEqual(ContentEditableEnum::TRUE);
    expect($this->delegator->contenteditable)
        ->toEqual(ContentEditableEnum::TRUE);
    expect($this->delegator->htmlElement->getAttribute('contenteditable'))
        ->toEqual('true');
});

test('set', function () {
    $this->delegator->href = 'https://different.com';
    expect($this->delegator->href)
        ->toEqual('https://different.com');
});

test('set unexpected type', function () {
    $this->delegator->href = 1;
    expect($this->delegator->href)
        ->toEqual(1);
});

test('set global class', function () {
    $this->delegator->class = 'new-classname';
    expect($this->delegator->className)
        ->toEqual('new-classname');
    expect($this->delegator->getAttribute('class'))
        ->toEqual('new-classname');
    expect($this->delegator->htmlElement->className)
        ->toEqual('new-classname');
    expect($this->delegator->htmlElement->getAttribute('class'))
        ->toEqual('new-classname');
});

test('set enum', function () {
    $this->delegator->setRel(RelEnum::NOFOLLOW);
    expect($this->delegator->rel)
        ->toEqual(RelEnum::NOFOLLOW);
    expect($this->delegator->getRel())
        ->toEqual(RelEnum::NOFOLLOW);
    expect($this->delegator->htmlElement->getAttribute('rel'))
        ->toEqual('nofollow');
});

test('set enum directly', function () {
    $this->delegator->rel = RelEnum::NOFOLLOW;
    expect($this->delegator->rel)
        ->toEqual(RelEnum::NOFOLLOW);
    expect($this->delegator->getRel())
        ->toEqual(RelEnum::NOFOLLOW);
    expect($this->delegator->htmlElement->getAttribute('rel'))
        ->toEqual('nofollow');
});

test('set attribute with invalid value', function () {
    $this->expectException(TypeError::class);
    $this->expectExceptionMessage('Value for nonexistant must be a string, boolean or a BackedEnum');
    $this->delegator->setAttribute('nonexistant', [
        'foo' => 'bar',
    ]);
});

test('set enum set attributes', function () {
    $this->delegator->setAttributes([
        'rel' => RelEnum::NOFOLLOW,
    ]);
    expect($this->delegator->rel)
        ->toEqual(RelEnum::NOFOLLOW);
    expect($this->delegator->htmlElement->getAttribute('rel'))
        ->toEqual('nofollow');
});

test('set enum set attribute', function () {
    $this->delegator->setAttribute('rel', RelEnum::NOFOLLOW);
    expect($this->delegator->rel)
        ->toEqual(RelEnum::NOFOLLOW);
    expect($this->delegator->htmlElement->getAttribute('rel'))
        ->toEqual('nofollow');
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
    $this->delegator->nonExistentProperty = 'value';
    expect($this->delegator->htmlElement->getAttribute('nonexistentproperty'))
        ->toEqual('value');
    expect($this->delegator->getAttribute('nonexistentproperty'))
        ->toEqual('value');

    $this->expectException(InvalidArgumentException::class);
    $this->delegator->nonExistentProperty;
});

test('to string', function () {
    $this->delegator->setAttribute('id', 'test');
    expect((string) $this->delegator)
        ->toEqual('<a id="test"></a>');
});

test('set attributes', function () {
    $this->delegator->setAttributes([
        'id' => 'test',
        'class' => 'example',
        'href' => 'https://example.com',
    ]);

    // var_dump((string) $this->delegator);exit;
    expect($this->delegator->getAttribute('id'))
        ->toEqual('test');
    expect($this->delegator->getAttribute('class'))
        ->toEqual('example');
    expect($this->delegator->htmlElement->getAttribute('href'))
        ->toEqual('https://example.com');
    // Assert the href attribute
    expect($this->delegator->href)
        ->toEqual('https://example.com');
    // Assert the href attribute
});

test('set attributes enum', function () {
    $this->delegator->setAttributes([
        'rel' => RelEnum::NOFOLLOW,
    ]);
    expect($this->delegator->htmlElement->getAttribute('rel'))
        ->toEqual('nofollow');
    expect($this->delegator->rel)
        ->toEqual(RelEnum::NOFOLLOW);
});

test('set attributes enum value', function () {
    $this->delegator->setAttributes([
        'rel' => 'nofollow',
        'target' => '_blank',
    ]);
    expect($this->delegator->htmlElement->getAttribute('rel'))
        ->toEqual('nofollow');
    expect($this->delegator->getAttribute('rel'))
        ->toEqual(RelEnum::NOFOLLOW);
    expect($this->delegator->htmlElement->getAttribute('target'))
        ->toEqual('_blank');
    expect($this->delegator->getAttribute('target'))
        ->toEqual(TargetEnum::BLANK);
    expect($this->delegator->rel)
        ->toEqual(RelEnum::NOFOLLOW);
    expect($this->delegator->target)
        ->toEqual(TargetEnum::BLANK);
});

test('set id', function () {
    $this->delegator->setId('test');
    expect($this->delegator->id)
        ->toEqual('test');
    expect($this->delegator->htmlElement->getAttribute('id'))
        ->toEqual('test');
});

test('get id', function () {
    $this->delegator->setId('test');
    expect($this->delegator->getId())
        ->toEqual('test');
});

test('set class name', function () {
    $this->delegator->setClassName('example-class');
    expect($this->delegator->className)
        ->toEqual('example-class');
    expect($this->delegator->htmlElement->getAttribute('class'))
        ->toEqual('example-class');
});

test('get class name', function () {
    $this->delegator->setClassName('example-class');
    expect($this->delegator->getClassName())
        ->toEqual('example-class');
});

test('get class', function () {
    $this->delegator->setClassName('example-class');
    expect($this->delegator->getClass())
        ->toEqual('example-class');
});

test('parent of', function () {
    // $this->delegator->setClassName('example-class');
    $element = HTML::create($this->document);
    expect($element->parentOf())
        ->toEqual([Body::class, Head::class]);
});

test('child of', function () {
    $element = Body::create($this->document);
    expect($element->childOf())
        ->toEqual([HTML::class]);
});
