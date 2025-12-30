<?php

namespace Tests\Trait\GlobalAttribute;

use Html\Trait\GlobalAttribute\PartTrait;


test('setPart stores the value and getPart returns it', function () {
    $obj = new TestPart();

    $obj->setPart('header');

    expect($obj->getPart())->toBe('header');
});
