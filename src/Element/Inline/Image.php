<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2025-12-31 00:30:17
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img
 */
namespace Html\Element\Inline;

use Html\Element\InlineElement;
use Html\Element\Block\{
    Article,
    Aside,
    Body,
    DefinitionDescription,
    Division,
    Figure,
    Footer,
    Header,
    Main,
    Paragraph,
    Picture,
    Section,
};
use Html\Element\Inline\MarkedText;
use Html\Enum\{
    AriaAtomicEnum,
    AriaHiddenEnum,
    AriaLiveEnum,
    AriaRelevantEnum,
    CrossoriginEnum,
    DecodingEnum,
    ReferrerpolicyEnum,
};
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

/**
 * The img element represents an image.
 */
#[Element('img')]
class Image extends InlineElement
{
    use GlobalAttribute\ClassTrait;
    use GlobalAttribute\DataTrait;
    use GlobalAttribute\DirTrait;
    use GlobalAttribute\DraggableTrait;
    use GlobalAttribute\HiddenTrait;
    use GlobalAttribute\IdTrait;
    use GlobalAttribute\LangTrait;
    use GlobalAttribute\StyleTrait;
    use GlobalAttribute\TabindexTrait;
    use GlobalAttribute\TitleTrait;
    use GlobalAttribute\AlpineJsTrait;
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
    public static array $parentOf = [
    ];


    /** 
     * Specifies alternative text to be displayed when the image cannot be rendered.
     * @category HTML attribute
     * @required
     */
    protected ?string $alt = null;

    /** 
     * 
     * @category HTML attribute */
    protected ?CrossoriginEnum $crossorigin = null;

    /** 
     * Specifies the decoding process applied to the image.
     * @category HTML attribute */
    protected ?DecodingEnum $decoding = null;

    /** 
     * Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     * @category HTML attribute */
    protected ?string $height = null;

    /** 
     * Specifies that an area should be part of an image map.
     * @category HTML attribute */
    protected ?bool $ismap = null;

    /** 
     * Specifies the referrer policy for fetches initiated by the element.
     * @category HTML attribute */
    protected ?ReferrerpolicyEnum $referrerpolicy = null;

    /** 
     * Specifies the sizes of the images or icons for different display/window sizes.
     * @category HTML attribute */
    protected ?string $sizes = null;

    /** 
     * Specifies the URL of the external resource to be embedded or referenced.
     * @category HTML attribute
     * @required
     */
    protected ?string $src = null;

    /** 
     * Specifies a set of image candidate URLs and descriptors for responsive images.
     * @category HTML attribute */
    protected ?string $srcset = null;

    /** 
     * Specifies a client-side image map to be used with the element.
     * @category HTML attribute */
    protected ?string $usemap = null;

    /** 
     * Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     * @category HTML attribute */
    protected ?string $width = null;

    /** 
     * Indicates whether the element is exposed to an accessibility API. Use with caution on interactive elements. Set to true only on decorative elements such as icons, or when nav isnt visible
     * @category HTML attribute
     * @example false
     */
    protected ?AriaHiddenEnum $ariaHidden = null;

    /** 
     * Defines a string value that labels the current element for assistive technologies.
     * @category HTML attribute */
    protected ?string $ariaLabel = null;

    /** 
     * References an element that provides additional details about the current element.
     * @category HTML attribute */
    protected ?string $ariaDetails = null;

    /** 
     * Defines keyboard shortcuts available for the element.
     * @category HTML attribute */
    protected ?string $ariaKeyshortcuts = null;

    /** 
     * Provides a human-readable custom role description for assistive technologies.
     * @category HTML attribute */
    protected ?string $ariaRoledescription = null;

    /** 
     * Defines how updates to the element should be announced to screen readers.
     * @category HTML attribute
     * @example off
     */
    protected ?AriaLiveEnum $ariaLive = null;

    /** 
     * Indicates what content changes should be announced in a live region.
     * @category HTML attribute
     * @example additions text
     */
    protected ?AriaRelevantEnum $ariaRelevant = null;

    /** 
     * Indicates whether assistive technologies should present the entire region as a whole when changes occur.
     * @category HTML attribute
     * @example false
     */
    protected ?AriaAtomicEnum $ariaAtomic = null;


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
        if (\is_string($crossorigin)) {
            $crossorigin = CrossoriginEnum::tryFrom($crossorigin) ?? throw new \InvalidArgumentException("Invalid value for \$crossorigin.");
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
        if (\is_string($decoding)) {
            $decoding = DecodingEnum::tryFrom($decoding) ?? throw new \InvalidArgumentException("Invalid value for \$decoding.");
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
        if (\is_string($referrerpolicy)) {
            $referrerpolicy = ReferrerpolicyEnum::tryFrom($referrerpolicy) ?? throw new \InvalidArgumentException("Invalid value for \$referrerpolicy.");
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

    public function setAriaHidden(string|AriaHiddenEnum $ariaHidden): static
    {
        if (\is_string($ariaHidden)) {
            $ariaHidden = AriaHiddenEnum::tryFrom($ariaHidden) ?? throw new \InvalidArgumentException("Invalid value for \$ariaHidden.");
        }
        $this->ariaHidden = $ariaHidden;
        $this->delegated->setAttribute('aria-hidden', (string) $ariaHidden->value);

        return $this;
    }

    public function getAriaHidden(): ?AriaHiddenEnum
    {
        return $this->ariaHidden;
    }

    public function setAriaLabel(string $ariaLabel): static
    {
        $this->ariaLabel = $ariaLabel;
        $this->delegated->setAttribute('aria-label', (string) $ariaLabel);
        return $this;
    }

    public function getAriaLabel(): ?string
    {
        return $this->ariaLabel;
    }

    public function setAriaDetails(string $ariaDetails): static
    {
        $this->ariaDetails = $ariaDetails;
        $this->delegated->setAttribute('aria-details', (string) $ariaDetails);
        return $this;
    }

    public function getAriaDetails(): ?string
    {
        return $this->ariaDetails;
    }

    public function setAriaKeyshortcuts(string $ariaKeyshortcuts): static
    {
        $this->ariaKeyshortcuts = $ariaKeyshortcuts;
        $this->delegated->setAttribute('aria-keyshortcuts', (string) $ariaKeyshortcuts);
        return $this;
    }

    public function getAriaKeyshortcuts(): ?string
    {
        return $this->ariaKeyshortcuts;
    }

    public function setAriaRoledescription(string $ariaRoledescription): static
    {
        $this->ariaRoledescription = $ariaRoledescription;
        $this->delegated->setAttribute('aria-roledescription', (string) $ariaRoledescription);
        return $this;
    }

    public function getAriaRoledescription(): ?string
    {
        return $this->ariaRoledescription;
    }

    public function setAriaLive(string|AriaLiveEnum $ariaLive): static
    {
        if (\is_string($ariaLive)) {
            $ariaLive = AriaLiveEnum::tryFrom($ariaLive) ?? throw new \InvalidArgumentException("Invalid value for \$ariaLive.");
        }
        $this->ariaLive = $ariaLive;
        $this->delegated->setAttribute('aria-live', (string) $ariaLive->value);

        return $this;
    }

    public function getAriaLive(): ?AriaLiveEnum
    {
        return $this->ariaLive;
    }

    public function setAriaRelevant(string|AriaRelevantEnum $ariaRelevant): static
    {
        if (\is_string($ariaRelevant)) {
            $ariaRelevant = AriaRelevantEnum::tryFrom($ariaRelevant) ?? throw new \InvalidArgumentException("Invalid value for \$ariaRelevant.");
        }
        $this->ariaRelevant = $ariaRelevant;
        $this->delegated->setAttribute('aria-relevant', (string) $ariaRelevant->value);

        return $this;
    }

    public function getAriaRelevant(): ?AriaRelevantEnum
    {
        return $this->ariaRelevant;
    }

    public function setAriaAtomic(string|AriaAtomicEnum $ariaAtomic): static
    {
        if (\is_string($ariaAtomic)) {
            $ariaAtomic = AriaAtomicEnum::tryFrom($ariaAtomic) ?? throw new \InvalidArgumentException("Invalid value for \$ariaAtomic.");
        }
        $this->ariaAtomic = $ariaAtomic;
        $this->delegated->setAttribute('aria-atomic', (string) $ariaAtomic->value);

        return $this;
    }

    public function getAriaAtomic(): ?AriaAtomicEnum
    {
        return $this->ariaAtomic;
    }

}
