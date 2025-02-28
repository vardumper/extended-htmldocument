<?php

namespace Tests\Delegator;

use BadMethodCallException;
use DOM\Document;
use DOM\HTMLDocument;
use Dom\HTMLElement;
use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\HTMLElementDelegator;
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

    public function testSaveXml(): void
    {
        $this->delegator->saveXml();
        $this->expectOutputString($this->document->saveXml());
    }

    public function testGetGet(): void
    {
        // The native 'documentElement' property on HtmlElement
        $this->assertSame('DIV', $this->delegator->documentElement->tagName);
    }

    public function testSetSet(): void
    {
        $this->delegator->id = 'myDiv';
        $this->assertSame('myDiv', $this->htmlElement->getAttribute('id'));

        // Test with BackedEnum
        $this->delegator->dataType = DummyEnum::FOO;
        $this->assertSame('fooValue', $this->htmlElement->getAttribute('dataType'));
    }

    public function testToString(): void
    {
        $this->delegator->setAttribute('class', 'test-class');
        $htmlOutput = (string) $this->delegator;
        $this->assertStringContainsString('class="test-class"', $htmlOutput);
    }

    public function testSetAttributes(): void
    {
        $this->delegator->setAttributes([
            'id' => 'testId',
            'class' => 'someClass',
        ]);
        $this->assertSame('testId', $this->htmlElement->getAttribute('id'));
        $this->assertSame('someClass', $this->htmlElement->getAttribute('class'));
    }

    public function testHasAttributes(): void
    {
        $this->assertFalse($this->delegator->hasAttributes());
        $this->delegator->setAttribute('foo', 'bar');
        $this->assertTrue($this->delegator->hasAttributes());
    }

    public function testCreate(): void
    {
        // Mock HTMLDocumentDelegator
        $domMock = $this->createMock(HTMLDocumentDelegator::class);
        $domDocument = new Document();
        $domMock->htmlDocument = $domDocument;

        $created = HTMLElementDelegator::create($domMock);
        $this->assertInstanceOf(HTMLElementDelegator::class, $created);
        $this->assertInstanceOf(HtmlElement::class, $created->htmlElement);
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
        $this->expectError(); // or comment out if the constant is set in a subclass
        HTMLElementDelegator::isSelfClosing();
    }

    public function testGetQualifiedName(): void
    {
        $this->expectError(); // or remove if QUALIFIED_NAME is defined in a subclass
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
}
