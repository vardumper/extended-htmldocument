<?php
/**
 * Abbreviation - The abbr element represents an abbreviation or acronym, optionally with its expansion. The title attribute can be used to provide an expansion of the abbreviation. The attribute, if specified, must contain an expansion of the abbreviation, and nothing else.
 * 
 * @package Html\Element\Inline
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/abbr
 */
namespace Html\Element\Inline;

use Html\Model\InlineElement;

final class Abbreviation extends InlineElement
{
    public static string $qualifiedName = 'abbr';

    /* Specifies additional information about the element, typically displayed as a tooltip. */
    public ?string $title;


    public function __construct()
    {

    }


}