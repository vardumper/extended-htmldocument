<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * TypeInputEnum - Specifies the type of the input. Defaults to text if the attribute is omitted
 *
 * @generated 2025-10-23 23:06:19
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/type/
 * @tutorial an example value can be text
 */

namespace Html\Enum;

enum TypeInputEnum: string
{
    case BUTTON = 'button';
    case CHECKBOX = 'checkbox';
    case COLOR = 'color';
    case DATE = 'date';
    case DATETIME_LOCAL = 'datetime-local';
    case EMAIL = 'email';
    case FILE = 'file';
    case HIDDEN = 'hidden';
    case IMAGE = 'image';
    case MONTH = 'month';
    case NUMBER = 'number';
    case PASSWORD = 'password';
    case RADIO = 'radio';
    case RANGE = 'range';
    case RESET = 'reset';
    case SEARCH = 'search';
    case SUBMIT = 'submit';
    case TEL = 'tel';
    case TEXT = 'text'; // default
    case TIME = 'time';
    case URL = 'url';
    case WEEK = 'week';

    public static function getQualifiedName(): string
    {
        return 'type';
    }

    public static function getDefault(): self
    {
        return self::TEXT;
    }
}
