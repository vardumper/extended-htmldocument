<?php

use Html\Trait\GlobalAttribute\AutofocusTrait;

class TestAutofocus
{
    use AutofocusTrait;

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

test('setAutofocus true sets delegated attribute and getAutofocus returns true', function () {
    $obj = new TestAutofocus();

    $obj->setAutofocus(true);

    expect($obj->getAutofocus())->toBeTrue()
        ->and($obj->attributes['autofocus'])->toBe('true');
});

test('setAutofocus with "true" string also sets attribute', function () {
    $obj = new TestAutofocus();

    $obj->setAutofocus('true');

    expect($obj->getAutofocus())->toBeTrue()
        ->and($obj->attributes['autofocus'])->toBe('true');
});

test('setAutofocus false does not set attribute', function () {
    $obj = new TestAutofocus();

    $obj->setAutofocus(false);

    expect(array_key_exists('autofocus', $obj->attributes))->toBeFalse();
});

test('setAutofocus throws on invalid string', function () {
    $obj = new TestAutofocus();

    expect(fn () => $obj->setAutofocus('maybe'))
        ->toThrow(InvalidArgumentException::class);
});
