<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * HttpEquivEnum - Provides an HTTP header for the information/value of the content attribute.
 *
 * @generated 2025-10-19 18:53:35
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/http-equiv/
 */

namespace Html\Enum;

enum HttpEquivEnum: string
{
    case CONTENT_LANGUAGE = 'content-language';
    case CONTENT_TYPE = 'content-type';
    case DEFAULT_STYLE = 'default-style';
    case REFRESH = 'refresh';

    public static function getQualifiedName(): string
    {
        return 'http-equiv';
    }
}
