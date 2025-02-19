<?php
/**
 * TableData - The td element represents a data cell in a table.
 * 
 * @package Html\Element\Block
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/td
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

final class TableData extends BlockElement
{
    public static string $qualifiedName = 'td';

    /* Specifies the number of columns a table cell should span. */
    public ?int $colspan;

    /* Specifies a list of header cells that represent the header for the cell. */
    public ?string $headers;

    /* Specifies the number of rows a table cell should span. */
    public ?int $rowspan;


    public function __construct()
    {

    }


}