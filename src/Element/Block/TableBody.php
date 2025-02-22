<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * TableBody - The tbody element groups one or more tr elements as the body of a table.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tbody
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

class TableBody extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'tbody';

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
    public static array $childOf = [Table::class];
}
