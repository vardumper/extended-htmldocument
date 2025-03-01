<?php

namespace Tests\Delegator;

use BadMethodCallException;
use Html\Delegator\DOMNodeDelegator;
use Html\Delegator\DOMNodeListDelegator;
use Html\Delegator\HTMLDocumentDelegator;
use PHPUnit\Framework\TestCase;

final class DOMNodeListDelegatorTest extends TestCase
{
    private HTMLDocumentDelegator $document;

    private DOMNodeListDelegator $delegator;

    protected function setUp(): void
    {
        $this->document = HTMLDocumentDelegator::createEmpty();
        $this->delegator = new DOMNodeListDelegator($this->document->childNodes);
    }

    public function testConstructor(): void
    {
        $this->assertInstanceOf(DOMNodeListDelegator::class, $this->delegator);
    }

    public function testChildNodesCount(): void
    {
        $this->assertCount(0, $this->delegator->getIterator());
    }

    public function testCallMethod(): void
    {
        $this->expectException(BadMethodCallException::class);
        $this->delegator->nonExistentMethod();
    }

    public function testItem(): void
    {
        $element = $this->document->createElement('div', 'example content');
        $this->document->appendChild($element);
        $this->assertInstanceOf(DOMNodeDelegator::class, $this->delegator->item(0));
    }

    public function testItemCount(): void
    {
        $element = $this->document->createElement('div', 'example content');
        $this->document->appendChild($element);
        $this->assertEquals(1, $this->delegator->count());

        $this->document->removeChild($element);
        $this->assertEquals(0, $this->delegator->count());
    }

    public function testRemoveChild(): void
    {
        $element = $this->document->createElement('div', 'example content');
        $this->document->appendChild($element);
        $this->document->removeChild($element);
        $this->assertCount(0, $this->delegator->getIterator());
    }
}
