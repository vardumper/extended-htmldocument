<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * TrAlignEnum - Specifies the horizontal alignment of each row cell. The possible enumerated values are left, center, right, justify, and char. When supported, the char value aligns the textual content on the character defined in the char attribute and on offset defined by the charoff attribute. Use the text-align CSS property instead, as this attribute is deprecated.
 * 
 * @generated 2025-11-07 17:10:16
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/align/
 */

namespace Html\Enum;

enum TrAlignEnum: string {
    case LEFT = 'left';
    case CENTER = 'center';
    case RIGHT = 'right';
    case JUSTIFY = 'justify';
    case CHAR = 'char';

    public static function getQualifiedName(): string
    {
        return 'align';
    }
}
