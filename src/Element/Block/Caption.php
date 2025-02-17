<?php
/**
 * Caption - The caption element represents the title of the table that is its parent, if it has a parent and that is a table element.
 * 
 * @package Html\Element\Block
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/caption
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

class Caption extends BlockElement
{
    public static string $qualifiedName = 'caption';


    public function __construct()
    {

    }


}