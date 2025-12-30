<?php

namespace Tests\Trait\GlobalAttribute;

use Html\Trait\GlobalAttribute\HiddenTrait;
use InvalidArgumentException;


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

test('setHidden "true" string sets delegated attribute and getHidden returns true', function () {
    $obj = new TestHidden();

    $obj->setHidden('true');

    expect($obj->getHidden())->toBeTrue()
        ->and($obj->attributes['hidden'])->toBe('true');
});

test('setHidden "false" string does not set attribute', function () {
    $obj = new TestHidden();

    $obj->setHidden('false');

    expect(array_key_exists('hidden', $obj->attributes))->toBeFalse();
});

test('setHidden throws on invalid string', function () {
    $obj = new TestHidden();

    expect(fn () => $obj->setHidden('maybe'))
        ->toThrow(InvalidArgumentException::class);
});
