<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * TableHead - The thead element groups the header content in a table.
 *
 * @generated 2025-03-15 11:37:47
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/thead
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;

class TableHead extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'thead';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = true;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [Table::class];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [TableRow::class];
}
