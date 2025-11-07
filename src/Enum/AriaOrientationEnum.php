<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * AriaOrientationEnum - Specifies whether an element is horizontal or vertical.
 * 
 * @generated 2025-11-07 16:53:19
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/aria-orientation/
 */

namespace Html\Enum;

enum AriaOrientationEnum: string {
    case HORIZONTAL = 'horizontal';
    case VERTICAL = 'vertical';
    case UNDEFINED = 'undefined';

    public static function getQualifiedName(): string
    {
        return 'aria-orientation';
    }
}
