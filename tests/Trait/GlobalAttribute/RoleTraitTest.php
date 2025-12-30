<?php

use Html\Trait\GlobalAttribute\RoleTrait;

class TestRole
{
    use RoleTrait;
}

test('setRole stores the value and getRole returns it', function () {
    $obj = new TestRole();

    $obj->setRole('button');

    expect($obj->getRole())->toBe('button');
});
