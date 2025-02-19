<?php
/**
 * Slot - The slot element is a placeholder inside a web component that you can fill with your own markup, which lets you create separate DOM trees and present them together.
 * 
 * @package Html\Element\Inline
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/slot
 */
namespace Html\Element\Inline;

use Html\Model\InlineElement;

final class Slot extends InlineElement
{
    public static string $qualifiedName = 'slot';

    /* Specifies the name associated with the element. The meaning may vary depending on the context. */
    public ?string $name;


    public function __construct()
    {

    }


}