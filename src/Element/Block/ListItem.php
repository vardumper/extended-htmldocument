<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * ListItem - The li element represents a list item. If its parent element is an ol, ul, or menu, then the element is an item of the parent element's list, as defined for those elements. Otherwise, the list item has no defined list-related semantics.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/li
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

final class ListItem extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'li';

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
    public static array $childOf = [OrderedList::class, UnorderedList::class];

    /**
     * Specifies the value associated with the element. The meaning and usage may vary depending on the element type.
     */
    public ?string $value;
}
