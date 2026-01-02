<?php

namespace Tests\Trait\GlobalAttribute;

use Html\Enum\TranslateEnum;
use InvalidArgumentException;

test('setTranslate "yes" sets YES and delegated attr', function () {
    $obj = new TestTranslate();

    $obj->setTranslate('yes');

    expect($obj->getTranslate())
        ->toBe(TranslateEnum::YES)
        ->and($obj->attributes['translate'])->toBe(TranslateEnum::YES->value);
});

test('setTranslate true sets YES', function () {
    $obj = new TestTranslate();

    $obj->setTranslate(true);

    expect($obj->getTranslate())
        ->toBe(TranslateEnum::YES)
        ->and($obj->attributes['translate'])->toBe(TranslateEnum::YES->value);
});

test('setTranslate false sets NO', function () {
    $obj = new TestTranslate();

    $obj->setTranslate(false);

    expect($obj->getTranslate())
        ->toBe(TranslateEnum::NO)
        ->and($obj->attributes['translate'])->toBe(TranslateEnum::NO->value);
});

test('setTranslate throws for invalid string', function () {
    $obj = new TestTranslate();

    expect(fn () => $obj->setTranslate('maybe'))
        ->toThrow(InvalidArgumentException::class);
});
