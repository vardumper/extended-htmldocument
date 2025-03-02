<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * UnorderedList - The ul element represents an unordered list of items, namely a collection of items that do not have a numerical ordering, and their order in the list is meaningless.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ul
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\ListItem;

class UnorderedList extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'ul';

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
    public static array $childOf = [
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        ListItem::class,
    ];




}
