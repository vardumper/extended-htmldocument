<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * TableHead - The thead element groups the header content in a table.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/thead
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

class TableHead extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'thead';

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
