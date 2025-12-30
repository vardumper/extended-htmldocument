<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * AriaAutocompleteEnum - Specifies autocomplete behavior for input fields.
 * 
 * @generated 2025-12-30 13:44:50
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/aria-autocomplete/
 * @tutorial an example value can be none
 */

namespace Html\Enum;

enum AriaAutocompleteEnum: string {
    case NONE = 'none'; // default
    case INLINE = 'inline';
    case LIST = 'list';
    case BOTH = 'both';

    public static function getQualifiedName(): string
    {
        return 'aria-autocomplete';
    }

    public static function getDefault(): self
    {
        return self::NONE;
    }
}
