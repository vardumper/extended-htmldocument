<?php
/**
 * ListItem - The li element represents a list item. If its parent element is an ol, ul, or menu, then the element is an item of the parent element's list, as defined for those elements. Otherwise, the list item has no defined list-related semantics.
 * 
 * @package Html\Element\Block
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/li
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

class ListItem extends BlockElement
{
    public static string $qualifiedName = 'li';

    /* Specifies the value associated with the element. The meaning and usage may vary depending on the element type. */
    public ?string $value;


    public function __construct()
    {

    }


}