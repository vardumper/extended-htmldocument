<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * TargetEnum - Specifies where to open the linked document.
 * 
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/target/
 * @tutorial an example value can be _self
 */

namespace Html\Enum;

enum TargetEnum: string {
    case _BLANK = '_blank';
    case _PARENT = '_parent';
    case _SELF = '_self';
    case _TOP = '_top';

    public static function getQualifiedName(): string
    {
        return 'target';
    }
}
