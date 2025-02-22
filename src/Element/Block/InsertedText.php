<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * InsertedText - The ins element represents an addition to the document.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ins
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

class InsertedText extends BlockElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'ins';

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
     * Specifies the URL of the cited work or the name of the cited creative work.
     * @category HTML attribute */
    public ?string $cite;

    /** 
     * Specifies the date and time of the change in the format 'YYYY-MM-DDThh:mm:ss' or a subset of it.
     * @category HTML attribute */
    public ?string $datetime;

}
