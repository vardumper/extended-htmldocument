<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * AriaMultiselectableEnum - Defines whether multiple items can be selected in a listbox, grid, or tree.
 * 
 * @generated 2025-11-07 17:10:16
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/aria-multiselectable/
 * @tutorial an example value can be false
 */

namespace Html\Enum;

enum AriaMultiselectableEnum: string {
    case FALSE = 'false'; // default
    case TRUE = 'true';

    public static function getQualifiedName(): string
    {
        return 'aria-multiselectable';
    }

    public static function getDefault(): self
    {
        return self::FALSE;
    }
}
