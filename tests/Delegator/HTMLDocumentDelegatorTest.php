<?php

use DOM\HTMLDocument;
use Dom\HTMLElement;
use Html\Delegator\DOMNodeListDelegator;
use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\HTMLElementDelegator;
use Html\Element\Block\Body;
use Html\Element\Block\TableData;
use Html\Element\Block\TableRow;

beforeEach(function () {
    $this->document = HTMLDocument::createEmpty();
    $this->delegator = HTMLDocumentDelegator::createEmpty();
});

test('constructor', function () {
    expect($this->delegator)->toBeInstanceOf(HTMLDocumentDelegator::class);
    expect($this->delegator->htmlDocument)
        ->toBeInstanceOf(HtmlDocument::class);
});

test('call call', function () {
    $this->expectOutputString($this->document->saveXml());
    $this->delegator->saveXml();

    $this->expectOutputString($this->document->saveHtml());
    $this->delegator->saveHtml();

    // why does this fail?
    // $this->delegator->debugGetTemplateCount();
    // $this->expectOutputString($this->document->debugGetTemplateCount());
    $this->expectException(BadMethodCallException::class);
    $this->expectExceptionMessage(
        'Method nonExistentMethod does not exist on Dom\HTMLDocument. However you can implement it on Html\Delegator\HTMLDocumentDelegator'
    );
    $this->delegator->nonExistentMethod();
});

test('get get', function () {
    $this->document = HTMLDocument::createEmpty();
    $this->delegator = HTMLDocumentDelegator::createEmpty();
    $properties = [
        'URL',
        'documentURI',
        'characterSet',
        'charset',
        'inputEncoding',
        'doctype',
        'documentElement',
        'firstElementChild',
        'lastElementChild',
        'childElementCount',
        'body',
        'head',
        'title',
        'nodeType',
        'nodeName',
        'baseURI',
        'isConnected',
        'ownerDocument',
        'parentNode',
        'parentElement',
        'childNodes',
        'firstChild',
        'lastChild',
        'previousSibling',
        'nextSibling',
        'nodeValue',
        'textContent',
    ];

    foreach ($properties as $property) {
        expect($this->delegator->{$property})->toEqual($this->document->{$property});
    }

    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage(
        'Property nonExistentProperty does not exist on Dom\HTMLDocument. However you can implement it on Html\Delegator\HTMLDocumentDelegator'
    );
    $this->delegator->nonExistentProperty;
});

test('set set', function () {
    $URL = 'http://example.com';
    $this->delegator->URL = $URL;
    $this->document->URL = $URL;
    expect($URL)
        ->toEqual($this->document->URL);
    expect($this->delegator->URL)
        ->toBe($this->document->URL);

    // string $documentURI
    $this->delegator->documentURI = 'http://example.com/document';
    $this->document->documentURI = 'http://example.com/document';
    expect($this->delegator->documentURI)
        ->toBe($this->document->documentURI);

    // string $characterSet
    $this->delegator->characterSet = 'UTF-8';
    $this->document->characterSet = 'UTF-8';
    expect($this->delegator->characterSet)
        ->toBe('UTF-8');
    expect($this->delegator->characterSet)
        ->toBe($this->document->characterSet);

    // string $charset
    $this->delegator->charset = 'UTF-8';
    $this->document->charset = 'UTF-8';
    expect($this->delegator->charset)
        ->toBe('UTF-8');
    expect($this->delegator->charset)
        ->toBe($this->document->charset);

    // string $inputEncoding
    $this->delegator->inputEncoding = 'UTF-8';
    $this->document->inputEncoding = 'UTF-8';
    expect($this->delegator->inputEncoding)
        ->toBe('UTF-8');
    expect($this->delegator->inputEncoding)
        ->toBe($this->document->inputEncoding);

    // ?\DOM\DocumentType $doctype
    $this->expectException(Error::class);
    $this->expectExceptionMessage('annot modify readonly property Dom\HTMLDocument::$doctype');
    $this->delegator->doctype = null;
    $this->document->doctype = null;
    expect($this->delegator->doctype)
        ->toBe($this->document->doctype);

    $body = $this->delegator->createElement('body');
    $this->delegator->body = $body;

    $body = $this->document->createElement('body');
    $this->document->body = $body;
    expect($this->delegator->body)
        ->toBe($this->document->body);

    $this->document->title = 'Test title';
    $this->delegator->title = 'Test title';
    expect($this->delegator->title)
        ->toBe($this->document->title);
    expect('Test title')
        ->toBe($this->document->title);
    expect('Test title')
        ->toBe($this->delegator->title);

    $this->document->body->nodeValue = 'Test body';
    $this->delegator->body->nodeValue = 'Test body';
    expect($this->delegator->body->nodeValue)
        ->toBe($this->document->body->nodeValue);
    expect('Test body')
        ->toBe($this->document->body->nodeValue);
    expect('Test body')
        ->toBe($this->delegator->body->nodeValue);

    // ?string $textContent
    expect('Test body')
        ->toBe($this->document->body->textContent);
    expect('Test body')
        ->toBe($this->delegator->body->textContent);
    $this->document->body->textContent = 'Test body text content';
    $this->delegator->body->textContent = 'Test body text content';
    expect($this->delegator->body->textContent)
        ->toBe($this->document->body->textContent);
    expect('Test body text content')
        ->toBe($this->document->body->textContent);
    expect('Test body text content')
        ->toBe($this->delegator->body->textContent);
});

test('set inexistent property', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage(
        'Property nonExistentProperty does not exist on Dom\HTMLDocument. However you can implement it on Html\Delegator\HTMLDocumentDelegator'
    );
    $this->delegator->nonExistentProperty = 'value';
});

test('to string', function () {
    $body = $this->delegator->createElement('body');
    $this->delegator->appendChild($body);
    expect((string) $this->delegator)
        ->toEqual('<body></body>');

    $this->expectException(Error::class);
    $this->expectExceptionMessage('Object of class Dom\HTMLDocument could not be converted to string');
    $body = $this->document->createElement('body');
    $this->document->appendChild($body);
    expect((string) $this->document)
        ->toEqual('<body></body>');

    $this->delegator = HTMLDocumentDelegator::createFromString($this->document->saveHtml());
    expect((string) $this->delegator)
        ->toEqual((string) $this->document);
});

test('create', function () {
    $body = Body::create($this->delegator);
    expect($body)
        ->toBeInstanceOf(HTMLElementDelegator::class);
    expect($body->htmlElement)
        ->toBeInstanceOf(HtmlElement::class);
});

test('is unique per parent', function () {
    $element = Body::create($this->delegator);

    // $element = $this->delegator->createElement('body');
    expect($element::isUniquePerParent())->toBeTrue();
});

test('is unique', function () {
    $element = Body::create($this->delegator);

    // $element = $this->delegator->createElement('body');
    // var_dump(\get_class_vars(get_class($body)));
    expect($element::isUnique())->toBeTrue();
});

test('is self closing', function () {
    // In this class, SELF_CLOSING might not be defined, so adjust as needed
    // Example assumes it's been defined somewhere
    $this->expectException(Error::class);
    // or comment out if the constant is set in a subclass
    $this->expectExceptionMessage('Undefined constant Html\Delegator\HTMLElementDelegator::SELF_CLOSING');
    $element = $this->delegator->createElement('div');
    expect($element::isSelfClosing())->toBeFalse();

    $element = $this->delegator->createElement('br');
    expect($element::isSelfClosing())->toBeTrue();
});

test('get qualified name', function () {
    $element = $this->delegator->createElement('br');

    // $this->expectError(); // or remove if QUALIFIED_NAME is defined in a subclass
    $this->expectException(Error::class);
    $this->expectExceptionMessage('Undefined constant Html\Delegator\HTMLElementDelegator::QUALIFIED_NAME');
    expect($element::getQualifiedName())->toEqual('br');
});

test('child of', function () {
    $element = TableData::create($this->delegator);

    // $element = $this->delegator->createElement('td');
    expect($element::childOf())->toBeArray();
    expect($element::childOf())->toContain(TableRow::class);
});

test('parent of', function () {
    $element = $this->delegator->createElement('td');
    expect($element::parentOf())->toBeArray();
    expect($element::parentOf())->toBeEmpty();
});

test('create empty', function () {
    expect(HTMLDocumentDelegator::createEmpty())->toBeInstanceOf(HTMLDocumentDelegator::class);
});

test('create from string', function () {
    $html = '<!DOCTYPE html><html><head><title>Test</title></head><body></body></html>';
    $delegator = HTMLDocumentDelegator::createFromString($html);
    expect($delegator)
        ->toBeInstanceOf(HTMLDocumentDelegator::class);
    expect($delegator->saveHtml())
        ->toEqual($html);
});

test('create from invalid file', function () {
    expect(file_exists('invalid-file.html'))
        ->toBeFalse();
    $this->expectException(Exception::class);
    $this->expectExceptionMessage("Cannot open file 'invalid-file.html'");
    HTMLDocumentDelegator::createFromFile('invalid-file.html');
});

test('get elements by tag name', function () {
    $html = '<!DOCTYPE html><html><head><title>Test</title></head><body><div><p>Test</p></div></body></html>';
    $delegator = HTMLDocumentDelegator::createFromString($html);
    expect($delegator->getElementsByTagName('div'))
        ->toBeInstanceOf(DOMNodeListDelegator::class);
    expect($delegator->getElementsByTagName('div')->count())
        ->toEqual(1);
    expect($delegator->getElementsByTagName('p')->count())->toEqual(1);
    expect($delegator->getElementsByTagName('span')->count())->toEqual(0);
});
