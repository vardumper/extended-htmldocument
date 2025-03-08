<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * WrapEnum -
 *
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/wrap/
 * @tutorial an example value can be soft
 */

namespace Html\Enum;

enum WrapEnum: string
{
    case HARD = 'hard';
    case OFF = 'off';
    case SOFT = 'soft';

    public static function getQualifiedName(): string
    {
        return 'wrap';
    }

    public static function getDefault(): self
    {
        return self::SOFT;
    }
}
