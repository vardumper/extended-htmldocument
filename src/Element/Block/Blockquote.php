<?php
/**
 * Blockquote - The blockquote element represents a section that is quoted from another source. Content inside a blockquote must be quoted from another source, whose address, if it has one, may be cited in the cite attribute.
 * 
 * @package Html\Element\Block
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/blockquote
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

class Blockquote extends BlockElement
{
    public static string $qualifiedName = 'blockquote';

    /* Specifies the URL of the cited work or the name of the cited creative work. */
    public ?string $cite;


    public function __construct()
    {

    }


}