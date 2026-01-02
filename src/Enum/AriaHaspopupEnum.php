<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * AriaHaspopupEnum - Indicates that an element has an associated popup menu, listbox, tree, grid, or dialog.
 *
 * @generated 2025-12-31 00:30:17
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/aria-haspopup/
 * @tutorial an example value can be false
 */

namespace Html\Enum;

enum AriaHaspopupEnum: string
{
    case FALSE = 'false'; // default
    case TRUE = 'true';
    case MENU = 'menu';
    case LISTBOX = 'listbox';
    case TREE = 'tree';
    case GRID = 'grid';
    case DIALOG = 'dialog';

    public static function getQualifiedName(): string
    {
        return 'aria-haspopup';
    }

    public static function getDefault(): self
    {
        return self::FALSE;
    }
}
