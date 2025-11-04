<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * FormenctypeEnum - Specifies how form data should be encoded when submitting to the server. Only for submit buttons. Overrides the form's enctype attribute. Element-specific to button and input elements with type submit or image.
 *
 * @generated 2025-11-02 22:39:29
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/formenctype/
 * @tutorial an example value can be application/x-www-form-urlencoded
 */

namespace Html\Enum;

enum FormenctypeEnum: string
{
    case APPLICATION_X_WWW_FORM_URLENCODED = 'application/x-www-form-urlencoded'; // default
    case MULTIPART_FORM_DATA = 'multipart/form-data';
    case TEXT_PLAIN = 'text/plain';

    public static function getQualifiedName(): string
    {
        return 'formenctype';
    }

    public static function getDefault(): self
    {
        return self::APPLICATION_X_WWW_FORM_URLENCODED;
    }
}
