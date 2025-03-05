<?php

/**
 * SpellCheckEnum - Indicates whether the element is to have its spelling and grammar checked.
 *
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/autocapitalize/
 */

namespace Html\Enum;

enum SpellCheckEnum: string
{
    case TRUE = 'true';
    case FALSE = 'false';

    public static function getQualifiedName(): string
    {
        return 'spellcheck';
    }
}
