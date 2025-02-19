<?php
/**
 * InsertedText - The ins element represents an addition to the document.
 * 
 * @package Html\Element\Block
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ins
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

final class InsertedText extends BlockElement
{
    public static string $qualifiedName = 'ins';

    /* Specifies the URL of the cited work or the name of the cited creative work. */
    public ?string $cite;

    /* Specifies the date and time of the change in the format 'YYYY-MM-DDThh:mm:ss' or a subset of it. */
    public ?datetime $datetime;


    public function __construct()
    {

    }


}