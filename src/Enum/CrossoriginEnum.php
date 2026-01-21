<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * CrossoriginEnum - Specifies how the element handles cross-origin requests.
 *
 * @generated 2026-01-21 21:02:30
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
