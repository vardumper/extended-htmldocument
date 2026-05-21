<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2026-05-21 10:50:05
 * @subpackage Html\Entity\Void
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/link
 */

namespace Html\Entity\Void;

use DateTimeInterface;
use DOM\ORM\Entity\AbstractEntity;
use DOM\ORM\Mapping as ORM;

/**
 * link entity — persists as XML via DOM-ORM.
 */
#[ORM\Item(entityType: 'link')]
class LinkEntity extends AbstractEntity
{
    /**
     * Allowed parent elements (HTML content model)
     * @var array<string>
     */
    public static array $childOf = ['head'];

    /**
     * Allowed child elements (HTML content model)
     * @var array<string>
     */
    public static array $parentOf = [];

    public function __construct(
        #[ORM\Fragment]
        protected ?string $class = null,
        #[ORM\Fragment]
        protected ?string $crossorigin = null,
        #[ORM\Fragment]
        protected ?string $href = null,
        #[ORM\Fragment]
        protected ?string $hreflang = null,
        #[ORM\Fragment]
        protected ?string $integrity = null,
        #[ORM\Fragment]
        protected ?string $media = null,
        #[ORM\Fragment]
        protected ?string $referrerpolicy = null,
        #[ORM\Fragment]
        protected ?string $rel = null,
        #[ORM\Fragment]
        protected ?string $sizes = null,
        #[ORM\Fragment]
        protected ?string $type = null,
        #[ORM\Fragment]
        protected ?string $dir = null,
        #[ORM\Fragment]
        protected ?string $hidden = null,
        #[ORM\Fragment]
        protected ?string $lang = null,
        #[ORM\Fragment]
        protected ?string $style = null,
        #[ORM\Fragment]
        protected ?string $title = null,
        ?string $entityId = null,
        ?DateTimeInterface $createdAt = null,
    ) {
        parent::__construct($entityId, $createdAt);
    }

    public function setClass(?string $value): static
    {
        $this->class = $value;
        return $this;
    }

    public function getClass(): ?string
    {
        return $this->class;
    }

    public function setCrossorigin(?string $value): static
    {
        $this->crossorigin = $value;
        return $this;
    }

    public function getCrossorigin(): ?string
    {
        return $this->crossorigin;
    }

    public function setHref(?string $value): static
    {
        $this->href = $value;
        return $this;
    }

    public function getHref(): ?string
    {
        return $this->href;
    }

    public function setHreflang(?string $value): static
    {
        $this->hreflang = $value;
        return $this;
    }

    public function getHreflang(): ?string
    {
        return $this->hreflang;
    }

    public function setIntegrity(?string $value): static
    {
        $this->integrity = $value;
        return $this;
    }

    public function getIntegrity(): ?string
    {
        return $this->integrity;
    }

    public function setMedia(?string $value): static
    {
        $this->media = $value;
        return $this;
    }

    public function getMedia(): ?string
    {
        return $this->media;
    }

    public function setReferrerpolicy(?string $value): static
    {
        $this->referrerpolicy = $value;
        return $this;
    }

    public function getReferrerpolicy(): ?string
    {
        return $this->referrerpolicy;
    }

    public function setRel(?string $value): static
    {
        $this->rel = $value;
        return $this;
    }

    public function getRel(): ?string
    {
        return $this->rel;
    }

    public function setSizes(?string $value): static
    {
        $this->sizes = $value;
        return $this;
    }

    public function getSizes(): ?string
    {
        return $this->sizes;
    }

    public function setType(?string $value): static
    {
        $this->type = $value;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setDir(?string $value): static
    {
        $this->dir = $value;
        return $this;
    }

    public function getDir(): ?string
    {
        return $this->dir;
    }

    public function setHidden(?string $value): static
    {
        $this->hidden = $value;
        return $this;
    }

    public function getHidden(): ?string
    {
        return $this->hidden;
    }

    public function setLang(?string $value): static
    {
        $this->lang = $value;
        return $this;
    }

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setStyle(?string $value): static
    {
        $this->style = $value;
        return $this;
    }

    public function getStyle(): ?string
    {
        return $this->style;
    }

    public function setTitle(?string $value): static
    {
        $this->title = $value;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }
}
