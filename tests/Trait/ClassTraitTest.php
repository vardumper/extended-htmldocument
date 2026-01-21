<?php

use Html\Element\Inline\Anchor;
use Html\Enum\ClassEnum;

test('setClass accepts a ClassEnum', function () {
    $anchor = new Anchor();
    $anchor->setClass(ClassEnum::CONTRAST);

    expect((string) $anchor)
        ->toBe('<a class="contrast"></a>');
});

test('setClass accepts a multi-token ClassEnum value', function () {
    $anchor = new Anchor();
    $anchor->setClass(ClassEnum::SECONDARY_OUTLINE);

    expect((string) $anchor)
        ->toBe('<a class="secondary outline"></a>');
});

test('setClass accepts an array mixing strings and enums', function () {
    $anchor = new Anchor();
    $anchor->setClass([ClassEnum::SECONDARY, 'outline']);

    expect((string) $anchor)
        ->toBe('<a class="secondary outline"></a>');
});

test('setClass ignores empty values in arrays', function () {
    $anchor = new Anchor();
    $anchor->setClass(['', 'secondary', ' ']);

    expect((string) $anchor)
        ->toBe('<a class="secondary"></a>');
});
