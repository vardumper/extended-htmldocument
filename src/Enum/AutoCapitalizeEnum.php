<?php
/**
 * AutoCapitalizeEnum - Controls automatic capitalization for text input (none, sentences, words, characters).
 *
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/autocapitalize/
 */

namespace Html\Enum;
/*
* @todo sounds like its an enum
* none         No automatic capitalization.
* sentences	Capitalizes the first letter of each sentence.
* words	    Capitalizes the first letter of each word.
* characters	Capitalizes every character (all uppercase).
*/
enum AutoCapitalizeEnum: string {
    case NONE = 'none';
    case SENTENCES = 'sentences';
    case WORDS = 'words';
    case CHARACTERS = 'characters';

    public static function getQualifiedName(): string
    {
        return 'autocapitalize';
    }
}
