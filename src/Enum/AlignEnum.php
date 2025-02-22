<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * AlignEnum - Specifies the horizontal alignment of each row cell. The possible enumerated values are left, center, right, justify, and char. When supported, the char value aligns the textual content on the character defined in the char attribute and on offset defined by the charoff attribute. Use the text-align CSS property instead, as this attribute is deprecated.
 *
 * @subpackage Html\Enum
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/align/
 */

namespace Html\Enum;

enum AlignEnum: string
{
    public const LEFT = 'left';

    public const CENTER = 'center';

    public const RIGHT = 'right';

    public const JUSTIFY = 'justify';

    public const CHAR = 'char';

    public function getQualifiedName(): string
    {
        return 'align';
    }
}
