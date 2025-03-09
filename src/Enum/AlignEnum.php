<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * AlignEnum - Specifies the horizontal alignment of each row cell. The possible enumerated values are left, center, right, justify, and char. When supported, the char value aligns the textual content on the character defined in the char attribute and on offset defined by the charoff attribute. Use the text-align CSS property instead, as this attribute is deprecated.
 *
 * @generated 2025-03-09 20:34:45
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/align/
 */

namespace Html\Enum;

enum AlignEnum: string
{
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
