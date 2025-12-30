<?php

namespace Tests\Trait;

use Html\Trait\GeneratorResolverTrait;
use Html\Trait\ClassResolverTrait;
use Html\Mapping\TemplateGenerator;
use Html\Interface\TemplateGeneratorInterface;


test('getGenerators returns instances of annotated generators by name', function () {
    $r = new TestGeneratorResolver();

    // ensure test generator implementation is autoloaded
    class_exists(\Tests\Trait\TestGeneratorImplementation::class);

    $result = $r->callGetGenerators(['testgen']);

    expect(array_key_exists('testgen', $result))->toBeTrue();
    expect($result['testgen'])->toBeInstanceOf(\Tests\Trait\TestGeneratorImplementation::class);
});
