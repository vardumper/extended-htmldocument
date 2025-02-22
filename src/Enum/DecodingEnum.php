<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * DecodingEnum - Specifies the decoding process applied to the image.
 *
 * @subpackage Html\Enum
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/decoding/
 */

namespace Html\Enum;

enum DecodingEnum: string
{
    public const ASYNC = 'async';

    public const AUTO = 'auto';

    public const SYNC = 'sync';

    public function getQualifiedName(): string
    {
        return 'decoding';
    }
}
