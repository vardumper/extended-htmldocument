<?php
/**
 * OrderedList - The ol element represents an ordered list of items. The order of the list is meaningful.
 * 
 * @package Html\Element\Block
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ol
 */
namespace Html\Element\Block;

use Html\Enum\TypeEnum;
use Html\Model\BlockElement;

final class OrderedList extends BlockElement
{
    public static string $qualifiedName = 'ol';

    /* When present, it specifies that the list order should be descending (9,8,7...). */
    public ?bool $reversed;

    /* Specifies the starting value of an ordered list. */
    public ?int $start;

    /* Specifies the media type of the linked resource. */
    public ?TypeEnum $type;


    public function __construct()
    {

    }


}