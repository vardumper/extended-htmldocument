<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * EnctypeEnum - Specifies how form data should be encoded before sending it to a server. Only used if the method attribute is set to post. Default is application/x-www-form-urlencoded.
 *
 * @generated 2025-10-19 18:53:35
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/enctype/
 */

namespace Html\Enum;

enum EnctypeEnum: string
{
    case APPLICATION_X_WWW_FORM_URLENCODED = 'application/x-www-form-urlencoded';
    case MULTIPART_FORM_DATA = 'multipart/form-data';
    case TEXT_PLAIN = 'text/plain';

    public static function getQualifiedName(): string
    {
        return 'enctype';
    }
}
