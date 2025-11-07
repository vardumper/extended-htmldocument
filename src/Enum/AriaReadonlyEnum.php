<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * AriaReadonlyEnum - Marks an input field as read-only but still selectable and focusable.
 * 
 * @generated 2025-11-07 16:53:19
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/aria-readonly/
 * @tutorial an example value can be false
 */

namespace Html\Enum;

enum AriaReadonlyEnum: string {
    case FALSE = 'false'; // default
    case TRUE = 'true';

    public static function getQualifiedName(): string
    {
        return 'aria-readonly';
    }

    public static function getDefault(): self
    {
        return self::FALSE;
    }
}
