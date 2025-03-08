<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * AutocompleteEnum -
 *
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/autocomplete/
 * @tutorial an example value can be on
 */

namespace Html\Enum;

enum AutocompleteEnum: string
{
    case OFF = 'off';
    case ON = 'on';

    public static function getQualifiedName(): string
    {
        return 'autocomplete';
    }

    public static function getDefault(): self
    {
        return self::ON;
    }
}
