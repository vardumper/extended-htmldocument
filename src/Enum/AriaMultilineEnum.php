<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * AriaMultilineEnum - Indicates whether the input allows multiple lines of text.
 * 
 * @generated 2025-12-31 00:08:48
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/aria-multiline/
 * @tutorial an example value can be true
 */

namespace Html\Enum;

enum AriaMultilineEnum: string {
    case FALSE = 'false';
    case TRUE = 'true'; // default

    public static function getQualifiedName(): string
    {
        return 'aria-multiline';
    }

    public static function getDefault(): self
    {
        return self::TRUE;
    }
}
