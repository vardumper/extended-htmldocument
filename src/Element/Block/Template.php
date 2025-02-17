<?php
/**
 * Template - The template element is a mechanism for holding client-side content that is not to be rendered when a page is loaded but may subsequently be instantiated during runtime using JavaScript.
 * 
 * @package Html\Element\Block
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/template
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

class Template extends BlockElement
{
    public static string $qualifiedName = 'template';


    public function __construct()
    {

    }


}