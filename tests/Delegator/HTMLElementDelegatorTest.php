<?php

namespace Tests\Delegator;

use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\HTMLElementDelegator;
use Html\Element\Inline\Anchor;
use Html\Enum\RelEnum;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

final class HTMLElementDelegatorTest extends TestCase
{
    private HTMLDocumentDelegator $document;

    private HTMLElementDelegator $htmlElement;

    private HTMLElementDelegator $delegator;

    protected function setUp(): void
    {
        $this->document = HTMLDocumentDelegator::createEmpty();
        $this->delegator = Anchor::create($this->document); // $this->document->createElement('a');
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

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Property nonExistant does not exist');
        $this->delegator->nonExistant = 'example';

        $this->delegator->rel = RelEnum::NOFOLLOW;
        $this->assertEquals('nofollow', $this->delegator->rel);
        $this->assertEquals('nofollow', $this->delegator->htmlElement->getAttribute('rel'));

        $this->delegator->className = 'example-class';
        $this->assertEquals('example-class', $this->delegator->className);
        $this->assertEquals('example-class', $this->delegator->htmlElement->className);

        $this->delegator->href = 'https://example.com';
        $this->assertEquals('https://example.com', $this->delegator->href);
        $this->assertEquals('https://example.com', $this->delegator->htmlElement->href);

        $this->delegator->rel = RelEnum::INEXISTENT;
        $this->assertEquals(RelEnum::NOFOLLOW, $this->delegator->rel);
        $this->assertEquals('nofollow', $this->delegator->htmlElement->getAttribute('rel'));
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
            'href' => 'https://example.com',
        ]);
        // var_dump((string) $this->delegator);exit;
        $this->assertEquals('test', $this->delegator->getAttribute('id'));
        $this->assertEquals('example', $this->delegator->getAttribute('class'));
        $this->assertEquals(
            'https://example.com',
            $this->delegator->htmlElement->getAttribute('href')
        ); // Assert the href attribute
        $this->assertEquals('https://example.com', $this->delegator->href); // Assert the href attribute
        $this->delegator->setAttributes([
            'rel' => RelEnum::NOFOLLOW,
        ]);
        $this->assertEquals('nofollow', $this->delegator->htmlElement->getAttribute('rel'));
        $this->assertEquals(RelEnum::NOFOLLOW, $this->delegator->rel);
    }
}
