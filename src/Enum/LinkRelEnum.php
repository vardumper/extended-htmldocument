<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * LinkRelEnum - Specifies the relationship between the current document and the linked document.
 * 
 * @generated 2025-12-30 13:44:50
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/rel/
 */

namespace Html\Enum;

enum LinkRelEnum: string {
    case ALTERNATE = 'alternate';
    case AUTHOR = 'author';
    case BOOKMARK = 'bookmark';
    case CANONICAL = 'canonical';
    case HELP = 'help';
    case ICON = 'icon';
    case LICENSE = 'license';
    case MANIFEST = 'manifest';
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
