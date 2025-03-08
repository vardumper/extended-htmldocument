<?php

/**
 * AutoCapitalizeEnum - Controls automatic capitalization for text input (none, sentences, words, characters).
 *
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/autocapitalize/
 */

namespace Html\Enum;

enum AutoCapitalizeEnum: string
{
    case NONE = 'none';
    case SENTENCES = 'sentences';
    case WORDS = 'words';
    case CHARACTERS = 'characters';

    public static function getQualifiedName(): string
    {
        return 'autocapitalize';
    }
}
