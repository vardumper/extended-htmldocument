<?php

declare(strict_types=1);

if (! function_exists('includeCwdVendorAutoloadIfExists')) {
    function includeCwdVendorAutoloadIfExists(array $alreadyLoadedAutoloadFiles): void
    {
        $cwdVendorAutoload = \getcwd() . '/vendor/autoload.php';
        if (! \is_file($cwdVendorAutoload)) {
            return;
        }
        loadIfNotLoadedYet($cwdVendorAutoload, $alreadyLoadedAutoloadFiles);
    }
}
if (! function_exists('includeDependencyOrRepositoryVendorAutoloadIfExists')) {
    function includeDependencyOrRepositoryVendorAutoloadIfExists(array $alreadyLoadedAutoloadFiles): void
    {
        // vendor is already loaded
        if (\class_exists(\Html\Delegator\HTMLDocumentDelegator::class)) {
            return;
        }
        $devVendorAutoload = __DIR__ . '/../vendor/autoload.php';
        if (! \is_file($devVendorAutoload)) {
            return;
        }
        loadIfNotLoadedYet($devVendorAutoload, $alreadyLoadedAutoloadFiles);
    }
}
if (! function_exists('autoloadProjectAutoloaderFile')) {
    function autoloadProjectAutoloaderFile(string $file, array $alreadyLoadedAutoloadFiles): void
    {
        $path = \dirname(__DIR__) . $file;
        if (! \is_file($path)) {
            return;
        }
        loadIfNotLoadedYet($path, $alreadyLoadedAutoloadFiles);
    }
}
if (! function_exists('loadIfNotLoadedYet')) {
    function loadIfNotLoadedYet(string $file, array &$alreadyLoadedAutoloadFiles): void
    {
        if (! \file_exists($file)) {
            return;
        }
        if (\in_array($file, $alreadyLoadedAutoloadFiles, \true)) {
            return;
        }
        $realPath = \realpath($file);
        if (! \is_string($realPath)) {
            return;
        }
        $alreadyLoadedAutoloadFiles[] = $realPath;
        require_once $file;
    }
}
