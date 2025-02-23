<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * DecodingEnum - Specifies the decoding process applied to the image.
 * 
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/decoding/
 */

namespace Html\Enum;

enum DecodingEnum: string {
    const ASYNC = 'async';
    const AUTO = 'auto';
    const SYNC = 'sync';

    public function getQualifiedName(): string
    {
        return 'decoding';
    }
}
