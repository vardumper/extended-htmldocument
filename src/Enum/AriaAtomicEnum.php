<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * AriaAtomicEnum - Indicates whether assistive technologies should present the entire region as a whole when changes occur.
 *
 * @generated 2026-01-21 21:02:30
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/aria-atomic/
 * @tutorial an example value can be false
 */

namespace Html\Enum;

enum AriaAtomicEnum: string
{
    case FALSE = 'false'; // default
    case TRUE = 'true';

    public static function getQualifiedName(): string
    {
        return 'aria-atomic';
    }

    public static function getDefault(): self
    {
        return self::FALSE;
    }
}
