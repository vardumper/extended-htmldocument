<?php
/**
 * Address - The address element represents the contact information for its nearest article or body ancestor. If that is the body element, then the contact information applies to the document as a whole.
 * 
 * @package Html\Element\Inline
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/address
 */
namespace Html\Element\Inline;

use Html\Model\InlineElement;

final class Address extends InlineElement
{
    public static string $qualifiedName = 'address';


    public function __construct()
    {

    }


}