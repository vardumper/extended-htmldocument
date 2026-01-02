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
use Html\TemplateGenerator\HTMLGenerator;

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
    expect($this->delegator->delegated->getAttribute('href'))
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
    expect($this->delegator->delegated->getAttribute('class'))
        ->toEqual('my-class');
    expect($this->delegator->delegated->className)
        ->toEqual('my-class');
});

test('set global class name', function () {
    $this->delegator->className = 'my-new-class';
    expect($this->delegator->className)
        ->toEqual('my-new-class');
    expect($this->delegator->getAttribute('class'))
        ->toEqual('my-new-class');
    expect($this->delegator->delegated->getAttribute('class'))
        ->toEqual('my-new-class');
    expect($this->delegator->delegated->className)
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
    expect($this->delegator->delegated->getAttribute('contenteditable'))
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
    expect($this->delegator->delegated->getAttribute('contenteditable'))
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
    expect($this->delegator->delegated->className)
        ->toEqual('new-classname');
    expect($this->delegator->delegated->getAttribute('class'))
        ->toEqual('new-classname');
});

test('set enum', function () {
    $this->delegator->setRel(RelEnum::NOFOLLOW);
    expect($this->delegator->rel)
        ->toEqual(RelEnum::NOFOLLOW);
    expect($this->delegator->getRel())
        ->toEqual(RelEnum::NOFOLLOW);
    expect($this->delegator->delegated->getAttribute('rel'))
        ->toEqual('nofollow');
});

test('set enum directly', function () {
    $this->delegator->rel = RelEnum::NOFOLLOW;
    expect($this->delegator->rel)
        ->toEqual(RelEnum::NOFOLLOW);
    expect($this->delegator->getRel())
        ->toEqual(RelEnum::NOFOLLOW);
    expect($this->delegator->delegated->getAttribute('rel'))
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
    expect($this->delegator->delegated->getAttribute('rel'))
        ->toEqual('nofollow');
});

test('set enum set attribute', function () {
    $this->delegator->setAttribute('rel', RelEnum::NOFOLLOW);
    expect($this->delegator->rel)
        ->toEqual(RelEnum::NOFOLLOW);
    expect($this->delegator->delegated->getAttribute('rel'))
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
    expect($this->delegator->delegated->getAttribute('nonexistentproperty'))
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
    expect($this->delegator->delegated->getAttribute('href'))
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
    expect($this->delegator->delegated->getAttribute('rel'))
        ->toEqual('nofollow');
    expect($this->delegator->rel)
        ->toEqual(RelEnum::NOFOLLOW);
});

test('set attributes enum value', function () {
    $this->delegator->setAttributes([
        'rel' => 'nofollow',
        'target' => '_blank',
    ]);
    expect($this->delegator->delegated->getAttribute('rel'))
        ->toEqual('nofollow');
    expect($this->delegator->getAttribute('rel'))
        ->toEqual(RelEnum::NOFOLLOW);
    expect($this->delegator->delegated->getAttribute('target'))
        ->toEqual('_blank');
    expect($this->delegator->getAttribute('target'))
        ->toEqual(TargetEnum::BLANK);
    expect($this->delegator->rel)
        ->toEqual(RelEnum::NOFOLLOW);
    expect($this->delegator->target)
        ->toEqual(TargetEnum::BLANK);
});

test('set union type string setter', function () {
    $this->delegator->setTarget('framename');
    expect($this->delegator->target)
        ->toBe('framename');
    expect($this->delegator->getTarget())
        ->toBe('framename');
    expect($this->delegator->delegated->getAttribute('target'))
        ->toEqual('framename');
});

test('set id', function () {
    $this->delegator->setId('test');
    expect($this->delegator->id)
        ->toEqual('test');
    expect($this->delegator->delegated->getAttribute('id'))
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
    expect($this->delegator->delegated->getAttribute('class'))
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

test('test set native public propeties with setter', function () {
    $element = Body::create($this->document);
    $element->setTextContent('test');
    expect($element->textContent)
        ->toEqual('test');

    $element->setInnerHTML('<span>Hello</span>');
    expect($element->getInnerHTML())
        ->toEqual('<span>Hello</span>');

    expect($element->innerHTML)
        ->toEqual('<span>Hello</span>');

    expect((string) $element)
        ->toEqual('<body><span>Hello</span></body>');
});

test('test get text content', function () {
    // $this->delegator->getTextContent();
    expect($this->delegator->getTextContent())
        ->toEqual('');

    $this->delegator->setTextContent('test');
    expect($this->delegator->getTextContent())
        ->toEqual('test');
});

test('test get/set substitutedNodeValue', function () {
    // $this->delegator->getSubstitutedNodeValue();
    expect($this->delegator->getSubstitutedNodeValue())
        ->toEqual('');

    $this->delegator->setSubstitutedNodeValue('test');
    expect($this->delegator->getSubstitutedNodeValue())
        ->toEqual('test');
});


test('set renderer test', function () {
    $renderer = new HTMLGenerator();

    $this->delegator->setRenderer($renderer);
    expect($this->delegator->renderer)
        ->toBe($renderer);
});

test('append child', function () {
    $child = $this->document->createElement('span');
    $this->delegator->appendChild($child);
    expect($this->delegator->delegated->childNodes->length)
        ->toBe(1);
    expect($this->delegator->delegated->firstChild)
        ->toBe($child->delegated);
});

test('remove child', function () {
    $child = Anchor::create($this->document);
    $this->delegator->appendChild($child);
    expect($this->delegator->delegated->childNodes->length)
        ->toBe(1);

    $this->delegator->removeChild($child);
    expect($this->delegator->delegated->childNodes->length)
        ->toBe(0);
});

test('replace child', function () {
    $child1 = Anchor::create($this->document);
    $child1->setTextContent('Original');
    $child2 = Anchor::create($this->document);
    $child2->setTextContent('Replacement');

    $this->delegator->appendChild($child1);
    expect($this->delegator->delegated->childNodes->length)
        ->toBe(1);
    expect($this->delegator->delegated->firstChild->textContent)
        ->toBe('Original');

    $this->delegator->replaceChild($child2, $child1);
    expect($this->delegator->delegated->childNodes->length)
        ->toBe(1);
    expect($this->delegator->delegated->firstChild->textContent)
        ->toBe('Replacement');
});

test('get owner document', function () {
    expect($this->delegator->getOwnerDocument())
        ->toBe($this->document);
});

test('constructor with invalid renderer', function () {
    $mockRenderer = new class() implements \Html\Interface\TemplateGeneratorInterface {
        public function getExtension(): string
        {
            return 'html';
        }

        public function getNamePattern(): string
        {
            return '*.html';
        }

        public function canRenderElements(): bool
        {
            return false;
        }

        public function canRenderDocuments(): bool
        {
            return true;
        }

        public function isTemplated(): bool
        {
            return false;
        }

        public function render($elementOrDocument): ?string
        {
            return '';
        }
    };

    $element = $this->document->createElement('div');

    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('The given renderer cannot render elements.');

    new HTMLElementDelegator($element->delegated, $mockRenderer);
});

test('set with union type enum handling', function () {
    // This test should trigger the union type enum handling in __set
    // We need a property that has a union type with BackedEnum
    // The 'target' property on Anchor has union type: TargetEnum|string
    $this->delegator->target = '_blank'; // This should trigger the union type handling
    expect($this->delegator->target)
        ->toEqual(TargetEnum::BLANK);
});

test('set attribute with union type enum handling', function () {
    // This should trigger the union type handling in setAttribute
    $this->delegator->setAttribute('rel', 'nofollow');
    expect($this->delegator->rel)
        ->toEqual(RelEnum::NOFOLLOW);
});

test('append child throws exception for different document', function () {
    $otherDocument = HTMLDocumentDelegator::createEmpty();
    $child = Anchor::create($otherDocument);

    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('The child element must belong to the same document as the parent element.');

    $this->delegator->appendChild($child);
});

test('remove child throws exception for different document', function () {
    $otherDocument = HTMLDocumentDelegator::createEmpty();
    $child = Anchor::create($otherDocument);

    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('The child element must belong to the same document as the parent element.');

    $this->delegator->removeChild($child);
});

test('replace child throws exception for different document node', function () {
    $otherDocument = HTMLDocumentDelegator::createEmpty();
    $node = Anchor::create($otherDocument);
    $child = Anchor::create($this->document);

    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('The node element must belong to the same document as the parent element.');

    $this->delegator->replaceChild($node, $child);
});

test('replace child throws exception for different document child', function () {
    $otherDocument = HTMLDocumentDelegator::createEmpty();
    $node = Anchor::create($this->document);
    $child = Anchor::create($otherDocument);

    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('The child element must belong to the same document as the parent element.');

    $this->delegator->replaceChild($node, $child);
});
