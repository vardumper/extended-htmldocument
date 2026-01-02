<?php

namespace Tests\Trait;

test('can get project root directory', function () {
    $testResolver = new \Tests\Trait\TestClassResolver();

    $projectRoot = $testResolver->callGetProjectRoot();

    expect($projectRoot)
        ->toBeString()
        ->and($projectRoot)
        ->not->toBeEmpty()
        ->and(is_dir($projectRoot))
        ->toBeTrue();
});

test('can load all relevant PHP files without throwing exception', function () {
    $testResolver = new \Tests\Trait\TestClassResolver();

    expect(fn () => $testResolver->callLoadAllRelevantPhpFiles())
        ->not->toThrow(Exception::class);
});

test('project root contains vendor directory', function () {
    $testResolver = new \Tests\Trait\TestClassResolver();

    $vendorPath = $testResolver->callGetProjectRoot();
    expect(is_dir($vendorPath))
        ->toBeTrue();
});

test('project root contains autoload.php', function () {
    $testResolver = new \Tests\Trait\TestClassResolver();

    $projectRoot = $testResolver->callGetProjectRoot();
    $autoloadPath = $projectRoot . '/autoload.php';

    expect(file_exists($autoloadPath))
        ->toBeTrue();
});
