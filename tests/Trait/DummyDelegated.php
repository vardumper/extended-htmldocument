<?php

namespace Tests\Trait;

use stdClass;

class DummyDelegated
{
    public string $fooProp = 'bar';

    public function sum(int $a, int $b): int
    {
        return $a + $b;
    }

    public function methodTakesObject(stdClass $obj): string
    {
        return $obj->name ?? 'none';
    }

    public function typeStrict(int $x): int
    {
        return $x * 2;
    }
}
