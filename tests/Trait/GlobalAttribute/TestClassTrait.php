<?php

namespace Tests\Trait\GlobalAttribute;

use Html\Trait\GlobalAttribute\ClassTrait;

class TestClassTrait
{
    use ClassTrait;

    public ?string $className = null;
    public $delegated;

    public function __construct()
    {
        $this->delegated = $this;
    }
}
