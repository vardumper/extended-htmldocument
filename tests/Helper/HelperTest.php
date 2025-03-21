<?php

use Html\Enum\AlignEnum;
use Html\Helper\Helper;

test('is backed enum', function () {
    expect(Helper::isBackedEnum(AlignEnum::class))->toBe(false); // just a class string
    expect(Helper::isBackedEnum(AlignEnum::LEFT))->toBe(true); // enum value
    expect(Helper::isBackedEnum('string'))->toBe(false); //not an enum
});

test('get reserved words', function () {
    $expected = [
        '__halt_compiler',
        'abstract',
        'and',
        'array',
        'as',
        'break',
        'callable',
        'case',
        'catch',
        'class',
        'clone',
        'const',
        'continue',
        'declare',
        'default',
        'die',
        'do',
        'echo',
        'else',
        'elseif',
        'empty',
        'enddeclare',
        'endfor',
        'endforeach',
        'endif',
        'endswitch',
        'endwhile',
        'eval',
        'exit',
        'extends',
        'final',
        'finally',
        'for',
        'foreach',
        'function',
        'global',
        'goto',
        'if',
        'implements',
        'include',
        'include_once',
        'instanceof',
        'insteadof',
        'interface',
        'isset',
        'list',
        'namespace',
        'new',
        'or',
        'print',
        'private',
        'protected',
        'public',
        'require',
        'require_once',
        'return',
        'static',
        'switch',
        'throw',
        'trait',
        'try',
        'unset',
        'use',
        'var',
        'while',
        'xor',
        'yield',
        '__CLASS__',
        '__DIR__',
        '__FILE__',
        '__FUNCTION__',
        '__LINE__',
        '__METHOD__',
        '__NAMESPACE__',
        '__TRAIT__',
        'int',
        'float',
        'bool',
        'string',
        'mixed',
        'void',
        'null',
        'true',
        'false',
        'iterable',
        'resource',
        'numeric',
        'object',
    ];

    expect(Helper::getReservedWords())->toBe($expected);
});
