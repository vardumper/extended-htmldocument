<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * HttpEquivEnum - Provides an HTTP header for the information/value of the content attribute.
 *
 * @subpackage Html\Enum
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/http-equiv/
 */

namespace Html\Enum;

enum HttpEquivEnum: string
{
    public const CONTENT_LANGUAGE = 'content-language';

    public const CONTENT_TYPE = 'content-type';

    public const DEFAULT_STYLE = 'default-style';

    public const REFRESH = 'refresh';

    public function getQualifiedName(): string
    {
        return 'http-equiv';
    }
}
