<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * FigureCaption - The figcaption element represents a caption or a legend associated with a figure or an illustration described by the rest of the data of the figure element. The figcaption element can be placed as the first or the last child of a parent figure element.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figcaption
 */
namespace Html\Element\Block;

use Html\Element\Block\Figure;
use Html\Model\BlockElement;

class FigureCaption extends BlockElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'figcaption';

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
     * The allowed parent element classes. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $childOf = [
        Figure::class,
    ];

}
