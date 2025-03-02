<?php

namespace Tests\Delegator;

use BadMethodCallException;
use DOM\Document;
use DOM\Element;
use DOM\Node;
use Html\Delegator\DOMNodeDelegator;
use Html\Delegator\HTMLElementDelegator;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

final class DOMNodeDelegatorTest extends TestCase
{
    private Node $domNode;
    private DOMNodeDelegator $delegator;

    // protected function setUp(): void
    // {
    //     $document = new Document();
    //     $this->domNode = $document->createElement('div');
    //     $this->delegator = new DOMNodeDelegator($this->domNode);
    // }

    // public function testCall(): void
    // {
    //     $this->domNode->setAttribute('id', 'test');
    //     $this->assertEquals('test', $this->delegator->getAttribute('id'));
    // }

    // public function testGet(): void
    // {
    //     $this->domNode->setAttribute('id', 'test');
    //     $this->assertEquals('test', $this->delegator->id);
    // }

    // public function testSet(): void
    // {
    //     $this->delegator->id = 'test';
    //     $this->assertEquals('test', $this->domNode->getAttribute('id'));
    // }

    // public function testGetDomNode(): void
    // {
    //     $this->assertSame($this->domNode, $this->delegator->getDomNode());
    // }

    // public function testCallInvalidMethod(): void
    // {
    //     $this->expectException(BadMethodCallException::class);
    //     $this->delegator->nonExistentMethod();
    // }

    // public function testGetInvalidProperty(): void
    // {
    //     $this->expectException(InvalidArgumentException::class);
    //     $this->delegator->nonExistentProperty;
    // }

    // public function testSetInvalidProperty(): void
    // {
    //     $this->expectException(InvalidArgumentException::class);
    //     $this->delegator->nonExistentProperty = 'value';
    // }
}
