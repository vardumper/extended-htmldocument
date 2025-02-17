<?php
/**
 * Data - The data element represents its contents, along with a machine-readable form of those contents in the value attribute.
 * 
 * @package Html\Element\Inline
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/data
 */
namespace Html\Element\Inline;

use Html\Model\InlineElement;

class Data extends InlineElement
{
    public static string $qualifiedName = 'data';

    /* Specifies the value associated with the element. The meaning and usage may vary depending on the element type. */
    public ?string $value;


    public function __construct()
    {

    }


}