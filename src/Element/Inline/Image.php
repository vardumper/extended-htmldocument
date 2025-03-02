<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Image - The img element represents an image.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img
 */
namespace Html\Element\Inline;

use Html\Element\InlineElement;
use Html\Enum\CrossoriginEnum;
use Html\Enum\DecodingEnum;
use Html\Enum\ReferrerpolicyEnum;

class Image extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'img';

    /**
     * If an element is self closing
     */
    public const bool SELF_CLOSING = true;

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
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [
    ];


    /** 
     * Specifies alternative text to be displayed when the image cannot be rendered.
     * @category HTML attribute
     * @required
     */
    public ?string $alt = null;

    /**  */
    protected ?CrossoriginEnum $crossorigin = null;

    /** Specifies the decoding process applied to the image. */
    protected ?DecodingEnum $decoding = null;

    /** Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $height = null;

    /** Specifies that an area should be part of an image map. */
    public ?bool $ismap = null;

    /** Specifies the referrer policy for fetches initiated by the element. */
    protected ?ReferrerpolicyEnum $referrerpolicy = null;

    /** Specifies the sizes of the images or icons for different display/window sizes. */
    public ?string $sizes = null;

    /** 
     * Specifies the URL of the external resource to be embedded or referenced.
     * @category HTML attribute
     * @required
     */
    public ?string $src = null;

    /** Specifies a set of image candidate URLs and descriptors for responsive images. */
    public ?string $srcset = null;

    /** Specifies a client-side image map to be used with the element. */
    public ?string $usemap = null;

    /** Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $width = null;


    public function setCrossorigin(CrossoriginEnum $crossorigin): void
    {
        $this->crossorigin = $crossorigin;
        $this->htmlElement->setAttribute('crossorigin', $crossorigin->value);
    }

    public function getCrossorigin(): ?CrossoriginEnum
    {
        return $this->crossorigin;
    }

    public function setDecoding(DecodingEnum $decoding): void
    {
        $this->decoding = $decoding;
        $this->htmlElement->setAttribute('decoding', $decoding->value);
    }

    public function getDecoding(): ?DecodingEnum
    {
        return $this->decoding;
    }

    public function setReferrerpolicy(ReferrerpolicyEnum $referrerpolicy): void
    {
        $this->referrerpolicy = $referrerpolicy;
        $this->htmlElement->setAttribute('referrerpolicy', $referrerpolicy->value);
    }

    public function getReferrerpolicy(): ?ReferrerpolicyEnum
    {
        return $this->referrerpolicy;
    }

}
