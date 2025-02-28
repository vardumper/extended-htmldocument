<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * TargetEnum - Specifies where to open the linked document.
 * 
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/target/
 * @tutorial an example value can be _self
 */

namespace Html\Enum;

enum TargetEnum: string {
    const _BLANK = '_blank';
    const _PARENT = '_parent';
    const _SELF = '_self';
    const _TOP = '_top';

    public static function getQualifiedName(): string
    {
        return 'target';
    }
}
