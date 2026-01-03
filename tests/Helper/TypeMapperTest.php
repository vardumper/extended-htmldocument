<?php

use Html\Helper\TypeMapper;

it('maps types correctly', function ($input, $expected) {
    expect(TypeMapper::mapToPhpType($input))->toBe($expected);
})->with([
    ['string', 'string'],
    ['integer', 'int'],
    ['boolean', 'bool'],
    ['uri', 'string'],
    ['language_iso', 'string'],
    ['color', 'string'],
    ['datetime', 'string'],
    ['datetime-local', 'string'],
    ['date', 'string'],
    ['time', 'string'],
    ['month', 'string'],
    ['week', 'string'],
    ['number', 'int'],
    ['float', 'float'],
    ['script', 'string'],
    ['url', 'string'],
    ['email', 'string'],
    ['tel', 'string'],
    ['password', 'string'],
    ['hidden', 'bool|string'],
    ['image', 'string'],
    ['file', 'string'],
    ['unknown-type', 'unknown-type'],
]);
