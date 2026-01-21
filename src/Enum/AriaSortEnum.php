<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * AriaSortEnum - Defines the sorting order of a column.
 *
 * @generated 2026-01-21 21:02:30
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/aria-sort/
 * @tutorial an example value can be none
 */

namespace Html\Enum;

enum AriaSortEnum: string
{
    case NONE = 'none'; // default
    case ASCENDING = 'ascending';
    case DESCENDING = 'descending';
    case OTHER = 'other';

    public static function getQualifiedName(): string
    {
        return 'aria-sort';
    }

    public static function getDefault(): self
    {
        return self::NONE;
    }
}
