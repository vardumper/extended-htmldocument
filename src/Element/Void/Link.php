<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Link - The link element defines a link between a document and an external resource. It is used to link to external stylesheets.
 *
 * @generated 2025-07-12 09:31:57
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/link
 */

namespace Html\Element\Void;

use Html\Element\VoidElement;
use Html\Enum\CrossoriginEnum;
use Html\Enum\ReferrerpolicyEnum;
use Html\Enum\RelEnum;
use Html\Mapping\Element;
use InvalidArgumentException;

#[Element('link')]
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

    public function setHref(string $href): static
    {
        $this->href = $href;
        $this->delegated->setAttribute('href', $href);
        return $this;
    }

    public function getHref(): ?string
    {
        return $this->href;
    }

    public function setHreflang(string $hreflang): static
    {
        $this->hreflang = $hreflang;
        $this->delegated->setAttribute('hreflang', $hreflang);
        return $this;
    }

    public function getHreflang(): ?string
    {
        return $this->hreflang;
    }

    public function setIntegrity(string $integrity): static
    {
        $this->integrity = $integrity;
        $this->delegated->setAttribute('integrity', $integrity);
        return $this;
    }

    public function getIntegrity(): ?string
    {
        return $this->integrity;
    }

    public function setMedia(string $media): static
    {
        $this->media = $media;
        $this->delegated->setAttribute('media', $media);
        return $this;
    }

    public function getMedia(): ?string
    {
        return $this->media;
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

    public function setRel(string|RelEnum $rel): static
    {
        if (is_string($rel)) {
            $rel = RelEnum::tryFrom($rel) ?? throw new InvalidArgumentException('Invalid value for $rel.');
        }
        $this->rel = $rel;
        $this->delegated->setAttribute('rel', (string) $rel->value);

        return $this;
    }

    public function getRel(): ?RelEnum
    {
        return $this->rel;
    }

    public function setSizes(string $sizes): static
    {
        $this->sizes = $sizes;
        $this->delegated->setAttribute('sizes', $sizes);
        return $this;
    }

    public function getSizes(): ?string
    {
        return $this->sizes;
    }

    public function setType(string $type): static
    {
        $this->type = $type;
        $this->delegated->setAttribute('type', $type);
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }
}
