<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Caption - The caption element represents the title of the table that is its parent, if it has a parent and that is a table element.
 *
 * @generated 2025-10-19 21:49:08
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/caption
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Mapping\Element;

#[Element('caption')]
class Caption extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'caption';

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
    public static array $parentOf = [];
}
