<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * WrapEnum - 
 * 
 * @generated 2025-11-01 20:12:04
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/wrap/
 * @tutorial an example value can be soft
 */

namespace Html\Enum;

enum WrapEnum: string {
    case HARD = 'hard';
    case OFF = 'off';
    case SOFT = 'soft'; // default

    public static function getQualifiedName(): string
    {
        return 'wrap';
    }

    public static function getDefault(): self
    {
        return self::SOFT;
    }
}
