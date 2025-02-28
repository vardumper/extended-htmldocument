<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * TypeEnum - Specifies the media type of the linked resource.
 *
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/type/
 */

namespace Html\Enum;

enum TypeEnum: string {
    const TEXT = 'text';
    const PASSWORD = 'password';
    const CHECKBOX = 'checkbox';
    const RADIO = 'radio';
    const BUTTON = 'button';
    const FILE = 'file';
    const HIDDEN = 'hidden';
    const IMAGE = 'image';
    const EMAIL = 'email';
    const URL = 'url';
    const NUMBER = 'number';
    const RANGE = 'range';
    const DATE = 'date';
    const TIME = 'time';
    const SUBMIT = 'submit';
    const RESET = 'reset';

    public static function getQualifiedName(): string
    {
        return 'type';
    }
}
