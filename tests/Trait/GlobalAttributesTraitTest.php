<?php

use Html\Delegator\HTMLDocumentDelegator;
use Html\Enum\AutoCapitalizeEnum;
use Html\Enum\ContentEditableEnum;
use Html\Enum\DirectionEnum;
use Html\Enum\SpellCheckEnum;

uses(\Html\Trait\GlobalAttributesTrait::class);

beforeEach(function () {
    $this->document = HTMLDocumentDelegator::createEmpty();
    $this->element = $this->document->createElement('div');
});

test('set and get access key', function () {
    $this->element->setAccessKey('a');
    expect($this->element->getAccessKey())
        ->toBe('a');
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
        ->toEqual(ContentEditableEnum::TRUE);

    $this->element->setContentEditable(false);
    expect($this->element->getContentEditable())
        ->toEqual(ContentEditableEnum::FALSE);
    expect($this->element->getContentEditable()->value)
        ->toEqual('false');
    expect($this->element->getAttribute('contenteditable'))
        ->toEqual(ContentEditableEnum::FALSE);

    $this->element->setContentEditable('false');
    expect($this->element->getContentEditable())
        ->toEqual(ContentEditableEnum::FALSE);
    expect($this->element->getContentEditable()->value)
        ->toEqual('false');
    expect($this->element->getAttribute('contenteditable'))
        ->toEqual(ContentEditableEnum::FALSE);

    $this->element->setContentEditable('inherit');
    expect($this->element->getContentEditable())
        ->toEqual(ContentEditableEnum::INHERIT);
    expect($this->element->getContentEditable()->value)
        ->toEqual('inherit');
    expect($this->element->getAttribute('contenteditable'))
        ->toEqual(ContentEditableEnum::INHERIT);
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
        ->toEqual(DirectionEnum::LTR);
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

test('set and get invalid input mode', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('Invalid value for inputmode');
    $this->element->setInputMode('phone');
});

test('set and get is', function () {
    $this->element->setIs('custom-element');
    expect($this->element->getIs())
        ->toEqual('custom-element');
});

test('set and get lang', function () {
    $this->element->setLang('en');
    expect($this->element->getLang())
        ->toEqual('en');
});

test('set and get nonce', function () {
    $this->element->setNonce('random-nonce');
    expect($this->element->getNonce())
        ->toEqual('random-nonce');
});

test('set and get part', function () {
    $this->element->setPart('part-name');
    expect($this->element->getPart())
        ->toEqual('part-name');
});

test('set and get popover', function () {
    $this->element->setPopover('auto');
    expect($this->element->getPopover())
        ->toEqual('auto');
});

test('set and get role', function () {
    $this->element->setRole('button');
    expect($this->element->getRole())
        ->toEqual('button');
});

test('set and get slot', function () {
    $this->element->setSlot('slot-name');
    expect($this->element->getSlot())
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

    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('Invalid value for spellcheck');
    $this->element->setSpellCheck('invalid-value');

    $this->element->setSpellCheck('true');
    expect($this->element->getSpellCheck())
        ->toBeInstanceOf(SpellCheckEnum::class);
});

test('set and get style', function () {
    $this->element->setStyle('color: red;');
    expect($this->element->getStyle())
        ->toEqual('color: red;');
});

test('set and get tab index', function () {
    $this->element->setTabIndex(1);
    expect($this->element->getTabIndex())
        ->toEqual(1);
});

test('set and get title', function () {
    $this->element->setTitle('Test Title');
    expect($this->element->getTitle())
        ->toEqual('Test Title');
});

test('set and get translate', function () {
    $this->element->setTranslate('yes');
    expect($this->element->getTranslate())
        ->toEqual('yes');
});

test('test setDataAttribute', function () {
    $this->element->setDataAttribute([
        'name' => 'value',
        'more' => 'another',
    ]);
    expect($this->element->getDataAttribute())
        ->toEqual([
            'name' => 'value',
            'more' => 'another',
        ]);

    expect($this->element->getAttribute('data-name'))
        ->toEqual('value');
});

test('test setDataAttribute with indexed array', function () {
    $this->element->setDataAttribute(['value', 'another']);
    expect($this->element->getDataAttribute())
        ->toEqual(['value', 'another']);

    expect($this->element->getAttribute('data-0'))
        ->toEqual('value');
});

test('test getDataAttribute', function () {
    $this->element->setDataAttribute(['value', 'another']);
    expect($this->element->getDataAttribute(0))
        ->toEqual('value');

    expect($this->element->getDataAttribute('0'))
        ->toEqual('value');

    $this->element->setDataAttribute([
        'name' => 'value',
        'more' => 'another',
    ]);
    expect($this->element->getDataAttribute('name'))
        ->toEqual('value');

    expect($this->element->getDataAttribute('more'))
        ->toEqual('another');

    expect($this->element->getDataAttribute('undefined'))
        ->toBe(null);

    // expect($this->element->getAttribute('data-0'))
    //     ->toEqual('value');
});

test('test setDataAttribute unsupported parameter type', function () {
    $this->expectException(TypeError::class);
    $this->expectExceptionMessage('Argument #1 ($data) must be of type array, string given');
    $this->element->setDataAttribute('invalid');
});
