<?php

use Html\Trait\DelegatorTrait;
use BadMethodCallException;
use InvalidArgumentException;

class DummyDelegated {
    public string $fooProp = 'bar';

    public function sum(int $a, int $b): int {
        return $a + $b;
    }

    public function methodTakesObject(\stdClass $obj): string {
        return $obj->name ?? 'none';
    }

    public function typeStrict(int $x): int {
        return $x * 2;
    }
}

class TestDelegator
{
    use DelegatorTrait;

    public object $delegated;

    public function __construct()
    {
        $this->delegated = new DummyDelegated();
    }
}

test('__call delegates method calls and returns result', function () {
    $t = new TestDelegator();

    $result = $t->sum(2, 3);

    expect($result)->toBe(5);
});

test('__call replaces delegator arg with delegated object when passed', function () {
    $t = new TestDelegator();

    $other = new TestDelegator();
    $other->delegated = new \stdClass();
    $other->delegated->name = 'abc';

    $res = $t->methodTakesObject($other);

    expect($res)->toBe('abc');
});

test('__call throws BadMethodCallException when call fails due to type error', function () {
    $t = new TestDelegator();

    expect(fn () => $t->typeStrict('not-int'))
        ->toThrow(BadMethodCallException::class);
});

test('__get returns delegated property value and throws when missing', function () {
    $t = new TestDelegator();

    expect($t->fooProp)->toBe('bar');
    expect(fn () => $t->missingProp)->toThrow(InvalidArgumentException::class);
});

test('__set sets delegated property and throws when missing', function () {
    $t = new TestDelegator();

    $t->fooProp = 'changed';
    expect($t->fooProp)->toBe('changed');

    expect(fn () => ($t->unknown = 'x'))->toThrow(InvalidArgumentException::class);
});
