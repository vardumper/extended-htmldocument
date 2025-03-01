<?php

namespace Tests\Delegator;

use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\HTMLElementDelegator;
use Html\Enum\RelEnum;
use PHPUnit\Framework\TestCase;

final class HTMLElementDelegatorTest extends TestCase
{
    private HTMLDocumentDelegator $document;

    private HTMLElementDelegator $htmlElement;

    private HTMLElementDelegator $delegator;

    protected function setUp(): void
    {
        $this->document = HTMLDocumentDelegator::createEmpty();
        $this->delegator = $this->document->createElement('a');
    }

    public function testConstructor(): void
    {
        $this->assertInstanceOf(HTMLElementDelegator::class, $this->delegator);
    }

    public function testCall(): void
    {
        $this->delegator->setAttribute('id', 'test');
        $this->assertEquals('test', $this->delegator->getAttribute('id'));
    }

    public function testGet(): void
    {
        $this->delegator->setAttribute('id', 'test');
        $this->assertEquals('test', $this->delegator->id);
        $this->assertEquals('test', $this->delegator->htmlElement->id);
    }

    public function testSet(): void
    {
        $this->delegator->id = 'test';
        $this->assertEquals('test', $this->delegator->id);
        $this->assertEquals('test', $this->delegator->htmlElement->getAttribute('id'));

        $this->delegator->id = 'test';
        $this->assertEquals('test', $this->delegator->id);
        $this->assertEquals('test', $this->delegator->htmlElement->getAttribute('id'));

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Property nonExistant does not exist');
        $this->delegator->nonExistant = 'example';

        $this->delegator->rel = RelEnum::NOFOLLOW;
        $this->assertEquals('nofollow', $this->delegator->rel);
        $this->assertEquals('nofollow', $this->delegator->htmlElement->getAttribute('rel'));

        $this->delegator->className = 'example-class';
        $this->assertEquals('example-class', $this->delegator->className);
        $this->assertEquals('example-class', $this->delegator->htmlElement->className);
    }

    public function testToString(): void
    {
        $this->delegator->setAttribute('id', 'test');
        $this->assertEquals('<a id="test"></a>', (string) $this->delegator);
    }

    public function testSetAttributes(): void
    {
        $this->delegator->setAttributes([
            'id' => 'test',
            'class' => 'example',
        ]);
        $this->assertEquals('test', $this->delegator->getAttribute('id'));
        $this->assertEquals('example', $this->delegator->getAttribute('class'));

        $this->delegator->setAttributes([
            'rel' => RelEnum::NOFOLLOW,
        ]);
        $this->assertEquals('nofollow', $this->delegator->rel);
        $this->assertEquals('nofollow', $this->delegator->htmlElement->getAttribute('rel'));


        $this->delegator->setAttributes([]);
        $this->assertEquals(null, $this->delegator->getAttribute('id'));
        $this->assertEquals(null, $this->delegator->htmlElement->getAttribute('id'));
    }
}
