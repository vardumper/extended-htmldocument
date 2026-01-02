<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * CrossoriginEnum - Specifies how the element handles cross-origin requests.
 *
 * @generated 2025-12-31 00:30:17
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/crossorigin/
 */

namespace Html\Enum;

enum CrossoriginEnum: string
{
    case ANONYMOUS = 'anonymous';
    case USE_CREDENTIALS = 'use-credentials';

    public static function getQualifiedName(): string
    {
        return 'crossorigin';
    }
}
