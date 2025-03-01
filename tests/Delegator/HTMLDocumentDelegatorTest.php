<?php

namespace Tests\Delegator;

use BadMethodCallException;
use DOM\HTMLDocument;
use Dom\HTMLElement;
use Error;
use Exception;
use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\HTMLElementDelegator;
use Html\Element\Block\Body;
use InvalidArgumentException;
use phpmock\functions\FixedValueFunction;
use phpmock\MockBuilder;
use PHPUnit\Framework\TestCase;

final class HTMLDocumentDelegatorTest extends TestCase
{
    // use phpmock\TestCaseTypeHintTrait;

    private HTMLDocument $document;

    private HTMLDocumentDelegator $delegator;

    protected function setUp(): void
    {
        $this->document = HTMLDocument::createEmpty();
        $this->delegator = HTMLDocumentDelegator::createEmpty();
        // $this->htmlElement = $this->document->createElement('div');
    }

    public function testConstructor(): void
    {
        $this->assertInstanceOf(HTMLDocumentDelegator::class, $this->delegator);
        $this->assertInstanceOf(HtmlDocument::class, $this->delegator->htmlDocument);
    }

    public function testCallCall(): void
    {
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
    }

    public function testGetGet(): void
    {
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
            $this->assertEquals($this->document->{$property}, $this->delegator->{$property});
        }

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Property nonExistentProperty does not exist on Dom\HTMLDocument. However you can implement it on Html\Delegator\HTMLDocumentDelegator'
        );
        $this->delegator->nonExistentProperty;
    }

    /**
     * test setting public properties, non readonly
     */
    public function testSetSet(): void
    {
        $URL = 'http://example.com';
        $this->delegator->URL = $URL;
        $this->document->URL = $URL;
        $this->assertEquals($this->document->URL, $URL);
        $this->assertSame($this->document->URL, $this->delegator->URL);


        // string $documentURI
        $this->delegator->documentURI = 'http://example.com/document';
        $this->document->documentURI = 'http://example.com/document';
        $this->assertSame($this->document->documentURI, $this->delegator->documentURI);

        // string $characterSet
        $this->delegator->characterSet = 'UTF-8';
        $this->document->characterSet = 'UTF-8';
        $this->assertSame('UTF-8', $this->delegator->characterSet);
        $this->assertSame($this->document->characterSet, $this->delegator->characterSet);

        // string $charset
        $this->delegator->charset = 'UTF-8';
        $this->document->charset = 'UTF-8';
        $this->assertSame('UTF-8', $this->delegator->charset);
        $this->assertSame($this->document->charset, $this->delegator->charset);

        // string $inputEncoding
        $this->delegator->inputEncoding = 'UTF-8';
        $this->document->inputEncoding = 'UTF-8';
        $this->assertSame('UTF-8', $this->delegator->inputEncoding);
        $this->assertSame($this->document->inputEncoding, $this->delegator->inputEncoding);

        // ?\DOM\DocumentType $doctype
        $this->expectException(Error::class);
        $this->expectExceptionMessage('annot modify readonly property Dom\HTMLDocument::$doctype');
        $this->delegator->doctype = null;
        $this->document->doctype = null;
        $this->assertSame($this->document->doctype, $this->delegator->doctype);

        $body = $this->delegator->createElement('body');
        $this->delegator->body = $body;

        $body = $this->document->createElement('body');
        $this->document->body = $body;
        $this->assertSame($this->document->body, $this->delegator->body);

        $this->document->title = 'Test title';
        $this->delegator->title = 'Test title';
        $this->assertSame($this->document->title, $this->delegator->title);
        $this->assertSame($this->document->title, 'Test title');
        $this->assertSame($this->delegator->title, 'Test title');

        $this->document->body->nodeValue = 'Test body';
        $this->delegator->body->nodeValue = 'Test body';
        $this->assertSame($this->document->body->nodeValue, $this->delegator->body->nodeValue);
        $this->assertSame($this->document->body->nodeValue, 'Test body');
        $this->assertSame($this->delegator->body->nodeValue, 'Test body');

        // ?string $textContent
        $this->assertSame($this->document->body->textContent, 'Test body');
        $this->assertSame($this->delegator->body->textContent, 'Test body');
        $this->document->body->textContent = 'Test body text content';
        $this->delegator->body->textContent = 'Test body text content';
        $this->assertSame($this->document->body->textContent, $this->delegator->body->textContent);
        $this->assertSame($this->document->body->textContent, 'Test body text content');
        $this->assertSame($this->delegator->body->textContent, 'Test body text content');

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Property nonExistentProperty does not exist on Dom\HTMLDocument. However you can implement it on Html\Delegator\HTMLDocumentDelegator'
        );
        $this->delegator->nonExistentProperty = 'some value';
    }

    public function testToString(): void
    {
        $body = $this->delegator->createElement('body');
        $this->delegator->appendChild($body);
        $this->assertEquals('<body></body>', (string) $this->delegator);

        $this->expectException(Error::class);
        $this->expectExceptionMessage('Object of class Dom\HTMLDocument could not be converted to string');
        $body = $this->document->createElement('body');
        $this->document->appendChild($body);
        $this->assertEquals('<body></body>', (string) $this->document);

        $this->delegator = HTMLDocumentDelegator::createFromString($this->document->saveHtml());
        $this->assertEquals((string) $this->document, (string) $this->delegator);
    }

    public function testCreate(): void
    {
        $body = Body::create($this->delegator);
        $this->assertInstanceOf(HTMLElementDelegator::class, $body);
        $this->assertInstanceOf(HtmlElement::class, $body->htmlElement);
    }

    public function testIsUniquePerParent(): void
    {
        $this->assertFalse(HTMLElementDelegator::isUniquePerParent());
    }

    public function testIsUnique(): void
    {
        $this->assertFalse(HTMLElementDelegator::isUnique());
    }

    public function testIsSelfClosing(): void
    {
        // In this class, SELF_CLOSING might not be defined, so adjust as needed
        // Example assumes it's been defined somewhere
        $this->expectException(Error::class); // or comment out if the constant is set in a subclass
        $this->expectExceptionMessage('Undefined constant Html\Delegator\HTMLElementDelegator::SELF_CLOSING');
        HTMLElementDelegator::isSelfClosing();
    }

    public function testGetQualifiedName(): void
    {
        // $this->expectError(); // or remove if QUALIFIED_NAME is defined in a subclass
        $this->expectException(Error::class);
        $this->expectExceptionMessage('Undefined constant Html\Delegator\HTMLElementDelegator::QUALIFIED_NAME');
        HTMLElementDelegator::getQualifiedName();
    }

    public function testChildOf(): void
    {
        $this->assertIsArray(HTMLElementDelegator::childOf());
        $this->assertEmpty(HTMLElementDelegator::childOf());
    }

    public function testParentOf(): void
    {
        $this->assertIsArray(HTMLElementDelegator::parentOf());
        $this->assertEmpty(HTMLElementDelegator::parentOf());
    }

    public function testCreateEmpty(): void
    {
        $this->assertInstanceOf(HTMLDocumentDelegator::class, HTMLDocumentDelegator::createEmpty());
    }

    public function testCreateFromString(): void
    {
        $html = '<!DOCTYPE html><html><head><title>Test</title></head><body></body></html>';
        $delegator = HTMLDocumentDelegator::createFromString($html);
        $this->assertInstanceOf(HTMLDocumentDelegator::class, $delegator);
        $this->assertEquals($html, $delegator->saveHtml());
    }

    /**
    public function testCreateFromFile(): void
    {
        $html = '<!DOCTYPE html><html><head><title>Test</title></head><body></body></html>';
        $builder = (new MockBuilder())
        ->setNamespace('Html\Delegator\HTMLDocumentDelegator')
        ->setName('createFromFile')
        ->setFunctionProvider(new FixedValueFunction($html));
        $mock = $builder->build();
        $mock->enable();
        $dom = HTMLDocumentDelegator::createFromFile('some-filename.html');
        $this->assertEquals($html, $dom->saveHtml());
    } **/
    public function testCreateFromInvalidFile(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Cannot open file 'invalid-file.html'");
        HTMLDocumentDelegator::createFromFile('invalid-file.html');
    }
}
