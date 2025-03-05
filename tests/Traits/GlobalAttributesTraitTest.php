<?php

namespace Tests\Traits;

use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\HTMLElementDelegator;
use Html\Enum\AutoCapitalizeEnum;
use Html\Enum\ContentEditableEnum;
use Html\Enum\DirectionEnum;
use Html\Enum\SpellCheckEnum;
use Html\Traits\GlobalAttributesTrait;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class GlobalAttributesTraitTest extends TestCase
{
    use GlobalAttributesTrait;

    private HTMLDocumentDelegator $document;

    private HTMLElementDelegator $element;

    protected function setUp(): void
    {
        $this->document = HTMLDocumentDelegator::createEmpty();
        $this->element = $this->document->createElement('div');
    }

    public function testSetAndGetAccessKey()
    {
        $this->setAccessKey('a');
        $this->assertEquals('a', $this->getAccessKey());
    }

    public function testSetAndGetAutoCapitalize()
    {
        // set as string
        $this->element->setAutoCapitalize('words');
        $this->assertEquals('words', $this->element->getAutoCapitalize()->value);
        $this->assertEquals(AutoCapitalizeEnum::WORDS, $this->element->getAutoCapitalize());

        // set as Enum
        $this->element->setAutoCapitalize(AutoCapitalizeEnum::CHARACTERS);
        $this->assertEquals('characters', $this->element->getAutoCapitalize()->value);
        $this->assertEquals(AutoCapitalizeEnum::CHARACTERS, $this->element->getAutoCapitalize());
    }

    public function testSetAndGetContentEditable()
    {
        $this->element->setContentEditable();
        $this->assertEquals(ContentEditableEnum::TRUE, $this->element->getContentEditable());
        $this->assertEquals('true', $this->element->getContentEditable()->value);
        $this->assertEquals('true', $this->element->getAttribute('contenteditable'));

        $this->element->setContentEditable(false);
        $this->assertEquals(ContentEditableEnum::FALSE, $this->element->getContentEditable());
        $this->assertEquals('false', $this->element->getContentEditable()->value);
        $this->assertEquals('false', $this->element->getAttribute('contenteditable'));

        $this->element->setContentEditable('false');
        $this->assertEquals(ContentEditableEnum::FALSE, $this->element->getContentEditable());
        $this->assertEquals('false', $this->element->getContentEditable()->value);
        $this->assertEquals('false', $this->element->getAttribute('contenteditable'));


        $this->element->setContentEditable('inherit');
        $this->assertEquals(ContentEditableEnum::INHERIT, $this->element->getContentEditable());
        $this->assertEquals('inherit', $this->element->getContentEditable()->value);
        $this->assertEquals('inherit', $this->element->getAttribute('contenteditable'));
    }

    public function testSetAndGetContentEditableInvalidValue()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid value for contenteditable');
        $this->element->setContentEditable('invalid-value');
    }

    public function testSetAndGetDir()
    {
        $this->element->setDir('ltr');
        $this->assertEquals('ltr', $this->element->getDir()->value);
        $this->assertEquals(DirectionEnum::LTR, $this->element->getDir());
        $this->assertEquals('ltr', $this->element->getAttribute('dir'));
    }

    public function testSetAndGetDirInvalid()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid value for dir');
        $this->element->setDir('hallo-welt');
    }

    public function testSetAndGetDraggable()
    {
        $this->element->setDraggable();
        $this->assertEquals(true, $this->element->getDraggable());

        $this->element->setDraggable(true);
        $this->assertEquals(true, $this->element->getDraggable());

        $this->element->setDraggable('true');
        $this->assertEquals(true, $this->element->getDraggable());

        $this->element->setDraggable(false);
        $this->assertEquals(false, $this->element->getDraggable());
    }

    public function testSetAndGetHidden()
    {
        $this->element->setHidden(true);
        $this->assertEquals(true, $this->element->getHidden());
    }

    public function testSetAndGetInert()
    {
        $this->element->setInert(true);
        $this->assertEquals(true, $this->element->getInert());
    }

    public function testSetAndGetInputMode()
    {
        $this->element->setInputMode('numeric');
        $this->assertEquals('numeric', $this->element->getInputMode()->value);

        $this->element->setInputMode();
        $this->assertEquals('numeric', $this->element->getInputMode()->value);
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
        $this->element->setSpellCheck(true);
        $this->assertInstanceOf(SpellCheckEnum::class, $this->element->getSpellCheck());
        $this->assertEquals('true', $this->element->getSpellCheck()->value);
        $this->assertEquals('true', $this->element->htmlElement->getAttribute('spellcheck'));
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
