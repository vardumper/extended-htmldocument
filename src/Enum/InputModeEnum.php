<?php

/**
 * InputModeEnum - Controls input mode for on-screen keyboards (none, text, decimal, numeric, email, search).
 *
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/inputmode/
 */

namespace Html\Enum;

enum InputModeEnum: string
{
    case NONE = 'none';
    case TEXT = 'text';
    case DECIMAL = 'decimal';
    case NUMERIC = 'numeric';
    case EMAIL = 'email';
    case TEL = 'tel';
    case URL = 'url';
    case SEARCH = 'search';

    public static function getQualifiedName(): string
    {
        return 'inputmode';
    }
}
