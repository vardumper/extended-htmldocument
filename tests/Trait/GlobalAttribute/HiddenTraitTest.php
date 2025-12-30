<?php

use Html\Trait\GlobalAttribute\HiddenTrait;

class TestHidden
{
    use HiddenTrait;

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

test('setHidden true sets delegated attribute and getHidden returns true', function () {
    $obj = new TestHidden();

    $obj->setHidden(true);

    expect($obj->getHidden())->toBeTrue()
        ->and($obj->attributes['hidden'])->toBe('true');
});

test('setHidden false does not set attribute', function () {
    $obj = new TestHidden();

    $obj->setHidden(false);

    expect(array_key_exists('hidden', $obj->attributes))->toBeFalse();
});

test('setHidden throws on invalid string', function () {
    $obj = new TestHidden();

    expect(fn () => $obj->setHidden('maybe'))
        ->toThrow(InvalidArgumentException::class);
});
