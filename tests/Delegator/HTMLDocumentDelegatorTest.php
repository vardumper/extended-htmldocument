<?php

namespace Tests\Delegator;

use BadMethodCallException;
use DOM\HTMLDocument;
use Dom\HTMLElement;
use Error;
use Exception;
use Html\Delegator\DOMNodeListDelegator;
use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\HTMLElementDelegator;
use Html\Element\Block\Body;
use Html\Element\Block\TableData;
use Html\Element\Block\TableRow;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

final class HTMLDocumentDelegatorTest extends TestCase
{
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
    }

    public function testSetInexistentProperty(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Property nonExistentProperty does not exist on Dom\HTMLDocument. However you can implement it on Html\Delegator\HTMLDocumentDelegator'
        );
        $this->delegator->nonExistentProperty = 'value';
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
        $element = Body::create($this->delegator);
        // $element = $this->delegator->createElement('body');
        $this->assertTrue($element::isUniquePerParent());
    }

    public function testIsUnique(): void
    {
        $element = Body::create($this->delegator);
        // $element = $this->delegator->createElement('body');
        // var_dump(\get_class_vars(get_class($body)));
        $this->assertTrue($element::isUnique());
    }

    public function testIsSelfClosing(): void
    {
        // In this class, SELF_CLOSING might not be defined, so adjust as needed
        // Example assumes it's been defined somewhere
        $this->expectException(Error::class); // or comment out if the constant is set in a subclass
        $this->expectExceptionMessage('Undefined constant Html\Delegator\HTMLElementDelegator::SELF_CLOSING');
        $element = $this->delegator->createElement('div');
        $this->assertFalse($element::isSelfClosing());

        $element = $this->delegator->createElement('br');
        $this->assertTrue($element::isSelfClosing());
    }

    public function testGetQualifiedName(): void
    {
        $element = $this->delegator->createElement('br');
        // $this->expectError(); // or remove if QUALIFIED_NAME is defined in a subclass
        $this->expectException(Error::class);
        $this->expectExceptionMessage('Undefined constant Html\Delegator\HTMLElementDelegator::QUALIFIED_NAME');
        $this->assertEquals('br', $element::getQualifiedName());
    }

    public function testChildOf(): void
    {
        $element = TableData::create($this->delegator);
        // $element = $this->delegator->createElement('td');
        $this->assertIsArray($element::childOf());
        $this->assertContains(TableRow::class, $element::childOf());
    }

    public function testParentOf(): void
    {
        $element = $this->delegator->createElement('td');
        $this->assertIsArray($element::parentOf());
        $this->assertEmpty($element::parentOf());
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

    public function testGetElementsByTagName(): void
    {
        $html = '<!DOCTYPE html><html><head><title>Test</title></head><body><div><p>Test</p></div></body></html>';
        $delegator = HTMLDocumentDelegator::createFromString($html);
        $this->assertInstanceOf(DOMNodeListDelegator::class, $delegator->getElementsByTagName('div'));
        $this->assertEquals(1, $delegator->getElementsByTagName('div')->count());
        $this->assertEquals(1, $delegator->getElementsByTagName('p')->count());
        $this->assertEquals(0, $delegator->getElementsByTagName('span')->count());
    }
}
