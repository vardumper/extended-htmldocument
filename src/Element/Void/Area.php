<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Area - The area element represents either a hyperlink with some text and a corresponding area on an image map, or a dead area on an image map.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/area
 */
namespace Html\Element\Void;

use Html\Enum\RelEnum;
use Html\Enum\ShapeEnum;
use Html\Enum\TargetEnum;
use Html\Enum\TypeEnum;
use Html\Model\VoidElement;

class Area extends VoidElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'area';

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
     * The allowed parent classes. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $childOf = [];

    /** 
     * Specifies alternative text to be displayed when the image cannot be rendered.
     * @category HTML attribute
     * @required
     */
    public string $alt;

    /** 
     * Specifies the coordinates of the shape in a rectangular area or a polygonal area on an image map.
     * @category HTML attribute */
    public ?string $coords;

    /** 
     * Indicates that the linked content should be downloaded rather than displayed.
     * @category HTML attribute
     * @example filename.pdf
     */
    public ?string $download;

    /** 
     * Specifies the URL of the linked resource. Special protocols such as mailto: or tel: can be used.
     * @category HTML attribute
     * @required
     */
    public string $href;

    /** 
     * Specifies the language of the linked resource.
     * @category HTML attribute
     * @example en
     */
    public ?string $hreflang;

    /** 
     * Specifies the relationship between the current document and the linked document.
     * @category HTML attribute */
    public ?RelEnum $rel;

    /** 
     * 
     * @category HTML attribute */
    public ?ShapeEnum $shape;

    /** 
     * Specifies where to open the linked document.
     * @category HTML attribute
     * @example _self
     */
    public ?TargetEnum $target;

    /** 
     * Specifies the media type of the linked resource.
     * @category HTML attribute */
    public ?TypeEnum $type;

}
