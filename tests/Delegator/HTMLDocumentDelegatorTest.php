<?php

use DOM\HTMLDocument;
use Dom\HTMLElement;
use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\HTMLElementDelegator;
use Html\Delegator\NodeListDelegator;
use Html\Element\Block\Body;
use Html\Element\Block\Division;
use Html\Element\Block\TableData;
use Html\Element\Block\TableRow;
use Html\Element\Inline\Anchor;
use Html\Enum\TargetEnum;
use Html\TemplateGenerator\HTMLGenerator;

// uses(\Html\Trait\GlobalAttributesTrait::class);

beforeEach(function () {
    $this->document = HTMLDocument::createEmpty();
    $this->delegator = HTMLDocumentDelegator::createEmpty();
});

test('constructor', function () {
    expect($this->delegator)->toBeInstanceOf(HTMLDocumentDelegator::class);
    expect($this->delegator->delegated)
        ->toBeInstanceOf(HtmlDocument::class);
});

test('call', function () {
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

test('get', function () {
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

test('set', function () {
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
        ->toEqual('<html><body></body></html>');

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
    expect($body->delegated)
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

test('create empty accepts encoding', function () {
    $delegator = HTMLDocumentDelegator::createEmpty('ISO-8859-1');
    expect($delegator)
        ->toBeInstanceOf(HTMLDocumentDelegator::class);
    expect($delegator->delegated->characterSet)
        ->toBe('ISO-8859-1');
});

test('create from string', function () {
    $html = '<!DOCTYPE html><html><head><title>Test</title></head><body></body></html>';
    $delegator = HTMLDocumentDelegator::createFromString($html);
    expect($delegator)
        ->toBeInstanceOf(HTMLDocumentDelegator::class);
    expect($delegator->saveHtml())
        ->toEqual($html);
});

test('create from string accepts options and overrideEncoding', function () {
    $html = '<div>Hi</div>';
    $options = \LIBXML_NOERROR | \LIBXML_HTML_NOIMPLIED;

    $expected = HTMLDocument::createFromString($html, $options, 'UTF-8')->saveHTML();
    $delegator = HTMLDocumentDelegator::createFromString($html, $options, 'UTF-8');

    expect((string) $delegator)
        ->toEqual($expected);
    expect((string) $delegator)
        ->toEqual('<div>Hi</div>');
});

test('create from file', function () {
    file_put_contents('file.html', '<!doctype html><html><body>Hello World</body></html>');
    expect(file_exists('file.html'))
        ->toBeTrue();
    $delegator = HTMLDocumentDelegator::createFromFile('file.html');
    expect($delegator)
        ->toBeInstanceOf(HTMLDocumentDelegator::class);
    unlink('file.html');
});

test('create from file accepts options and overrideEncoding', function () {
    $path = 'file.html';
    file_put_contents($path, '<div>Hi</div>');
    $options = \LIBXML_NOERROR | \LIBXML_HTML_NOIMPLIED;

    $expected = HTMLDocument::createFromFile($path, $options, 'UTF-8')->saveHTML();
    $delegator = HTMLDocumentDelegator::createFromFile($path, $options, 'UTF-8');

    unlink($path);
    expect((string) $delegator)
        ->toEqual($expected);
    expect((string) $delegator)
        ->toEqual('<div>Hi</div>');
});

test('get elements by tag name', function () {
    $html = '<!DOCTYPE html><html><head><title>Test</title></head><body><div><p>Test</p></div></body></html>';
    $delegator = HTMLDocumentDelegator::createFromString($html);
    expect($delegator->getElementsByTagName('div'))
        ->toBeInstanceOf(NodeListDelegator::class);
    expect(\count($delegator->getElementsByTagName('div')))
        ->toEqual(1);
    expect(\count($delegator->getElementsByTagName('p')))
        ->toEqual(1);
    expect(\count($delegator->getElementsByTagName('span')))
        ->toEqual(0);
});

test('set renderer test', function () {
    $renderer = new HTMLGenerator();

    $this->delegator->setRenderer($renderer);
    expect($this->delegator->renderer)
        ->toBe($renderer);
});

test('can querySelector', function () {
    $html = '<!DOCTYPE html><html><head><title>Test</title></head><body><div class="test-class"><p>Test</p></div></body></html>';
    $delegator = HTMLDocumentDelegator::createFromString($html);

    $element = $delegator->querySelector('.test-class');
    expect($element)
        ->toBeInstanceOf(HTMLElementDelegator::class);
    expect($element->tagName)
        ->toEqual('DIV');

    $nonExistentElement = $delegator->querySelector('.non-existent-class');
    expect($nonExistentElement)
        ->toBeNull();
});

test('can use querySelected element', function () {
    $html = '<!DOCTYPE html><html><head><title>Test</title></head><body><a class="test-class">Link</a></body></html>';
    $delegator = HTMLDocumentDelegator::createFromString($html);

    $element = $delegator->querySelector('.test-class');
    $element->setTarget('_blank');
    $element->setTextContent('New Link Text');
    expect($element)
        ->toBeInstanceOf(HTMLElementDelegator::class);
    expect($element)
        ->toBeInstanceOf(Anchor::class);
    expect($element->getTarget())
        ->toBe(TargetEnum::BLANK);
    expect($element->getTextContent())
        ->toBe('New Link Text');
});


test('can querySelectorAll', function () {
    $html = '<!DOCTYPE html><html><head><title>Test</title></head><body><div class="test-class"><p class="test-class">Test</p></div></body></html>';
    $delegator = HTMLDocumentDelegator::createFromString($html);

    $elements = $delegator->querySelectorAll('.test-class');
    expect($elements->length)
        ->toBe(2);
    expect($elements)
        ->toBeInstanceOf(NodeListDelegator::class);
    expect($elements->item(0)->tagName)
        ->toEqual('DIV');

    $nonExistentElement = $delegator->querySelector('.non-existent-class');
    expect($nonExistentElement)
        ->toBeNull();
});

test('can use querySelectorAll element', function () {
    $html = '<!DOCTYPE html><html><head><title>Test</title></head><body><div class="test-class"><p class="test-class">Test</p></div></body></html>';
    $delegator = HTMLDocumentDelegator::createFromString($html);

    $elements = $delegator->querySelectorAll('.test-class');
    expect($elements->item(1)->tagName)
        ->toBe('P');
    expect($elements->item(0)->tagName)
        ->toBe('DIV');
    /** @var \Html\Element\Division $div */
    $div = $elements->item(0);
    expect($div)
        ->toBeInstanceOf(Division::class);
    $elements->item(1)
        ->setTextContent('Updated Paragraph Text');
    expect($elements->item(1)->getTextContent())
        ->toBe('Updated Paragraph Text');
});

test('querySelectorAll returns null for non-existent selector', function () {
    $html = '<!DOCTYPE html><html><head><title>Test</title></head><body><div></div></body></html>';
    $delegator = HTMLDocumentDelegator::createFromString($html);

    $elements = $delegator->querySelectorAll('.non-existent-class');
    expect($elements)
        ->toBeInstanceOf(NodeListDelegator::class);
    expect(count($elements))
        ->toBe(0);
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

    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('The given renderer cannot render elements.');

    new HTMLDocumentDelegator($this->document, $mockRenderer);
});

test('create text node', function () {
    $textNode = $this->delegator->createTextNode('Hello World');
    expect($textNode)
        ->toBeInstanceOf(\Html\Delegator\TextDelegator::class);
    expect($textNode->getText()->data)
        ->toBe('Hello World');
});

test('append child', function () {
    $element = $this->delegator->createElement('div');
    $this->delegator->appendChild($element);
    expect($this->delegator->documentElement->childNodes->length)
        ->toBe(1);
    expect($this->delegator->documentElement->firstChild)
        ->toBe($element->delegated);
});

test('remove child', function () {
    $element = $this->delegator->createElement('div');
    $this->delegator->appendChild($element);
    expect($this->delegator->documentElement->childNodes->length)
        ->toBe(1);

    $this->delegator->removeChild($element);
    expect($this->delegator->documentElement->childNodes->length)
        ->toBe(0);
});
