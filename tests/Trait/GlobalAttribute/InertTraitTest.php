<?php

use Html\Trait\GlobalAttribute\InertTrait;

class TestInert
{
    use InertTrait;

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

test('setInert true sets delegated attribute and getInert returns true', function () {
    $obj = new TestInert();

    $obj->setInert(true);

    expect($obj->getInert())->toBeTrue()
        ->and($obj->attributes['inert'])->toBe('true');
});

test('setInert false sets delegated attribute and getInert returns false', function () {
    $obj = new TestInert();

    $obj->setInert(false);

    expect($obj->getInert())->toBeFalse()
        ->and($obj->attributes['inert'])->toBe('false');
});
