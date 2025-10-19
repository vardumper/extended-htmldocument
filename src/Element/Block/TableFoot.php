<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * TableFoot - The tfoot element groups the footer content in a table.
 *
 * @generated 2025-10-19 21:49:08
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tfoot
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Mapping\Element;

#[Element('tfoot')]
class TableFoot extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'tfoot';

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
