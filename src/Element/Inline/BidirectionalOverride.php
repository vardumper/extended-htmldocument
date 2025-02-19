<?php
/**
 * BidirectionalOverride - The bdo element represents explicit text directionality formatting control for its children. It allows authors to override the Unicode bidirectional algorithm by explicitly specifying a direction override.
 * 
 * @package Html\Element\Inline
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/bdo
 */
namespace Html\Element\Inline;

use Html\Model\InlineElement;

final class BidirectionalOverride extends InlineElement
{
    public static string $qualifiedName = 'bdo';


    public function __construct()
    {

    }


}