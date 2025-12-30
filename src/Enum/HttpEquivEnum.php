<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * HttpEquivEnum - Provides an HTTP header for the information/value of the content attribute.
 * 
 * @generated 2025-12-30 13:44:50
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/http-equiv/
 */

namespace Html\Enum;

enum HttpEquivEnum: string {
    case CONTENT_LANGUAGE = 'content-language';
    case CONTENT_TYPE = 'content-type';
    case DEFAULT_STYLE = 'default-style';
    case REFRESH = 'refresh';

    public static function getQualifiedName(): string
    {
        return 'http-equiv';
    }
}
