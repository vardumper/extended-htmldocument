<?php

namespace Tests\Trait\GlobalAttribute;

use Html\Trait\GlobalAttribute\ClassTrait;


test('setClass with string sets className and delegated className', function () {
    $obj = new TestClassTrait();

    $obj->setClass('foo bar');

    expect($obj->getClass())->toBe('foo bar')
        ->and($obj->delegated->className)->toBe('foo bar');
});

test('setClass with array sets sanitized className', function () {
    $obj = new TestClassTrait();

    $obj->setClass(['one', 'two']);

    expect($obj->getClass())->toBe('one two')
        ->and($obj->delegated->className)->toBe('one two');
});

test('setClass with empty string does not set className', function () {
    $obj = new TestClassTrait();

    $obj->setClass('');

    expect($obj->getClass())->toBeNull();
});

test('aliases getClassName/getClasses return the same value', function () {
    $obj = new TestClassTrait();

    $obj->setClass('alpha');

    expect($obj->getClassName())->toBe('alpha')
        ->and($obj->getClasses())->toBe('alpha');
});
