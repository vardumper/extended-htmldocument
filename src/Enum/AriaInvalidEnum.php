<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * AriaInvalidEnum - Indicates that the value entered does not conform to the expected format.
 * 
 * @generated 2025-12-30 13:44:50
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/aria-invalid/
 * @tutorial an example value can be false
 */

namespace Html\Enum;

enum AriaInvalidEnum: string {
    case FALSE = 'false'; // default
    case TRUE = 'true';
    case GRAMMAR = 'grammar';
    case SPELLING = 'spelling';

    public static function getQualifiedName(): string
    {
        return 'aria-invalid';
    }

    public static function getDefault(): self
    {
        return self::FALSE;
    }
}
