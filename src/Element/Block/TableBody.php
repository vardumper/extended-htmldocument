<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * TableBody - The tbody element groups one or more tr elements as the body of a table.
 *
 * @generated 2025-03-31 18:21:39
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tbody
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Mapping\Element;

#[Element('tbody')]
class TableBody extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'tbody';

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
    public static array $childOf = [Table::class];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [TableRow::class];
}
