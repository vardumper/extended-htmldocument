<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * TableData - The td element represents a data cell in a table.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/td
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\TableRow;

class TableData extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'td';

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
        TableRow::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
    ];


    /** Specifies the number of columns a table cell should span. */
    public ?int $colspan = null;

    /** Specifies a list of header cells that represent the header for the cell. */
    public ?string $headers = null;

    /** Specifies the number of rows a table cell should span. */
    public ?int $rowspan = null;



}
