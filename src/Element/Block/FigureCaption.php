<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * FigureCaption - The figcaption element represents a caption or a legend associated with a figure or an illustration described by the rest of the data of the figure element. The figcaption element can be placed as the first or the last child of a parent figure element.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figcaption
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Figure;

class FigureCaption extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'figcaption';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = true;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [
        Figure::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
    ];




}
