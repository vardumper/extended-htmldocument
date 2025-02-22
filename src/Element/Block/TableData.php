<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * TableData - The td element represents a data cell in a table.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/td
 */
namespace Html\Element\Block;

use Html\Element\Block\TableRow;
use Html\Model\BlockElement;

class TableData extends BlockElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'td';

    /**
     * If an element is unique per HTML document
     * @category HTML element property
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     * @category HTML element property
     */
    public static bool $uniquePerParent = false;

    /**
     * The allowed parent element classes. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $childOf = [
        TableRow::class,
    ];

    /** 
     * Specifies the number of columns a table cell should span.
     * @category HTML attribute */
    public ?int $colspan;

    /** 
     * Specifies a list of header cells that represent the header for the cell.
     * @category HTML attribute */
    public ?string $headers;

    /** 
     * Specifies the number of rows a table cell should span.
     * @category HTML attribute */
    public ?int $rowspan;

}
