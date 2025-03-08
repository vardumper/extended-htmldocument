<?php

use Html\Delegator\HTMLDocumentDelegator;
use Html\Enum\AutoCapitalizeEnum;
use Html\Enum\ContentEditableEnum;
use Html\Enum\DirectionEnum;
use Html\Enum\SpellCheckEnum;

// uses(\Html\Trait\GlobalAttributesTrait::class);

beforeEach(function () {
    $this->document = HTMLDocumentDelegator::createEmpty();
    $this->element = $this->document->createElement('div');
});

test('set and get access key', function () {
    $this->setAccessKey('a');
    expect($this->getAccessKey())
        ->toEqual('a');
});

test('set and get auto capitalize', function () {
    // set as string
    $this->element->setAutoCapitalize('words');
    expect($this->element->getAutoCapitalize()->value)
        ->toEqual('words');
    expect($this->element->getAutoCapitalize())
        ->toEqual(AutoCapitalizeEnum::WORDS);

    // set as Enum
    $this->element->setAutoCapitalize(AutoCapitalizeEnum::CHARACTERS);
    expect($this->element->getAutoCapitalize()->value)
        ->toEqual('characters');
    expect($this->element->getAutoCapitalize())
        ->toEqual(AutoCapitalizeEnum::CHARACTERS);
});

test('set and get content editable', function () {
    $this->element->setContentEditable();
    expect($this->element->getContentEditable())
        ->toEqual(ContentEditableEnum::TRUE);
    expect($this->element->getContentEditable()->value)
        ->toEqual('true');
    expect($this->element->getAttribute('contenteditable'))
        ->toEqual('true');

    $this->element->setContentEditable(false);
    expect($this->element->getContentEditable())
        ->toEqual(ContentEditableEnum::FALSE);
    expect($this->element->getContentEditable()->value)
        ->toEqual('false');
    expect($this->element->getAttribute('contenteditable'))
        ->toEqual('false');

    $this->element->setContentEditable('false');
    expect($this->element->getContentEditable())
        ->toEqual(ContentEditableEnum::FALSE);
    expect($this->element->getContentEditable()->value)
        ->toEqual('false');
    expect($this->element->getAttribute('contenteditable'))
        ->toEqual('false');

    $this->element->setContentEditable('inherit');
    expect($this->element->getContentEditable())
        ->toEqual(ContentEditableEnum::INHERIT);
    expect($this->element->getContentEditable()->value)
        ->toEqual('inherit');
    expect($this->element->getAttribute('contenteditable'))
        ->toEqual('inherit');
});

test('set and get content editable invalid value', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('Invalid value for contenteditable');
    $this->element->setContentEditable('invalid-value');
});

test('set and get dir', function () {
    $this->element->setDir('ltr');
    expect($this->element->getDir()->value)
        ->toEqual('ltr');
    expect($this->element->getDir())
        ->toEqual(DirectionEnum::LTR);
    expect($this->element->getAttribute('dir'))
        ->toEqual('ltr');
});

test('set and get dir invalid', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('Invalid value for dir');
    $this->element->setDir('hallo-welt');
});

test('set and get draggable', function () {
    $this->element->setDraggable();
    expect($this->element->getDraggable())
        ->toEqual(true);

    $this->element->setDraggable(true);
    expect($this->element->getDraggable())
        ->toEqual(true);

    $this->element->setDraggable('true');
    expect($this->element->getDraggable())
        ->toEqual(true);

    $this->element->setDraggable(false);
    expect($this->element->getDraggable())
        ->toEqual(false);
});

test('set and get hidden', function () {
    $this->element->setHidden(true);
    expect($this->element->getHidden())
        ->toEqual(true);
});

test('set and get inert', function () {
    $this->element->setInert(true);
    expect($this->element->getInert())
        ->toEqual(true);
});

test('set and get input mode', function () {
    $this->element->setInputMode('numeric');
    expect($this->element->getInputMode()->value)
        ->toEqual('numeric');

    $this->element->setInputMode();
    expect($this->element->getInputMode()->value)
        ->toEqual('numeric');
});

test('set and get is', function () {
    $this->setIs('custom-element');
    expect($this->getIs())
        ->toEqual('custom-element');
});

test('set and get lang', function () {
    $this->setLang('en');
    expect($this->getLang())
        ->toEqual('en');
});

test('set and get nonce', function () {
    $this->setNonce('random-nonce');
    expect($this->getNonce())
        ->toEqual('random-nonce');
});

test('set and get part', function () {
    $this->setPart('part-name');
    expect($this->getPart())
        ->toEqual('part-name');
});

test('set and get popover', function () {
    $this->setPopover('auto');
    expect($this->getPopover())
        ->toEqual('auto');
});

test('set and get role', function () {
    $this->setRole('button');
    expect($this->getRole())
        ->toEqual('button');
});

test('set and get slot', function () {
    $this->setSlot('slot-name');
    expect($this->getSlot())
        ->toEqual('slot-name');
});

test('set and get spell check', function () {
    $this->element->setSpellCheck(true);
    expect($this->element->getSpellCheck())
        ->toBeInstanceOf(SpellCheckEnum::class);
    expect($this->element->getSpellCheck()->value)
        ->toEqual('true');
    expect($this->element->htmlElement->getAttribute('spellcheck'))
        ->toEqual('true');
});

test('set and get style', function () {
    $this->setStyle('color: red;');
    expect($this->getStyle())
        ->toEqual('color: red;');
});

test('set and get tab index', function () {
    $this->setTabIndex(1);
    expect($this->getTabIndex())
        ->toEqual(1);
});

test('set and get title', function () {
    $this->setTitle('Test Title');
    expect($this->getTitle())
        ->toEqual('Test Title');
});

test('set and get translate', function () {
    $this->setTranslate('yes');
    expect($this->getTranslate())
        ->toEqual('yes');
});

test('set and get data attribute', function () {
    $this->setDataAttribute('test', 'value');
    expect($this->getDataAttribute('test'))
        ->toEqual('value');
});
