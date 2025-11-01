<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * TypeScriptEnum - Specifies the media type of the linked resource.
 *
 * @generated 2025-11-01 14:18:41
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/type/
 * @tutorial an example value can be text/javascript
 */

namespace Html\Enum;

enum TypeScriptEnum: string
{
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
