<?php
/**
 * TableHeader - The th element represents a header cell in a table.
 * 
 * @package Html\Element\Block
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/th
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

class TableHeader extends BlockElement
{
    public static string $qualifiedName = 'th';

    /* Specifies the number of columns a table cell should span. */
    public ?int $colspan;

    /* Specifies a list of header cells that represent the header for the cell. */
    public ?string $headers;

    /* Specifies the number of rows a table cell should span. */
    public ?int $rowspan;

    /* Specifies the set of header cells a data cell belongs to. */
    public ?string $scope;


    public function __construct()
    {

    }


}