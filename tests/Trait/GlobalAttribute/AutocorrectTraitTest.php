<?php

use Html\Trait\GlobalAttribute\AutocorrectTrait;
use Html\Enum\AutocorrectEnum;

class TestAutocorrect
{
    use AutocorrectTrait;

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

test('setAutocorrect accepts boolean true and sets on', function () {
    $obj = new TestAutocorrect();

    $obj->setAutocorrect(true);

    expect($obj->getAutocorrect())
        ->toBeInstanceOf(AutocorrectEnum::class)
        ->and($obj->getAutocorrect()->value)->toBe(AutocorrectEnum::ON->value)
        ->and($obj->attributes['autocorrect'])->toBe(AutocorrectEnum::ON->value);
});

test('setAutocorrect accepts string "off" and sets off', function () {
    $obj = new TestAutocorrect();

    $obj->setAutocorrect('off');

    expect($obj->getAutocorrect()->value)->toBe(AutocorrectEnum::OFF->value)
        ->and($obj->attributes['autocorrect'])->toBe(AutocorrectEnum::OFF->value);
});

test('setAutocorrect throws for invalid string', function () {
    $obj = new TestAutocorrect();

    expect(fn () => $obj->setAutocorrect('maybe'))
        ->toThrow(InvalidArgumentException::class);
});
