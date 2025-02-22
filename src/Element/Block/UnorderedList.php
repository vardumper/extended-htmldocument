<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * UnorderedList - The ul element represents an unordered list of items, namely a collection of items that do not have a numerical ordering, and their order in the list is meaningless.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ul
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

class UnorderedList extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'ul';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = false;

    /**
     * The allowed parent element classes. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [];
}
