<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * AriaDisabledEnum - Indicates that the element is perceivable but disabled, so it is not editable or otherwise operable.
 *
 * @generated 2026-01-21 21:02:30
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/aria-disabled/
 * @tutorial an example value can be false
 */

namespace Html\Enum;

enum AriaDisabledEnum: string
{
    case FALSE = 'false'; // default
    case TRUE = 'true';

    public static function getQualifiedName(): string
    {
        return 'aria-disabled';
    }

    public static function getDefault(): self
    {
        return self::FALSE;
    }
}
