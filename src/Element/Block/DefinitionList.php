<?php
/**
 * DefinitionList - The dl element represents an association list consisting of zero or more name-value groups (a description list). Each group must consist of one or more names (dt elements) followed by one or more values (dd elements). Within a single dl element, there should not be more than one dt element for each name.
 * 
 * @package Html\Element\Block
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dl
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

class DefinitionList extends BlockElement
{
    public static string $qualifiedName = 'dl';


    public function __construct()
    {

    }


}