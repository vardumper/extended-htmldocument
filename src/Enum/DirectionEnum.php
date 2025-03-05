<?php
/**
 * DirectionEnum - Specifies text direction (ltr, rtl, auto).
 *
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/direction
 */

namespace Html\Enum;

enum DirectionEnum: string {
    case LTR = 'ltr';
    case RTL = 'rtl';
    case AUTO = 'auto';

    public static function getQualifiedName(): string
    {
        return 'dir';
    }
}
