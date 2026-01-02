<?php

namespace Tests\Trait\GlobalAttribute;

use Html\Enum\SpellCheckEnum;
use InvalidArgumentException;

test('setSpellcheck true sets TRUE and delegated attr', function () {
    $obj = new TestSpellcheck();

    $obj->setSpellcheck(true);

    expect($obj->getSpellcheck())
        ->toBe(SpellCheckEnum::TRUE)
        ->and($obj->attributes['spellcheck'])->toBe(SpellCheckEnum::TRUE->value);
});

test('setSpellcheck "false" sets FALSE via string', function () {
    $obj = new TestSpellcheck();

    $obj->setSpellcheck('false');

    expect($obj->getSpellcheck())
        ->toBe(SpellCheckEnum::FALSE)
        ->and($obj->attributes['spellcheck'])->toBe(SpellCheckEnum::FALSE->value);
});

test('setSpellcheck throws for invalid string', function () {
    $obj = new TestSpellcheck();

    expect(fn () => $obj->setSpellcheck('maybe'))
        ->toThrow(InvalidArgumentException::class);
});
