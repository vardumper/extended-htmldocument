<?php
/**
 * BidirectionalIsolation - The bdi element represents a span of text that is to be isolated from its surroundings for the purposes of bidirectional text formatting. (Bidirectional-isolate)
 * 
 * @package Html\Element\Inline
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/bdi
 */
namespace Html\Element\Inline;

use Html\Model\InlineElement;

final class BidirectionalIsolation extends InlineElement
{
    public static string $qualifiedName = 'bdi';


    public function __construct()
    {

    }


}