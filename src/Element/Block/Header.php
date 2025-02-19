<?php
/**
 * Header - The header element represents a container for introductory content or a set of navigational links. It typically contains the section's heading (an h1–h6 element or an hgroup element), but can also contain other content such as a table of contents, a search form, or any relevant logos.
 * 
 * @package Html\Element\Block
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/header
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

final class Header extends BlockElement
{
    public static string $qualifiedName = 'header';


    public function __construct()
    {

    }


}