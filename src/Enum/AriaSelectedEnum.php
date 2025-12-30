<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * AriaSelectedEnum - Indicates whether an item is selected (e.g., in a list, table, or tree).
 * 
 * @generated 2025-12-30 13:44:50
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/aria-selected/
 */

namespace Html\Enum;

enum AriaSelectedEnum: string {
    case FALSE = 'false';
    case TRUE = 'true';
    case UNDEFINED = 'undefined';

    public static function getQualifiedName(): string
    {
        return 'aria-selected';
    }
}
