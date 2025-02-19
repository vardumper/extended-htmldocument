<?php
/**
 * Title - The title element defines the title of the document, shown in a browser's title bar or a page's tab. It is only text, not meant to be displayed.
 * 
 * @package Html\Element\Void
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/title
 */
namespace Html\Element\Void;

use Html\Model\VoidElement;

final class Title extends VoidElement
{
    public static string $qualifiedName = 'title';


    public function __construct()
    {

    }


}