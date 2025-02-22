<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Caption - The caption element represents the title of the table that is its parent, if it has a parent and that is a table element.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/caption
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

class Caption extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'caption';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = true;

    /**
     * The allowed parent element classes. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [Table::class];
}
