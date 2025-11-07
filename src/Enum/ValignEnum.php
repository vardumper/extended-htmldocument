<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * ValignEnum - Specifies the vertical alignment of each row cell. The possible enumerated values are baseline, bottom, middle, and top. Use the vertical-align CSS property instead, as this attribute is deprecated.
 * 
 * @generated 2025-11-07 16:53:19
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/valign/
 */

namespace Html\Enum;

enum ValignEnum: string {
    case BASELINE = 'baseline';
    case BOTTOM = 'bottom';
    case MIDDLE = 'middle';
    case TOP = 'top';

    public static function getQualifiedName(): string
    {
        return 'valign';
    }
}
