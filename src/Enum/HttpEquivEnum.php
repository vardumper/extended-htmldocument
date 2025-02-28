<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * HttpEquivEnum - Provides an HTTP header for the information/value of the content attribute.
 * 
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/http-equiv/
 */

namespace Html\Enum;

enum HttpEquivEnum: string {
    const CONTENT_LANGUAGE = 'content-language';
    const CONTENT_TYPE = 'content-type';
    const DEFAULT_STYLE = 'default-style';
    const REFRESH = 'refresh';

    public static function getQualifiedName(): string
    {
        return 'http-equiv';
    }
}
