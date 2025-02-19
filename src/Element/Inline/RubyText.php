<?php
/**
 * RubyText - The rt element marks the ruby text component of a ruby annotation, which is used to provide pronunciation, translation, or transliteration information for East Asian typography. The rt element must be a child of a ruby element.
 * 
 * @package Html\Element\Inline
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/rt
 */
namespace Html\Element\Inline;

use Html\Model\InlineElement;

final class RubyText extends InlineElement
{
    public static string $qualifiedName = 'rt';


    public function __construct()
    {

    }


}