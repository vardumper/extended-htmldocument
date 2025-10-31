<?php

/**
 * AutoCapitalizeEnum - Controls automatic capitalization for text input (none, sentences, words, characters).
 *
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see hhttps://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/translate
 */

namespace Html\Enum;

enum TranslateEnum: string
{
    case YES = 'yes';
    case NO = 'no';

    public static function getQualifiedName(): string
    {
        return 'translate';
    }
}
