<?php
/**
 * HTML - The root element of an HTML document. It represents the top-level of the HTML structure.
 * 
 * @package Html\Element\Block
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/html
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

final class HTML extends BlockElement
{
    public static string $qualifiedName = 'html';

    /* Specifies the address of the document's cache manifest. */
    public ?string $manifest;


    public function __construct()
    {

    }


}