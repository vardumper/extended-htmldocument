<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * AriaPressedEnum - Indicates whether a toggle button is pressed (true, false, or mixed).
 *
 * @generated 2026-01-21 21:02:30
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/aria-pressed/
 */

namespace Html\Enum;

enum AriaPressedEnum: string
{
    case FALSE = 'false';
    case TRUE = 'true';
    case MIXED = 'mixed';
    case UNDEFINED = 'undefined';

    public static function getQualifiedName(): string
    {
        return 'aria-pressed';
    }
}
