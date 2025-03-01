<?php

namespace Tests\Delegator;

use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\HTMLElementDelegator;
use PHPUnit\Framework\TestCase;

final class HTMLElementDelegatorTest extends TestCase
{
    private HTMLDocumentDelegator $document;

    private HTMLElementDelegator $htmlElement;

    private HTMLElementDelegator $delegator;

    protected function setUp(): void
    {
        $this->document = HTMLDocumentDelegator::createEmpty();
        $this->delegator = $this->document->createElement('div');
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
    }

    public function testToString(): void
    {
        $this->delegator->setAttribute('id', 'test');
        $this->assertEquals('<div id="test"></div>', (string) $this->delegator);
    }

    public function testSetAttributes(): void
    {
        $this->delegator->setAttributes([
            'id' => 'test',
            'class' => 'example',
        ]);
        $this->assertEquals('test', $this->delegator->getAttribute('id'));
        $this->assertEquals('example', $this->delegator->getAttribute('class'));
    }
}
