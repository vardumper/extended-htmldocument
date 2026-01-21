<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * AriaRequiredEnum - Specifies that an input field is required before form submission.
 *
 * @generated 2026-01-21 21:02:30
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/aria-required/
 * @tutorial an example value can be false
 */

namespace Html\Enum;

enum AriaRequiredEnum: string
{
    case FALSE = 'false'; // default
    case TRUE = 'true';

    public static function getQualifiedName(): string
    {
        return 'aria-required';
    }

    public static function getDefault(): self
    {
        return self::FALSE;
    }
}
