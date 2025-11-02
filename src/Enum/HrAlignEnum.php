<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * HrAlignEnum - Specifies the horizontal alignment of the element.
 * 
 * @generated 2025-11-02 17:52:56
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/align/
 */

namespace Html\Enum;

enum HrAlignEnum: string {
    case CENTER = 'center';
    case JUSTIFY = 'justify';
    case LEFT = 'left';
    case RIGHT = 'right';

    public static function getQualifiedName(): string
    {
        return 'align';
    }
}
