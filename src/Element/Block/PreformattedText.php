<?php
/**
 * PreformattedText - The pre element represents preformatted text. Text within this element is typically displayed in a non-proportional font exactly as it is laid out in the file.
 * 
 * @package Html\Element\Block
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/pre
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

class PreformattedText extends BlockElement
{
    public static string $qualifiedName = 'pre';


    public function __construct()
    {

    }


}