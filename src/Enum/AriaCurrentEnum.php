<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * AriaCurrentEnum - Indicates the current item within a container or set of related elements.
 * 
 * @generated 2025-11-02 15:57:23
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/aria-current/
 * @tutorial an example value can be false
 */

namespace Html\Enum;

enum AriaCurrentEnum: string {
    case FALSE = 'false'; // default
    case PAGE = 'page';
    case STEP = 'step';
    case LOCATION = 'location';
    case DATE = 'date';
    case TIME = 'time';
    case TRUE = 'true';

    public static function getQualifiedName(): string
    {
        return 'aria-current';
    }

    public static function getDefault(): self
    {
        return self::FALSE;
    }
}
