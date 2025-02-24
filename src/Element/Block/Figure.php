<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Figure - The figure element represents self-contained content, potentially with an optional caption, which is specified using the (optional) figcaption element.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figure
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\FigureCaption;
use Html\Element\Inline\Image;

class Figure extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'figure';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = false;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        FigureCaption::class,
        Image::class,
    ];


}
