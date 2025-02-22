<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * TableData - The td element represents a data cell in a table.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/td
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

class TableData extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'td';

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
    public static array $childOf = [TableRow::class];

    /**
     * Specifies the number of columns a table cell should span.
     */
    public ?int $colspan;

    /**
     * Specifies a list of header cells that represent the header for the cell.
     */
    public ?string $headers;

    /**
     * Specifies the number of rows a table cell should span.
     */
    public ?int $rowspan;
}
