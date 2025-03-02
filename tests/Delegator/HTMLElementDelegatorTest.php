<?php

namespace Tests\Delegator;

use BadMethodCallException;
use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\HTMLElementDelegator;
use Html\Element\Inline\Anchor;
use Html\Enum\RelEnum;
use Html\Enum\TargetEnum;
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

    /**
     * @description added getter and setter and changed visibility to protected
     */
    public function testSetEnum(): void
    {
        $this->delegator->setRel(RelEnum::NOFOLLOW);
        $this->assertEquals(RelEnum::NOFOLLOW, $this->delegator->rel);
        $this->assertEquals(RelEnum::NOFOLLOW, $this->delegator->getRel());
        $this->assertEquals('nofollow', $this->delegator->htmlElement->getAttribute('rel'));
    }

    /**
     * @todo consider allowing to set array value. eg: data-json="{\"some\": \"data here\"}". currently value must be Enum or string
     */
    public function testSetAttributeWithInvalidValue(): void
    {
        $this->expectException(TypeError::class);
        $this->expectExceptionMessage(
            "Cannot assign array to property Html\Element\Inline\Anchor::\$href of type ?string"
        );
        $this->delegator->setAttribute('href', [
            'foo' => 'bar',
        ]);
    }

    public function testSetEnumSetAttributes(): void
    {
        $this->delegator->setAttributes([
            'rel' => RelEnum::NOFOLLOW,
        ]);
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
    }

    public function testSetAttributesEnum(): void
    {
        $this->delegator->setAttributes([
            'rel' => RelEnum::NOFOLLOW,
        ]);
        $this->assertEquals('nofollow', $this->delegator->htmlElement->getAttribute('rel'));
        $this->assertEquals(RelEnum::NOFOLLOW, $this->delegator->rel);
    }

    public function testSetAttributesEnumValue(): void
    {
        $this->delegator->setAttributes([
            'rel' => 'nofollow',
            'target' => '_blank',
        ]);
        $this->assertEquals('nofollow', $this->delegator->htmlElement->getAttribute('rel'));
        $this->assertEquals('nofollow', $this->delegator->getAttribute('rel'));
        $this->assertEquals('_blank', $this->delegator->htmlElement->getAttribute('target'));
        $this->assertEquals('_blank', $this->delegator->getAttribute('target'));
        $this->assertEquals(RelEnum::NOFOLLOW, $this->delegator->rel);
        $this->assertEquals(TargetEnum::_BLANK, $this->delegator->target);
    }
}
