<?php
/**
 * Legend - The legend element represents a caption for the content of its parent fieldset.
 * 
 * @package Html\Element\Block
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/legend
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

class Legend extends BlockElement
{
    public static string $qualifiedName = 'legend';

    /* Specifies the default value of the <textarea> element. */
    public ?string $text;


    public function __construct()
    {

    }


}