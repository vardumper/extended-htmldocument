<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * AriaBusyEnum - The aria-busy attribute is used to indicate whether an element is currently busy or not.
 * 
 * @generated 2025-11-01 20:12:04
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/aria-busy/
 * @tutorial an example value can be false
 */

namespace Html\Enum;

enum AriaBusyEnum: string {
    case TRUE = 'true';
    case FALSE = 'false'; // default

    public static function getQualifiedName(): string
    {
        return 'aria-busy';
    }

    public static function getDefault(): self
    {
        return self::FALSE;
    }
}
