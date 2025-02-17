<?php
/**
 * Canvas - The canvas element is used to draw graphics, on the fly, via scripting (usually JavaScript).
 * 
 * @package Html\Element\Block
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/canvas
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

class Canvas extends BlockElement
{
    public static string $qualifiedName = 'canvas';

    /* Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $height;

    /* Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $width;


    public function __construct()
    {

    }


}