<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * ScriptTypeEnum - Specifies the media type of the linked resource.
 * 
 * @generated 2025-12-31 00:08:48
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/type/
 * @tutorial an example value can be text/javascript
 */

namespace Html\Enum;

enum ScriptTypeEnum: string {
    case TEXT_JAVASCRIPT = 'text/javascript'; // default
    case MODULE = 'module';

    public static function getQualifiedName(): string
    {
        return 'type';
    }

    public static function getDefault(): self
    {
        return self::TEXT_JAVASCRIPT;
    }
}
