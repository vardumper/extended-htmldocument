<?php

namespace Tests\Traits;

use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\HTMLElementDelegator;
use Html\Enum\AutoCapitalizeEnum;
use Html\Enum\DirectionEnum;
use Html\Traits\GlobalAttributesTrait;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class GlobalAttributesTraitTest extends TestCase
{
    use GlobalAttributesTrait;

    private HTMLDocumentDelegator $document;

    private HTMLElementDelegator $htmlElement;

    protected function setUp(): void
    {
        $this->document = HTMLDocumentDelegator::createEmpty();
        $this->htmlElement = $this->document->createElement('div');
    }

    public function testSetAndGetAccessKey()
    {
        $this->setAccessKey('a');
        $this->assertEquals('a', $this->getAccessKey());
    }

    public function testSetAndGetAutoCapitalize()
    {
        // set as string
        $this->setAutoCapitalize('words');
        $this->assertEquals('words', $this->getAutoCapitalize()->value);
        $this->assertEquals(AutoCapitalizeEnum::WORDS, $this->getAutoCapitalize());

        // set as Enum
        $this->setAutoCapitalize(AutoCapitalizeEnum::CHARACTERS);
        $this->assertEquals('characters', $this->getAutoCapitalize()->value);
        $this->assertEquals(AutoCapitalizeEnum::CHARACTERS, $this->getAutoCapitalize());
    }

    public function testSetAndGetContentEditable()
    {
        $this->setContentEditable();
        $this->assertTrue($this->getContentEditable());
        $this->assertIsBool($this->getContentEditable());

        $this->setContentEditable(false);
        $this->assertFalse($this->getContentEditable());
        $this->assertIsBool($this->getContentEditable());

        $this->setContentEditable('false');
        $this->assertFalse($this->getContentEditable());
        $this->assertIsBool($this->getContentEditable());

        $this->setContentEditable('inherit');
        $this->assertEquals('inherit', $this->getContentEditable());
    }

    public function testSetAndGetContentEditableInvalidValue()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid value for contenteditable');
        $this->setContentEditable('invalid-value');
    }

    /**
     * @todo requires fix (preferrably in __set)
     */
    public function testSetAndGetDir()
    {
        $this->setDir('ltr');
        $this->assertEquals('ltr', $this->getDir()->value);
        $this->assertEquals(DirectionEnum::LTR, $this->getDir());
        // $this->assertEquals('ltr', $this->htmlElement->getAttribute('dir'));
    }

    public function testSetAndGetDirInvalid()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid value for dir');
        $this->setDir('hallo-welt');
    }

    public function testSetAndGetDraggable()
    {
        $this->setDraggable();
        $this->assertEquals(true, $this->getDraggable());

        $this->setDraggable(true);
        $this->assertEquals(true, $this->getDraggable());

        $this->setDraggable('true');
        $this->assertEquals(true, $this->getDraggable());
    }

    public function testSetAndGetHidden()
    {
        $this->setHidden(true);
        $this->assertEquals(true, $this->getHidden());
    }

    public function testSetAndGetInert()
    {
        $this->setInert(true);
        $this->assertEquals(true, $this->getInert());
    }

    public function testSetAndGetInputMode()
    {
        $this->setInputMode('numeric');
        $this->assertEquals('numeric', $this->getInputMode());
    }

    public function testSetAndGetIs()
    {
        $this->setIs('custom-element');
        $this->assertEquals('custom-element', $this->getIs());
    }

    public function testSetAndGetLang()
    {
        $this->setLang('en');
        $this->assertEquals('en', $this->getLang());
    }

    public function testSetAndGetNonce()
    {
        $this->setNonce('random-nonce');
        $this->assertEquals('random-nonce', $this->getNonce());
    }

    public function testSetAndGetPart()
    {
        $this->setPart('part-name');
        $this->assertEquals('part-name', $this->getPart());
    }

    public function testSetAndGetPopover()
    {
        $this->setPopover('auto');
        $this->assertEquals('auto', $this->getPopover());
    }

    public function testSetAndGetRole()
    {
        $this->setRole('button');
        $this->assertEquals('button', $this->getRole());
    }

    public function testSetAndGetSlot()
    {
        $this->setSlot('slot-name');
        $this->assertEquals('slot-name', $this->getSlot());
    }

    public function testSetAndGetSpellCheck()
    {
        $this->setSpellCheck(true);
        $this->assertEquals(true, $this->getSpellCheck());
    }

    public function testSetAndGetStyle()
    {
        $this->setStyle('color: red;');
        $this->assertEquals('color: red;', $this->getStyle());
    }

    public function testSetAndGetTabIndex()
    {
        $this->setTabIndex(1);
        $this->assertEquals(1, $this->getTabIndex());
    }

    public function testSetAndGetTitle()
    {
        $this->setTitle('Test Title');
        $this->assertEquals('Test Title', $this->getTitle());
    }

    public function testSetAndGetTranslate()
    {
        $this->setTranslate('yes');
        $this->assertEquals('yes', $this->getTranslate());
    }

    public function testSetAndGetDataAttribute()
    {
        $this->setDataAttribute('test', 'value');
        $this->assertEquals('value', $this->getDataAttribute('test'));
    }
}
