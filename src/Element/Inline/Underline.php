<?php
/**
 * Underline - The u element represents a span of text with an unarticulated, though explicitly rendered, non-textual annotation, such as labeling the text as being a proper name in Chinese text (a Chinese proper name mark), or labeling the text as being misspelt.
 * 
 * @package Html\Element\Inline
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/u
 */
namespace Html\Element\Inline;

use Html\Model\InlineElement;

final class Underline extends InlineElement
{
    public static string $qualifiedName = 'u';


    public function __construct()
    {

    }


}