<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * AriaRequiredEnum - Specifies that an input field is required before form submission.
 * 
 * @generated 2025-12-30 13:44:50
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/aria-required/
 * @tutorial an example value can be false
 */

namespace Html\Enum;

enum AriaRequiredEnum: string {
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
