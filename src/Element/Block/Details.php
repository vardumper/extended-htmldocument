<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Details - The details element represents a disclosure widget from which the user can obtain additional information or controls.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/details
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;

class Details extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'details';

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
    public static array $parentOf = [
        Division::class,
        DefinitionList::class,
        Form::class,
        ListItem::class,
        OrderedList::class,
        Paragraph::class,
        PreformattedText::class,
        Summary::class,
        Table::class,
        UnorderedList::class,
    ];

    /**
     * When present, it specifies that the details should be visible (open) to the user.
     */
    public ?bool $open;
}
