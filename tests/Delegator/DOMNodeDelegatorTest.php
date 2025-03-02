<?php

namespace Tests\Delegator;

use BadMethodCallException;
use DOM\Node;
use DOMNode;
use Html\Delegator\DOMNodeDelegator;
use Html\Delegator\HTMLDocumentDelegator;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

final class DOMNodeDelegatorTest extends TestCase
{
    private HTMLDocumentDelegator $document;

    private DOMNodeDelegator $delegator;

    private Node $domNode;

    protected function setUp(): void
    {
        $this->document = HTMLDocumentDelegator::createEmpty();
        $node = $this->document->createTextNode('test');
        $this->delegator = new DOMNodeDelegator($node);
    }

    public function testConstructor(): void
    {
        $this->assertInstanceOf(DOMNodeDelegator::class, $this->delegator);
        $this->assertInstanceOf(Node::class, $this->delegator->domNode);
    }

    public function testCall(): void
    {
        $clone = $this->delegator->cloneNode();
        $this->assertEquals($clone, $this->delegator->domNode);
        // $this->assertEquals($clone, $this->delegator->domNode);
    }

    public function testGet(): void
    {
        $this->delegator->nodeValue = 'custom node value';
        $this->assertEquals('custom node value', $this->delegator->nodeValue);
        $this->assertEquals('custom node value', $this->delegator->domNode->nodeValue);
    }

    public function testSet(): void
    {
        $this->delegator->nodeValue = 'test';
        $this->assertEquals('test', $this->delegator->nodeValue);
        $this->assertEquals('test', $this->delegator->domNode->nodeValue);
    }

    public function testGetDomNode(): void
    {
        $this->assertSame($this->delegator->domNode, $this->delegator->getDomNode());
    }

    public function testCallInvalidMethod(): void
    {
        $this->expectException(BadMethodCallException::class);
        $this->delegator->nonExistentMethod();
    }

    public function testGetInvalidProperty(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->delegator->nonExistentProperty;
    }

    public function testSetInvalidProperty(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->delegator->nonExistentProperty = 'value';
    }
}
