<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * TypeEnum - Specifies the media type of the linked resource.
 * 
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/type/
 */

namespace Html\Enum;

enum TypeEnum: string {
    case TEXT = 'text';
    case PASSWORD = 'password';
    case CHECKBOX = 'checkbox';
    case RADIO = 'radio';
    case BUTTON = 'button';
    case FILE = 'file';
    case HIDDEN = 'hidden';
    case IMAGE = 'image';
    case EMAIL = 'email';
    case URL = 'url';
    case NUMBER = 'number';
    case RANGE = 'range';
    case DATE = 'date';
    case TIME = 'time';
    case SUBMIT = 'submit';
    case RESET = 'reset';

    public static function getQualifiedName(): string
    {
        return 'type';
    }
}
