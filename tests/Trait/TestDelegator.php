<?php

namespace Tests\Trait;

use Html\Trait\DelegatorTrait;

class TestDelegator
{
    use DelegatorTrait;

    public object $delegated;

    public function __construct()
    {
        $this->delegated = new DummyDelegated();
    }
}
