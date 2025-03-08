<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * TypeOlEnum - Specifies the numbering type of the ordered list.
 * 
 * @generated 2025-03-08 16:37:55
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/type/
 * @tutorial an example value can be 1
 */

namespace Html\Enum;

enum TypeOlEnum: string {
    case LA = 'a';
    case UA = 'A';
    case LI = 'i';
    case UI = 'I';
    case N1 = '1';

    public static function getQualifiedName(): string
    {
        return 'type';
    }

    public static function getDefault(): self
    {
        return self::N1;
    }
}
