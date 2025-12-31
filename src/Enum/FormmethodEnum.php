<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * FormmethodEnum - Specifies the HTTP method to use when submitting the form. Only for submit buttons. Overrides the form's method attribute. Use "post" for sensitive data, "get" for idempotent operations, "dialog" to close dialog without submission. Element-specific to button and input elements with type submit or image.
 * 
 * @generated 2025-12-31 00:30:17
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/formmethod/
 * @tutorial an example value can be get
 */

namespace Html\Enum;

enum FormmethodEnum: string {
    case GET = 'get'; // default
    case POST = 'post';
    case DIALOG = 'dialog';

    public static function getQualifiedName(): string
    {
        return 'formmethod';
    }

    public static function getDefault(): self
    {
        return self::GET;
    }
}
