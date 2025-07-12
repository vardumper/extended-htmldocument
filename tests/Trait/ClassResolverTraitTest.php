<?php

use Html\Trait\ClassResolverTrait;

// Create a test class that uses the trait
class TestClassResolver
{
    use ClassResolverTrait;

    public function callGetProjectRoot()
    {
        return $this->getProjectRoot();
    }

    public function callLoadAllRelevantPhpFiles()
    {
        return $this->loadAllRelevantPhpFiles();
    }
}

test('can get project root directory', function () {
    $testResolver = new TestClassResolver();

    $projectRoot = $testResolver->callGetProjectRoot();

    expect($projectRoot)
        ->toBeString()
        ->and($projectRoot)
        ->not->toBeEmpty()
        ->and(is_dir($projectRoot))
        ->toBeTrue();
});

test('can load all relevant PHP files without throwing exception', function () {
    $testResolver = new TestClassResolver();

    expect(fn () => $testResolver->callLoadAllRelevantPhpFiles())
        ->not->toThrow(Exception::class);
});

test('project root contains vendor directory', function () {
    $testResolver = new TestClassResolver();

    $vendorPath = $testResolver->callGetProjectRoot();
    expect(is_dir($vendorPath))
        ->toBeTrue();
});

test('project root contains autoload.php', function () {
    $testResolver = new TestClassResolver();

    $projectRoot = $testResolver->callGetProjectRoot();
    $autoloadPath = $projectRoot . '/autoload.php';

    expect(file_exists($autoloadPath))
        ->toBeTrue();
});
