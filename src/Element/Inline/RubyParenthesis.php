<?php
/**
 * RubyParenthesis - The rp element is used to provide fallback parentheses for browsers non-supporting ruby annotations. It can be used in complex ruby markup to provide parentheses around the rt element for browsers that do not support ruby elements.
 * 
 * @package Html\Element\Inline
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/rp
 */
namespace Html\Element\Inline;

use Html\Model\InlineElement;

class RubyParenthesis extends InlineElement
{
    public static string $qualifiedName = 'rp';


    public function __construct()
    {

    }


}