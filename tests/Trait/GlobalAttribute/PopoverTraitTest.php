<?php

use Html\Trait\GlobalAttribute\PopoverTrait;
use Html\Enum\PopoverEnum;

class TestPopover
{
    use PopoverTrait;

    public array $attributes = [];
    public $delegated;

    public function __construct()
    {
        $this->delegated = $this;
    }

    public function setAttribute(string $name, string $value)
    {
        $this->attributes[$name] = $value;
        return $this;
    }
}

test('setPopover true sets AUTO and attribute', function () {
    $obj = new TestPopover();

    $obj->setPopover(true);

    expect($obj->getPopover())->toBeInstanceOf(PopoverEnum::class)
        ->and($obj->getPopover())->toBe(PopoverEnum::AUTO)
        ->and($obj->attributes['popover'])->toBe(PopoverEnum::AUTO->value);
});

test('setPopover "manual" sets MANUAL', function () {
    $obj = new TestPopover();

    $obj->setPopover('manual');

    expect($obj->getPopover())->toBe(PopoverEnum::MANUAL)
        ->and($obj->attributes['popover'])->toBe(PopoverEnum::MANUAL->value);
});

test('setPopover "false" does not set enum and leaves property null', function () {
    $obj = new TestPopover();

    $obj->setPopover('false');

    expect($obj->getPopover())->toBeNull()
        ->and(array_key_exists('popover', $obj->attributes))->toBeFalse();
});

test('setPopover throws on invalid value', function () {
    $obj = new TestPopover();

    expect(fn () => $obj->setPopover('maybe'))
        ->toThrow(InvalidArgumentException::class);
});
