<?php

use Html\Trait\GlobalAttribute\PartTrait;

class TestPart
{
    use PartTrait;
}

test('setPart stores the value and getPart returns it', function () {
    $obj = new TestPart();

    $obj->setPart('header');

    expect($obj->getPart())->toBe('header');
});
