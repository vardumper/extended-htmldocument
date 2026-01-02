<?php

namespace Tests\Trait\GlobalAttribute;

test('setRole stores the value and getRole returns it', function () {
    $obj = new TestRole();

    $obj->setRole('button');

    expect($obj->getRole())
        ->toBe('button');
});
