<?php

/**
 * ContentEditableEnum - Controls contenteditable behavior for elements (true, false, unspecified).
 *
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/contenteditable
 */

namespace Html\Enum;

enum ContentEditableEnum: string
{
    case TRUE = 'true';
    case FALSE = 'false';
    case INHERIT = 'inherit';

    public static function getQualifiedName(): string
    {
        return 'contenteditable';
    }
}
