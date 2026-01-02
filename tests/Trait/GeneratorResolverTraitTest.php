<?php

namespace Tests\Trait;

test('getGenerators returns instances of annotated generators by name', function () {
    $r = new TestGeneratorResolver();

    // ensure test generator implementation is autoloaded
    class_exists(\Tests\Trait\TestGeneratorImplementation::class);

    $result = $r->callGetGenerators(['testgen']);

    expect(array_key_exists('testgen', $result))
        ->toBeTrue();
    expect($result['testgen'])->toBeInstanceOf(\Tests\Trait\TestGeneratorImplementation::class);
});
