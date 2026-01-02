<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * AriaModalEnum - Specifies whether an element is a modal dialog that blocks interaction with other content.
 *
 * @generated 2025-12-31 00:30:17
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/aria-modal/
 * @tutorial an example value can be false
 */

namespace Html\Enum;

enum AriaModalEnum: string
{
    case FALSE = 'false'; // default
    case TRUE = 'true';

    public static function getQualifiedName(): string
    {
        return 'aria-modal';
    }

    public static function getDefault(): self
    {
        return self::FALSE;
    }
}
