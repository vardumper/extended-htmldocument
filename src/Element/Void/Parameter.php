<?php
/**
 * Parameter - The param element defines parameters for an object element.
 * 
 * @package Html\Element\Void
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/param
 */
namespace Html\Element\Void;

use Html\Model\VoidElement;

class Parameter extends VoidElement
{
    public static string $qualifiedName = 'param';

    /* Specifies the name associated with the element. The meaning may vary depending on the context. */
    public ?string $name;

    /* Specifies the value associated with the element. The meaning and usage may vary depending on the element type. */
    public ?string $value;


    public function __construct()
    {

    }


}