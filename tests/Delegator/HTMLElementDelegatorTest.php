<?php

namespace Tests\Delegator;

use BadMethodCallException;
use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\HTMLElementDelegator;
use Html\Element\Inline\Anchor;
use Html\Enum\RelEnum;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use TypeError;

final class HTMLElementDelegatorTest extends TestCase
{
    private HTMLDocumentDelegator $document;

    private HTMLElementDelegator $htmlElement;

    private HTMLElementDelegator $delegator;

    protected function setUp(): void
    {
        $this->document = HTMLDocumentDelegator::createEmpty();
        $this->delegator = Anchor::create($this->document);
    }

    public function testConstructor(): void
    {
        $this->assertInstanceOf(HTMLElementDelegator::class, $this->delegator);
    }

    public function testCallGetGlobalAttribute(): void
    {
        $this->delegator->setAttribute('id', 'test');
        $this->assertEquals('test', $this->delegator->getAttribute('id'));
    }

    public function testCallGetElementAttribute(): void
    {
        $this->delegator->setAttribute('href', 'https://example.com');
        // var_dump((string) $this->delegator);
        $this->assertEquals('https://example.com', $this->delegator->getAttribute('href'));
    }

    public function testGet(): void
    {
        $this->delegator->setAttribute('href', 'https://example.com');
        // var_dump((string) $this->delegator);
        $this->assertEquals('https://example.com', $this->delegator->href);
        $this->assertEquals('https://example.com', $this->delegator->htmlElement->getAttribute('href'));
    }

    public function testGetGlobalId(): void
    {
        $this->delegator->setAttribute('id', 'unique-id');
        // var_dump((string) $this->delegator);
        $this->assertEquals('unique-id', $this->delegator->id);
    }

    public function testGetGlobalClassName(): void
    {
        $this->delegator->setAttribute('class', 'my-class');
        // var_dump((string) $this->delegator);
        $this->assertEquals('my-class', $this->delegator->className);
        $this->assertEquals('my-class', $this->delegator->getAttribute('class'));
        $this->assertEquals('my-class', $this->delegator->htmlElement->getAttribute('class'));
        $this->assertEquals('my-class', $this->delegator->htmlElement->className);
    }

    public function testSetGlobalClassName(): void
    {
        $this->delegator->className = 'my-new-class';
        $this->assertEquals('my-new-class', $this->delegator->className);
        $this->assertEquals('my-new-class', $this->delegator->getAttribute('class'));
        $this->assertEquals('my-new-class', $this->delegator->htmlElement->getAttribute('class'));
        $this->assertEquals('my-new-class', $this->delegator->htmlElement->className);
    }

    public function testSet(): void
    {
        $this->delegator->href = 'https://different.com';
        $this->assertEquals('https://different.com', $this->delegator->href);
    }

    public function testSetGlobalClass(): void
    {
        $this->delegator->class = 'new-classname';
        $this->assertEquals('new-classname', $this->delegator->className);
        $this->assertEquals('new-classname', $this->delegator->getAttribute('class'));
        $this->assertEquals('new-classname', $this->delegator->htmlElement->className);
        $this->assertEquals('new-classname', $this->delegator->htmlElement->getAttribute('class'));
    }

    /** @todo requires fix */
    public function testSetEnum(): void
    {
        $this->delegator->rel = RelEnum::NOFOLLOW;
        $this->assertEquals(RelEnum::NOFOLLOW, $this->delegator->rel);
        $this->assertEquals('nofollow', $this->delegator->htmlElement->getAttribute('rel'));
    }

    /** @todo consider allowing to set array value. eg: data-json="{\"some\": \"data here\"}". currently value must be Enum or string */
    public function testSetAttributeWithInvalidValue(): void
    {
        $this->expectException(TypeError::class);
        $this->expectExceptionMessage("Cannot assign array to property Html\Element\Inline\Anchor::\$href of type ?string");
        $this->delegator->setAttribute('href', ['foo' => 'bar']);
    }

    public function testSetEnumSetAttributes(): void
    {
        $this->delegator->setAttributes(['rel' => RelEnum::NOFOLLOW]);
        $this->assertEquals(RelEnum::NOFOLLOW, $this->delegator->rel);
        $this->assertEquals('nofollow', $this->delegator->htmlElement->getAttribute('rel'));
    }

    public function testSetEnumSetAttribute(): void
    {
        $this->delegator->setAttribute('rel', RelEnum::NOFOLLOW);
        $this->assertEquals(RelEnum::NOFOLLOW, $this->delegator->rel);
        $this->assertEquals('nofollow', $this->delegator->htmlElement->getAttribute('rel'));
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
        $this->delegator->nonExistentProperty = 'value';
        $this->assertEquals('value', $this->delegator->htmlElement->getAttribute('nonexistentproperty'));
        $this->assertEquals('value', $this->delegator->getAttribute('nonexistentproperty'));

        $this->expectException(InvalidArgumentException::class);
        $this->delegator->nonExistentProperty;
    }

    // public function testCall(): void
    // {
    //     $this->delegator->setAttribute('id', 'test');
    //     $this->assertEquals('test', $this->delegator->getAttribute('id'));

    //     $this->expectException(BadMethodCallException::class);
    //     $this->expectExceptionMessage(
    //         'Method nonExistant does not exist on Dom\HTMLElement. However you can implement it on Html\Delegator\HTMLElementDelegator'
    //     );
    //     $this->delegator->nonExistant();
    // }

    // public function testGet(): void
    // {
    //     $this->delegator->setAttribute('id', 'test');
    //     $this->assertEquals('test', $this->delegator->id);
    //     $this->assertEquals('test', $this->delegator->htmlElement->id);

    //     $this->expectException(InvalidArgumentException::class);
    //     $this->expectExceptionMessage('Property nonExistant does not exist');
    //     $this->delegator->nonExistant;
    // }

    // public function testSet(): void
    // {
    //     $this->delegator->id = 'test';
    //     $this->assertEquals('test', $this->delegator->id);
    //     $this->assertEquals('test', $this->delegator->htmlElement->getAttribute('id'));

    //     $this->delegator->id = 'test';
    //     $this->assertEquals('test', $this->delegator->id);
    //     $this->assertEquals('test', $this->delegator->htmlElement->getAttribute('id'));

    //     /** @todo should this be possible or not? */
    //     $this->expectException(InvalidArgumentException::class);
    //     $this->expectExceptionMessage('Property nonExistant does not exist');
    //     $this->delegator->nonExistant = 'example';

    //     // $this->delegator->rel = RelEnum::NOFOLLOW;
    //     // // var_dump((string) $this->delegator);exit;
    //     // $this->assertEquals(RelEnum::NOFOLLOW, $this->delegator->rel);
    //     // $this->assertEquals('nofollow', $this->delegator->htmlElement->getAttribute('rel'));

    //     $this->delegator->className = 'example-class';
    //     $this->assertEquals('example-class', $this->delegator->className);
    //     $this->assertEquals('example-class', $this->delegator->htmlElement->className);

    //     $this->delegator->href = 'https://example.com';
    //     var_dump((string) $this->delegator);
    //     $this->assertEquals('https://example.com', $this->delegator->href);
    //     $this->assertEquals('https://example.com', $this->delegator->htmlElement->getAttribute('href'));

    //     $this->expectException(InvalidArgumentException::class);
    //     $this->expectExceptionMessage('Property nonExistant does not exist');
    //     $this->delegator->nonExistant = 'example';

    //     $this->delegator->crossorigin = 'anonymous';
    //     $this->assertEquals('anonymous', $this->delegator->crossorigin);
    //     $this->assertEquals('anonymous', $this->delegator->htmlElement->getAttribute('crossorigin'));

    //     $this->expectException(InvalidArgumentException::class);
    //     $this->expectExceptionMessage('Property nonExistant does not exist');
    //     $this->delegator->rel = RelEnum::INEXISTENT;
    // }

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
