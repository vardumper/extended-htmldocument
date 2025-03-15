<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Image - The img element represents an image.
 *
 * @generated 2025-03-15 11:37:47
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img
 */

namespace Html\Element\Inline;

use Html\Element\Block\Article;
use Html\Element\Block\Aside;
use Html\Element\Block\Body;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\Division;
use Html\Element\Block\Figure;
use Html\Element\Block\Footer;
use Html\Element\Block\Header;
use Html\Element\Block\Main;
use Html\Element\Block\Paragraph;
use Html\Element\Block\Picture;
use Html\Element\Block\Section;
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
        Article::class,
        Aside::class,
        Body::class,
        DefinitionDescription::class,
        Division::class,
        Figure::class,
        Footer::class,
        Header::class,
        Main::class,
        MarkedText::class,
        Paragraph::class,
        Picture::class,
        Section::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * Specifies alternative text to be displayed when the image cannot be rendered.
     * @required
     */
    public ?string $alt = null;

    /**
     * Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     */
    public ?string $height = null;

    /**
     * Specifies that an area should be part of an image map.
     */
    public ?bool $ismap = null;

    /**
     * Specifies the sizes of the images or icons for different display/window sizes.
     */
    public ?string $sizes = null;

    /**
     * Specifies the URL of the external resource to be embedded or referenced.
     * @required
     */
    public ?string $src = null;

    /**
     * Specifies a set of image candidate URLs and descriptors for responsive images.
     */
    public ?string $srcset = null;

    /**
     * Specifies a client-side image map to be used with the element.
     */
    public ?string $usemap = null;

    /**
     * Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     */
    public ?string $width = null;

    protected ?CrossoriginEnum $crossorigin = null;

    /**
     * Specifies the decoding process applied to the image.
     */
    protected ?DecodingEnum $decoding = null;

    /**
     * Specifies the referrer policy for fetches initiated by the element.
     */
    protected ?ReferrerpolicyEnum $referrerpolicy = null;

    public function setAlt(string $alt): self
    {
        $this->alt = $alt;
        return $this;
    }

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setCrossorigin(CrossoriginEnum $crossorigin): self
    {
        $this->crossorigin = $crossorigin;
        $this->htmlElement->setAttribute('crossorigin', (string) $crossorigin->value);

        return $this;
    }

    public function getCrossorigin(): ?CrossoriginEnum
    {
        return $this->crossorigin;
    }

    public function setDecoding(DecodingEnum $decoding): self
    {
        $this->decoding = $decoding;
        $this->htmlElement->setAttribute('decoding', (string) $decoding->value);

        return $this;
    }

    public function getDecoding(): ?DecodingEnum
    {
        return $this->decoding;
    }

    public function setHeight(string $height): self
    {
        $this->height = $height;
        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setIsmap(bool $ismap): self
    {
        $this->ismap = $ismap;
        return $this;
    }

    public function getIsmap(): ?bool
    {
        return $this->ismap;
    }

    public function setReferrerpolicy(ReferrerpolicyEnum $referrerpolicy): self
    {
        $this->referrerpolicy = $referrerpolicy;
        $this->htmlElement->setAttribute('referrerpolicy', (string) $referrerpolicy->value);

        return $this;
    }

    public function getReferrerpolicy(): ?ReferrerpolicyEnum
    {
        return $this->referrerpolicy;
    }

    public function setSizes(string $sizes): self
    {
        $this->sizes = $sizes;
        return $this;
    }

    public function getSizes(): ?string
    {
        return $this->sizes;
    }

    public function setSrc(string $src): self
    {
        $this->src = $src;
        return $this;
    }

    public function getSrc(): ?string
    {
        return $this->src;
    }

    public function setSrcset(string $srcset): self
    {
        $this->srcset = $srcset;
        return $this;
    }

    public function getSrcset(): ?string
    {
        return $this->srcset;
    }

    public function setUsemap(string $usemap): self
    {
        $this->usemap = $usemap;
        return $this;
    }

    public function getUsemap(): ?string
    {
        return $this->usemap;
    }

    public function setWidth(string $width): self
    {
        $this->width = $width;
        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }
}
