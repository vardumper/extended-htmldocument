<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * StyleTypeEnum - Specifies the media type of the inline styles.
 * 
 * @generated 2025-11-05 11:58:47
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/type/
 * @tutorial an example value can be text/css
 */

namespace Html\Enum;

enum StyleTypeEnum: string {
    case TEXT_CSS = 'text/css'; // default

    public static function getQualifiedName(): string
    {
        return 'type';
    }

    public static function getDefault(): self
    {
        return self::TEXT_CSS;
    }
}
