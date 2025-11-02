<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * DecodingEnum - Specifies the decoding process applied to the image.
 * 
 * @generated 2025-11-02 15:57:23
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/decoding/
 */

namespace Html\Enum;

enum DecodingEnum: string {
    case ASYNC = 'async';
    case AUTO = 'auto';
    case SYNC = 'sync';

    public static function getQualifiedName(): string
    {
        return 'decoding';
    }
}
