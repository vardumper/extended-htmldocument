<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * AriaExpandedEnum - Indicates whether a collapsible UI element is expanded (true) or collapsed (false).
 * 
 * @generated 2025-12-31 00:08:48
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/aria-expanded/
 */

namespace Html\Enum;

enum AriaExpandedEnum: string {
    case FALSE = 'false';
    case TRUE = 'true';
    case UNDEFINED = 'undefined';

    public static function getQualifiedName(): string
    {
        return 'aria-expanded';
    }
}
