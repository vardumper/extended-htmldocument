<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Link - The link element defines a link between a document and an external resource. It is used to link to external stylesheets.
 *
 * @generated 2025-03-08 18:09:25
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/link
 */

namespace Html\Element\Void;

use BackedEnum;
use Html\Element\VoidElement;
use Html\Enum\CrossoriginEnum;
use Html\Enum\ReferrerpolicyEnum;
use Html\Enum\RelEnum;

class Link extends VoidElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'link';

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
    public static array $childOf = [Head::class];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * Specifies the URL of the linked resource. Special protocols such as mailto: or tel: can be used.
     * @required
     */
    public ?string $href = null;

    /**
     * Specifies the language of the linked resource.
     */
    public ?string $hreflang = null;

    /**
     * Specifies the integrity value of a resource.
     */
    public ?string $integrity = null;

    /**
     * Specifies the media type for which the linked resource or style sheet is intended.
     */
    public ?string $media = null;

    /**
     * Specifies the sizes of the images or icons for different display/window sizes.
     */
    public ?string $sizes = null;

    /**
     * Specifies the media type of the linked resource.
     */
    public ?string $type = null;

    protected ?CrossoriginEnum $crossorigin = null;

    /**
     * Specifies the referrer policy for fetches initiated by the element.
     */
    protected ?ReferrerpolicyEnum $referrerpolicy = null;

    /**
     * Specifies the relationship between the current document and the linked document.
     */
    protected ?RelEnum $rel = null;

    public function setCrossorigin(CrossoriginEnum $crossorigin): self
    {
        $this->crossorigin = $crossorigin;
        $this->htmlElement->setAttribute(
            'crossorigin',
            \is_subclass_of($crossorigin, BackedEnum::class) ? (string) $crossorigin->value : $crossorigin
        );

        return $this;
    }

    public function getCrossorigin(): ?CrossoriginEnum
    {
        return $this->crossorigin;
    }

    public function setHref(string $href): self
    {
        $this->href = $href;
        return $this;
    }

    public function getHref(): ?string
    {
        return $this->href;
    }

    public function setHreflang(string $hreflang): self
    {
        $this->hreflang = $hreflang;
        return $this;
    }

    public function getHreflang(): ?string
    {
        return $this->hreflang;
    }

    public function setIntegrity(string $integrity): self
    {
        $this->integrity = $integrity;
        return $this;
    }

    public function getIntegrity(): ?string
    {
        return $this->integrity;
    }

    public function setMedia(string $media): self
    {
        $this->media = $media;
        return $this;
    }

    public function getMedia(): ?string
    {
        return $this->media;
    }

    public function setReferrerpolicy(ReferrerpolicyEnum $referrerpolicy): self
    {
        $this->referrerpolicy = $referrerpolicy;
        $this->htmlElement->setAttribute(
            'referrerpolicy',
            \is_subclass_of($referrerpolicy, BackedEnum::class) ? (string) $referrerpolicy->value : $referrerpolicy
        );

        return $this;
    }

    public function getReferrerpolicy(): ?ReferrerpolicyEnum
    {
        return $this->referrerpolicy;
    }

    public function setRel(RelEnum $rel): self
    {
        $this->rel = $rel;
        $this->htmlElement->setAttribute(
            'rel',
            \is_subclass_of($rel, BackedEnum::class) ? (string) $rel->value : $rel
        );

        return $this;
    }

    public function getRel(): ?RelEnum
    {
        return $this->rel;
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

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }
}
