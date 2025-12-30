<?php

use Html\Trait\GlobalAttribute\SpellcheckTrait;
use Html\Enum\SpellCheckEnum;

class TestSpellcheck
{
    use SpellcheckTrait;

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

test('setSpellcheck true sets TRUE and delegated attr', function () {
    $obj = new TestSpellcheck();

    $obj->setSpellcheck(true);

    expect($obj->getSpellcheck())->toBe(SpellCheckEnum::TRUE)
        ->and($obj->attributes['spellcheck'])->toBe(SpellCheckEnum::TRUE->value);
});

test('setSpellcheck "false" sets FALSE via string', function () {
    $obj = new TestSpellcheck();

    $obj->setSpellcheck('false');

    expect($obj->getSpellcheck())->toBe(SpellCheckEnum::FALSE)
        ->and($obj->attributes['spellcheck'])->toBe(SpellCheckEnum::FALSE->value);
});

test('setSpellcheck throws for invalid string', function () {
    $obj = new TestSpellcheck();

    expect(fn () => $obj->setSpellcheck('maybe'))
        ->toThrow(InvalidArgumentException::class);
});
