<?php

namespace Tests\Trait\GlobalAttribute;

use Html\Trait\GlobalAttribute\SpellcheckTrait;
use Html\Enum\SpellCheckEnum;

class TestSpellcheck
{
    use SpellcheckTrait;

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
