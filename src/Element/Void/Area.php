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
    public static string $qualifiedName = 'area';

    /* 
     * Specifies alternative text to be displayed when the image cannot be rendered.
     * @required
     */
    public string $alt;

    /* Specifies the coordinates of the shape in a rectangular area or a polygonal area on an image map. */
    public ?string $coords;

    /* 
     * Indicates that the linked content should be downloaded rather than displayed.
     * @example filename.pdf
     */
    public ?string $download;

    /* 
     * Specifies the URL of the linked resource. Special protocols such as mailto: or tel: can be used.
     * @required
     */
    public string $href;

    /* 
     * Specifies the language of the linked resource.
     * @example en
     */
    public ?string $hreflang;

    /* Specifies the relationship between the current document and the linked document. */
    public ?RelEnum $rel;

    /*  */
    public ?ShapeEnum $shape;

    /* 
     * Specifies where to open the linked document.
     * @example _self
     */
    public ?TargetEnum $target = TargetEnum::_SELF;

    /* Specifies the media type of the linked resource. */
    public ?TypeEnum $type;



}
