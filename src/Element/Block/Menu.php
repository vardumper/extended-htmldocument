<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Menu - The menu element represents a group of commands that a user can perform or activate. It can be used for toolbars, context menus, or listing form controls.
 *
 * @generated 2025-03-09 20:34:45
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/menu
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\Button;
use Html\Element\Void\Script;

class Menu extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'menu';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = false;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [Button::class, Form::class, ListItem::class, Script::class, Template::class];
}
