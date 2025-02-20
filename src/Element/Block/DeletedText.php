<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * DeletedText - The del element represents a deletion from the document.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/del
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

class DeletedText extends BlockElement
{
    public static string $qualifiedName = 'del';

    /* Specifies the URL of the cited work or the name of the cited creative work. */
    public ?string $cite;

    /* Specifies the date and time of the change in the format 'YYYY-MM-DDThh:mm:ss' or a subset of it. */
    public ?string $datetime;


}
