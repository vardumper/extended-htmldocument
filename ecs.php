<?php

use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use PhpCsFixer\Fixer\Whitespace\ArrayIndentationFixer;
use PhpCsFixer\Fixer\Whitespace\MethodChainingIndentationFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
        __DIR__ . '/bin',
        __FILE__,
    ])

    // add a single rule
    ->withRules([
        NoUnusedImportsFixer::class,
    ])
    ->withSets([
        'clean-code',
        'common',
        'psr12',
        'symplify',
    ])
    ->withParallel(true);
