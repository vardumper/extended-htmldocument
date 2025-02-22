<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * RelEnum - Specifies the relationship between the current document and the linked document.
 *
 * @subpackage Html\Enum
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/rel/
 */

namespace Html\Enum;

enum RelEnum: string
{
    public const ALTERNATE = 'alternate';

    public const AUTHOR = 'author';

    public const BOOKMARK = 'bookmark';

    public const CANONICAL = 'canonical';

    public const HELP = 'help';

    public const ICON = 'icon';

    public const LICENSE = 'license';

    public const NEXT = 'next';

    public const NOFOLLOW = 'nofollow';

    public const NOREFERRER = 'noreferrer';

    public const PREFETCH = 'prefetch';

    public const PREV = 'prev';

    public const SEARCH = 'search';

    public const STYLESHEET = 'stylesheet';

    public const TAG = 'tag';

    public function getQualifiedName(): string
    {
        return 'rel';
    }
}
