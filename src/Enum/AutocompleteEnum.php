<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * AutocompleteEnum - Specifies whether a form or input field should have autocomplete enabled. Default is on.
 * 
 * @generated 2025-12-30 13:44:50
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/autocomplete/
 * @tutorial an example value can be on
 */

namespace Html\Enum;

enum AutocompleteEnum: string {
    case OFF = 'off';
    case ON = 'on'; // default

    public static function getQualifiedName(): string
    {
        return 'autocomplete';
    }

    public static function getDefault(): self
    {
        return self::ON;
    }
}
