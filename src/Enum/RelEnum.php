<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * RelEnum - Specifies the relationship between the current document and the linked document.
 *
 * @generated 2025-12-31 00:30:17
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/rel/
 */

namespace Html\Enum;

enum RelEnum: string
{
    case ALTERNATE = 'alternate';
    case AUTHOR = 'author';
    case BOOKMARK = 'bookmark';
    case CANONICAL = 'canonical';
    case HELP = 'help';
    case ICON = 'icon';
    case LICENSE = 'license';
    case NEXT = 'next';
    case NOFOLLOW = 'nofollow';
    case NOREFERRER = 'noreferrer';
    case PREFETCH = 'prefetch';
    case PREV = 'prev';
    case SEARCH = 'search';
    case STYLESHEET = 'stylesheet';
    case TAG = 'tag';

    public static function getQualifiedName(): string
    {
        return 'rel';
    }
}
