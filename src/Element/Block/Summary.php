<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Summary - The summary element represents a summary, caption, or legend for the rest of the contents of the summary element's parent details element, if any.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/summary
 */
namespace Html\Element\Block;

use Html\Element\;
use Html\Element\Block\Details;
use Html\Model\BlockElement;

class Summary extends BlockElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'summary';

    /**
     * If an element is unique per HTML document
     * @category HTML element property
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     * @category HTML element property
     */
    public static bool $uniquePerParent = true;

    /**
     * The list of allowed direct parents. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $childOf = [
        Details::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $parentOf = [
        ::class,
    ];


}
