<?php

namespace Tests\Trait\GlobalAttribute;

use Html\Enum\PopoverEnum;
use InvalidArgumentException;

test('setPopover true sets AUTO and attribute', function () {
    $obj = new TestPopover();

    $obj->setPopover(true);

    expect($obj->getPopover())
        ->toBeInstanceOf(PopoverEnum::class)
        ->and($obj->getPopover())
        ->toBe(PopoverEnum::AUTO)
        ->and($obj->attributes['popover'])->toBe(PopoverEnum::AUTO->value);
});

test('setPopover "manual" sets MANUAL', function () {
    $obj = new TestPopover();

    $obj->setPopover('manual');

    expect($obj->getPopover())
        ->toBe(PopoverEnum::MANUAL)
        ->and($obj->attributes['popover'])->toBe(PopoverEnum::MANUAL->value);
});

test('setPopover "false" does not set enum and leaves property null', function () {
    $obj = new TestPopover();

    $obj->setPopover('false');

    expect($obj->getPopover())
        ->toBeNull()
        ->and(array_key_exists('popover', $obj->attributes))
        ->toBeFalse();
});

test('setPopover throws on invalid value', function () {
    $obj = new TestPopover();

    expect(fn () => $obj->setPopover('maybe'))
        ->toThrow(InvalidArgumentException::class);
});
