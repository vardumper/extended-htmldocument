<?php

namespace Tests\Trait\GlobalAttribute;

test('setIs stores the value and getIs returns it', function () {
    $obj = new TestIs();

    $obj->setIs('custom-element');

    expect($obj->getIs())
        ->toBe('custom-element');
});
