<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * OrderedList - The ol element represents an ordered list of items. The order of the list is meaningful.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ol
 */
namespace Html\Element\Block;

use Html\Enum\TypeEnum;
use Html\Model\BlockElement;

class OrderedList extends BlockElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'ol';

    /**
     * If an element is unique per HTML document
     * @category HTML element property
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     * @category HTML element property
     */
    public static bool $uniquePerParent = false;

    /**
     * The allowed parent element classes. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $childOf = [];

    /** 
     * When present, it specifies that the list order should be descending (9,8,7...).
     * @category HTML attribute */
    public ?bool $reversed;

    /** 
     * Specifies the starting value of an ordered list.
     * @category HTML attribute */
    public ?int $start;

    /** 
     * Specifies the media type of the linked resource.
     * @category HTML attribute */
    public ?TypeEnum $type;

}
