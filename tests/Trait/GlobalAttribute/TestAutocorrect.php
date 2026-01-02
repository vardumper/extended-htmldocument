<?php

namespace Tests\Trait\GlobalAttribute;

use Html\Trait\GlobalAttribute\AutocorrectTrait;

class TestAutocorrect
{
    use AutocorrectTrait;

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
