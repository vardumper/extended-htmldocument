<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * AriaCheckedEnum - Defines the checked state for checkboxes, radio buttons, or toggle switches.
 *
 * @generated 2025-12-31 00:30:17
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/aria-checked/
 */

namespace Html\Enum;

enum AriaCheckedEnum: string
{
    case FALSE = 'false';
    case TRUE = 'true';
    case MIXED = 'mixed';
    case UNDEFINED = 'undefined';

    public static function getQualifiedName(): string
    {
        return 'aria-checked';
    }
}
