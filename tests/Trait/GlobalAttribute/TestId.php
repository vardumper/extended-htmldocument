<?php

namespace Tests\Trait\GlobalAttribute;

use Html\Trait\GlobalAttribute\IdTrait;

class TestId
{
    use IdTrait;

    public ?string $id = null;
    public array $attributes = [];
    public $delegated;

    public function __construct()
    {
        $this->delegated = $this;
    }

    public function setAttribute(string $name, string $value)
    {
        $this->attributes[$name] = $value;
        return $this;
    }
}
