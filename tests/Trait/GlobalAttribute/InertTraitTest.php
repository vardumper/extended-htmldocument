<?php

namespace Tests\Trait\GlobalAttribute;

test('setInert true sets delegated attribute and getInert returns true', function () {
    $obj = new TestInert();

    $obj->setInert(true);

    expect($obj->getInert())
        ->toBeTrue()
        ->and($obj->attributes['inert'])->toBe('true');
});

test('setInert false sets delegated attribute and getInert returns false', function () {
    $obj = new TestInert();

    $obj->setInert(false);

    expect($obj->getInert())
        ->toBeFalse()
        ->and($obj->attributes['inert'])->toBe('false');
});
