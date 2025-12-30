<?php

use Html\Delegator\HTMLDocumentDelegator;
use Html\Element\Block\Division;
use Html\Enum\AutoCapitalizeEnum;
use Html\Enum\ContentEditableEnum;
use Html\Enum\DirectionEnum;
use Html\Enum\SpellCheckEnum;

beforeEach(function () {
    $this->document = HTMLDocumentDelegator::createEmpty();
    $this->element = Division::create($this->document);
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

test('set and get lang', function () {
    $this->element->setLang('en');
    expect($this->element->getLang())
        ->toEqual('en');
});

test('set and get popover', function () {
    $this->element->setPopover('auto');
    expect($this->element->getPopover()->value)
        ->toEqual('auto');
    expect($this->element->getPopover())
        ->toEqual(\Html\Enum\PopoverEnum::AUTO);
});

test('set and get role', function () {
    $this->element->setRole('button');
    expect($this->element->getRole()->value)
        ->toEqual('button');
    expect($this->element->getRole())
        ->toEqual(\Html\Enum\RoleEnum::BUTTON);
});

test('set and get slot', function () {
    $this->element->setSlot('slot-name');
    expect($this->element->getSlot())
        ->toEqual('slot-name');
});

test('set and get spell check', function () {
    $this->element->setSpellcheck(true);
    expect($this->element->getSpellcheck())
        ->toBeInstanceOf(SpellCheckEnum::class);
    expect($this->element->getSpellcheck()->value)
        ->toEqual('true');
    expect($this->element->delegated->getAttribute('spellcheck'))
        ->toEqual('true');

    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('Invalid value for spellcheck');
    $this->element->setSpellcheck('invalid-value');

    $this->element->setSpellcheck('true');
    expect($this->element->getSpellcheck())
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
    expect($this->element->getTranslate()->value)
        ->toEqual('yes');
    expect($this->element->getTranslate())
        ->toEqual(\Html\Enum\TranslateEnum::YES);
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
