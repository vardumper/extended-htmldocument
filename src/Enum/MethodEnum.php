<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * MethodEnum - 
 * 
 * @generated 2025-12-30 13:44:50
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/method/
 * @tutorial an example value can be get
 */

namespace Html\Enum;

enum MethodEnum: string {
    case GET = 'get'; // default
    case POST = 'post';

    public static function getQualifiedName(): string
    {
        return 'method';
    }

    public static function getDefault(): self
    {
        return self::GET;
    }
}
