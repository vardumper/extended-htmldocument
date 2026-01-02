<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * ARoleEnum - Defines the semantic purpose of an element for assistive technologies.
 *
 * @generated 2025-11-01 18:45:00
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/role/
 */

namespace Html\Enum;

enum ARoleEnum: string
{
    case BUTTON = 'button';
    case DIALOG = 'dialog';
    case LINK = 'link';
    case LISTITEM = 'listitem';
    case MENUITEM = 'menuitem';
    case NONE = 'none';
    case TOOLTIP = 'tooltip';

    public static function getQualifiedName(): string
    {
        return 'role';
    }
}
