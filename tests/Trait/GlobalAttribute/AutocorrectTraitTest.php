<?php

namespace Tests\Trait\GlobalAttribute;

use Html\Enum\AutocorrectEnum;
use InvalidArgumentException;

test('setAutocorrect accepts boolean true and sets on', function () {
    $obj = new TestAutocorrect();

    $obj->setAutocorrect(true);

    expect($obj->getAutocorrect())
        ->toBeInstanceOf(AutocorrectEnum::class)
        ->and($obj->getAutocorrect()->value)
        ->toBe(AutocorrectEnum::ON->value)
        ->and($obj->attributes['autocorrect'])->toBe(AutocorrectEnum::ON->value);
});

test('setAutocorrect accepts string "off" and sets off', function () {
    $obj = new TestAutocorrect();

    $obj->setAutocorrect('off');

    expect($obj->getAutocorrect()->value)
        ->toBe(AutocorrectEnum::OFF->value)
        ->and($obj->attributes['autocorrect'])->toBe(AutocorrectEnum::OFF->value);
});

test('setAutocorrect throws for invalid string', function () {
    $obj = new TestAutocorrect();

    expect(fn () => $obj->setAutocorrect('maybe'))
        ->toThrow(InvalidArgumentException::class);
});
