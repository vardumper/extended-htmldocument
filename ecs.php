<?php

use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withPaths([__DIR__ . '/src', __DIR__ . '/tests', __DIR__ . '/bin', __FILE__])

    // add a single rule
    ->withRules([NoUnusedImportsFixer::class])
    ->withSets([
        'vendor/symplify/easy-coding-standard/config/set/clean-code.php',
        'vendor/symplify/easy-coding-standard/config/set/common.php',
        'vendor/symplify/easy-coding-standard/config/set/psr12.php',
        'vendor/symplify/easy-coding-standard/config/set/symplify.php',
    ])
    ->withParallel(1);
