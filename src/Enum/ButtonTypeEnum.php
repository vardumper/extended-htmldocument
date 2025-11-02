<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * ButtonTypeEnum - Specifies the type of the button.
 * 
 * @generated 2025-11-02 15:57:23
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/type/
 */

namespace Html\Enum;

enum ButtonTypeEnum: string {
    case SUBMIT = 'submit';
    case RESET = 'reset';
    case BUTTON = 'button';

    public static function getQualifiedName(): string
    {
        return 'type';
    }
}
