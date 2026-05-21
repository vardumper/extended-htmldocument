<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2026-05-21 10:50:05
 * @subpackage Html\Entity\Void
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/source
 */

namespace Html\Entity\Void;

use DateTimeInterface;
use DOM\ORM\Entity\AbstractEntity;
use DOM\ORM\Mapping as ORM;

/**
 * source entity — persists as XML via DOM-ORM.
 */
#[ORM\Item(entityType: 'source')]
class SourceEntity extends AbstractEntity
{
    /**
     * Allowed parent elements (HTML content model)
     * @var array<string>
     */
    public static array $childOf = [
        'aside',
        'dd',
        'div',
        'footer',
        'header',
        'main',
        'mark',
        'picture',
        'section',
    ];

    /**
     * Allowed child elements (HTML content model)
     * @var array<string>
     */
    public static array $parentOf = [];

    public function __construct(
        #[ORM\Fragment]
        protected ?string $class = null,
        #[ORM\Fragment]
        protected ?string $media = null,
        #[ORM\Fragment]
        protected ?string $sizes = null,
        #[ORM\Fragment]
        protected ?string $src = null,
        #[ORM\Fragment]
        protected ?string $srcset = null,
        #[ORM\Fragment]
        protected ?string $type = null,
        #[ORM\Fragment]
        protected ?string $hidden = null,
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

    public function setMedia(?string $value): static
    {
        $this->media = $value;
        return $this;
    }

    public function getMedia(): ?string
    {
        return $this->media;
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

    public function setSrc(?string $value): static
    {
        $this->src = $value;
        return $this;
    }

    public function getSrc(): ?string
    {
        return $this->src;
    }

    public function setSrcset(?string $value): static
    {
        $this->srcset = $value;
        return $this;
    }

    public function getSrcset(): ?string
    {
        return $this->srcset;
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

    public function setHidden(?string $value): static
    {
        $this->hidden = $value;
        return $this;
    }

    public function getHidden(): ?string
    {
        return $this->hidden;
    }
}
