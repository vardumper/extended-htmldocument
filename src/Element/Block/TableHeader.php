<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * TableHeader - The th element represents a header cell in a table.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/th
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;

class TableHeader extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'th';

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
    public static array $childOf = [TableRow::class];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [];

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

    /**
     * Specifies the set of header cells a data cell belongs to.
     */
    public ?string $scope;
}
