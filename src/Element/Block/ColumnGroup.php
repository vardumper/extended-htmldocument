<?php
/**
 * ColumnGroup - The colgroup element represents a group of one or more columns in the table that is its parent, if it has a parent and that is a table element.
 * 
 * @package Html\Element\Block
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/colgroup
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

class ColumnGroup extends BlockElement
{
    public static string $qualifiedName = 'colgroup';


    public function __construct()
    {

    }


}