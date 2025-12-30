<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * FormtargetEnum - Specifies where to display the response after form submission. Can be a browsing context name or keyword (_self, _blank, _parent, _top). Only for submit buttons. Overrides the form's target attribute. Element-specific to button and input elements with type submit or image.
 * 
 * @generated 2025-12-30 13:44:50
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/formtarget/
 */

namespace Html\Enum;

enum FormtargetEnum: string {
    case SELF = '_self';
    case BLANK = '_blank';
    case PARENT = '_parent';
    case TOP = '_top';

    public static function getQualifiedName(): string
    {
        return 'formtarget';
    }
}
