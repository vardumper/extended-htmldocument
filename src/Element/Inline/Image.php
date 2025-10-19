<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Image - The img element represents an image.
 *
 * @generated 2025-10-19 21:39:12
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
use Html\Enum\DataPlacementEnum;
use Html\Enum\DataThemeEnum;
use Html\Enum\DecodingEnum;
use Html\Enum\ReferrerpolicyEnum;
use Html\Mapping\Element;
use InvalidArgumentException;

#[Element('img')]
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

    /**
     * Give extra context and information by adding tooltips.
     */
    public ?string $dataTooltip = null;

    protected ?CrossoriginEnum $crossorigin = null;

    /**
     * Specifies the decoding process applied to the image.
     */
    protected ?DecodingEnum $decoding = null;

    /**
     * Specifies the referrer policy for fetches initiated by the element.
     */
    protected ?ReferrerpolicyEnum $referrerpolicy = null;

    /** Choose between light and dark mode. Overrides the OS default if set. */
    protected null|string|DataThemeEnum $dataTheme = null;

    /**
     * Choose the position of a tooltip. Depends on data-tooltip attribute.
     * @example top
     */
    protected null|string|DataPlacementEnum $dataPlacement = null;

    public function setAlt(string $alt): static
    {
        $this->alt = $alt;
        $this->delegated->setAttribute('alt', (string) $alt);
        return $this;
    }

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setCrossorigin(string|CrossoriginEnum $crossorigin): static
    {
        if (is_string($crossorigin)) {
            $crossorigin = CrossoriginEnum::tryFrom($crossorigin) ?? throw new InvalidArgumentException(
                'Invalid value for $crossorigin.'
            );
        }
        $this->crossorigin = $crossorigin;
        $this->delegated->setAttribute('crossorigin', (string) $crossorigin->value);

        return $this;
    }

    public function getCrossorigin(): ?CrossoriginEnum
    {
        return $this->crossorigin;
    }

    public function setDecoding(string|DecodingEnum $decoding): static
    {
        if (is_string($decoding)) {
            $decoding = DecodingEnum::tryFrom($decoding) ?? throw new InvalidArgumentException(
                'Invalid value for $decoding.'
            );
        }
        $this->decoding = $decoding;
        $this->delegated->setAttribute('decoding', (string) $decoding->value);

        return $this;
    }

    public function getDecoding(): ?DecodingEnum
    {
        return $this->decoding;
    }

    public function setHeight(string $height): static
    {
        $this->height = $height;
        $this->delegated->setAttribute('height', (string) $height);
        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setIsmap(bool $ismap): static
    {
        $this->ismap = $ismap;
        $this->delegated->setAttribute('ismap', (string) $ismap);
        return $this;
    }

    public function getIsmap(): ?bool
    {
        return $this->ismap;
    }

    public function setReferrerpolicy(string|ReferrerpolicyEnum $referrerpolicy): static
    {
        if (is_string($referrerpolicy)) {
            $referrerpolicy = ReferrerpolicyEnum::tryFrom($referrerpolicy) ?? throw new InvalidArgumentException(
                'Invalid value for $referrerpolicy.'
            );
        }
        $this->referrerpolicy = $referrerpolicy;
        $this->delegated->setAttribute('referrerpolicy', (string) $referrerpolicy->value);

        return $this;
    }

    public function getReferrerpolicy(): ?ReferrerpolicyEnum
    {
        return $this->referrerpolicy;
    }

    public function setSizes(string $sizes): static
    {
        $this->sizes = $sizes;
        $this->delegated->setAttribute('sizes', (string) $sizes);
        return $this;
    }

    public function getSizes(): ?string
    {
        return $this->sizes;
    }

    public function setSrc(string $src): static
    {
        $this->src = $src;
        $this->delegated->setAttribute('src', (string) $src);
        return $this;
    }

    public function getSrc(): ?string
    {
        return $this->src;
    }

    public function setSrcset(string $srcset): static
    {
        $this->srcset = $srcset;
        $this->delegated->setAttribute('srcset', (string) $srcset);
        return $this;
    }

    public function getSrcset(): ?string
    {
        return $this->srcset;
    }

    public function setUsemap(string $usemap): static
    {
        $this->usemap = $usemap;
        $this->delegated->setAttribute('usemap', (string) $usemap);
        return $this;
    }

    public function getUsemap(): ?string
    {
        return $this->usemap;
    }

    public function setWidth(string $width): static
    {
        $this->width = $width;
        $this->delegated->setAttribute('width', (string) $width);
        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }

    public function setDataTheme(string|DataThemeEnum $dataTheme): static
    {
        $value = $dataTheme;
        if (is_string($dataTheme)) {
            $resolved = DataThemeEnum::tryFrom($dataTheme);
            if ($resolved !== null) {
                $dataTheme = $resolved;
            }
        }
        if ($dataTheme instanceof DataThemeEnum) {
            $value = $dataTheme->value;
        }
        $this->dataTheme = $dataTheme;
        $this->delegated->setAttribute('dataTheme', (string) $value);

        return $this;
    }

    public function getDataTheme(): string|DataThemeEnum
    {
        return $this->dataTheme;
    }

    public function setDataTooltip(string $dataTooltip): static
    {
        $this->dataTooltip = $dataTooltip;
        $this->delegated->setAttribute('dataTooltip', (string) $dataTooltip);
        return $this;
    }

    public function getDataTooltip(): ?string
    {
        return $this->dataTooltip;
    }

    public function setDataPlacement(string|DataPlacementEnum $dataPlacement): static
    {
        $value = $dataPlacement;
        if (is_string($dataPlacement)) {
            $resolved = DataPlacementEnum::tryFrom($dataPlacement);
            if ($resolved !== null) {
                $dataPlacement = $resolved;
            }
        }
        if ($dataPlacement instanceof DataPlacementEnum) {
            $value = $dataPlacement->value;
        }
        $this->dataPlacement = $dataPlacement;
        $this->delegated->setAttribute('dataPlacement', (string) $value);

        return $this;
    }

    public function getDataPlacement(): string|DataPlacementEnum
    {
        return $this->dataPlacement;
    }
}
