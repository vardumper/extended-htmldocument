<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * AriaHiddenEnum - Indicates whether the element is exposed to an accessibility API. Use with caution on interactive elements. Set to true only on decorative elements such as icons, or when nav isnt visible
 *
 * @generated 2025-12-31 00:30:17
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/aria-hidden/
 * @tutorial an example value can be false
 */

namespace Html\Enum;

enum AriaHiddenEnum: string
{
    case FALSE = 'false'; // default
    case TRUE = 'true';

    public static function getQualifiedName(): string
    {
        return 'aria-hidden';
    }

    public static function getDefault(): self
    {
        return self::FALSE;
    }
}
