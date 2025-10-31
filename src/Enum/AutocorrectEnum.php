<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * AutocorrectEnum - Specifies controls whether autocorrection of editable text is enabled for spelling and/or punctuation errors. Default is on.
 *
 * @generated 2025-10-31 13:14:52
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/autocorrect/
 * @tutorial an example value can be on
 */

namespace Html\Enum;

enum AutocorrectEnum: string
{
    case OFF = 'off';
    case ON = 'on'; // default

    public static function getQualifiedName(): string
    {
        return 'autocorrect';
    }

    public static function getDefault(): self
    {
        return self::ON;
    }
}
