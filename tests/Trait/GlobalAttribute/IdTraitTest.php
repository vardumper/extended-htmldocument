<?php

namespace Tests\Trait\GlobalAttribute;

use InvalidArgumentException;

test('setId stores the value and sets delegated attribute', function () {
    $obj = new TestId();

    $obj->setId('my-id');

    expect($obj->getId())
        ->toBe('my-id')
        ->and($obj->attributes['id'])->toBe('my-id');
});

test('setId throws for id containing whitespace', function () {
    $obj = new TestId();

    expect(fn () => $obj->setId('bad id'))
        ->toThrow(InvalidArgumentException::class);
});

test('setId throws for empty string', function () {
    $obj = new TestId();

    expect(fn () => $obj->setId(''))
        ->toThrow(InvalidArgumentException::class);
});
