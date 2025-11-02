<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * TargetEnum - Specifies where to open the linked document.
 * 
 * @generated 2025-11-02 17:52:56
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/target/
 * @tutorial an example value can be _self
 */

namespace Html\Enum;

enum TargetEnum: string {
    case BLANK = '_blank';
    case PARENT = '_parent';
    case SELF = '_self'; // default
    case TOP = '_top';

    public static function getQualifiedName(): string
    {
        return 'target';
    }

    public static function getDefault(): self
    {
        return self::SELF;
    }
}
