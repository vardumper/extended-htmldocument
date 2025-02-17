<?php
/**
 * Span - The span element doesn't mean anything on its own, but can be useful when used together with the global attributes, e.g. class, lang, or dir. It represents its children.
 * 
 * @package Html\Element\Inline
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/span
 */
namespace Html\Element\Inline;

use Html\Model\InlineElement;

class Span extends InlineElement
{
    public static string $qualifiedName = 'span';


    public function __construct()
    {

    }


}