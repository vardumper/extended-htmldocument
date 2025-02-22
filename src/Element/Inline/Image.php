<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Image - The img element represents an image.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img
 */
namespace Html\Element\Inline;

use Html\Enum\CrossoriginEnum;
use Html\Enum\DecodingEnum;
use Html\Enum\ReferrerpolicyEnum;
use Html\Model\InlineElement;

class Image extends InlineElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'img';

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
     * 
     * @category HTML attribute */
    public ?CrossoriginEnum $crossorigin;

    /** 
     * Specifies the decoding process applied to the image.
     * @category HTML attribute */
    public ?DecodingEnum $decoding;

    /** 
     * Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     * @category HTML attribute */
    public ?string $height;

    /** 
     * Specifies that an area should be part of an image map.
     * @category HTML attribute */
    public ?bool $ismap;

    /** 
     * Specifies the referrer policy for fetches initiated by the element.
     * @category HTML attribute */
    public ?ReferrerpolicyEnum $referrerpolicy;

    /** 
     * Specifies the sizes of the images or icons for different display/window sizes.
     * @category HTML attribute */
    public ?string $sizes;

    /** 
     * Specifies the URL of the external resource to be embedded or referenced.
     * @category HTML attribute
     * @required
     */
    public string $src;

    /** 
     * Specifies a set of image candidate URLs and descriptors for responsive images.
     * @category HTML attribute */
    public ?string $srcset;

    /** 
     * Specifies a client-side image map to be used with the element.
     * @category HTML attribute */
    public ?string $usemap;

    /** 
     * Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     * @category HTML attribute */
    public ?string $width;

}
