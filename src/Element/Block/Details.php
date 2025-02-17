<?php
/**
 * Details - The details element represents a disclosure widget from which the user can obtain additional information or controls.
 * 
 * @package Html\Element\Block
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/details
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

class Details extends BlockElement
{
    public static string $qualifiedName = 'details';

    /* When present, it specifies that the details should be visible (open) to the user. */
    public ?bool $open;


    public function __construct()
    {

    }


}