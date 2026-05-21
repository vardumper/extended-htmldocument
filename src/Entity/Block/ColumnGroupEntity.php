<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2026-05-21 10:50:05
 * @subpackage Html\Entity\Block
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/colgroup
 */

namespace Html\Entity\Block;

use DateTimeInterface;
use DOM\ORM\Entity\AbstractEntity;
use DOM\ORM\Mapping as ORM;

/**
 * colgroup entity — persists as XML via DOM-ORM.
 */
#[ORM\Item(entityType: 'colgroup')]
class ColumnGroupEntity extends AbstractEntity
{
    /**
     * Allowed parent elements (HTML content model)
     * @var array<string>
     */
    public static array $childOf = ['table'];

    /**
     * Allowed child elements (HTML content model)
     * @var array<string>
     */
    public static array $parentOf = ['col'];

    public function __construct(
        #[ORM\Fragment]
        protected ?string $class = null,
        #[ORM\Fragment]
        protected ?string $span = null,
        #[ORM\Fragment]
        protected ?string $dir = null,
        #[ORM\Fragment]
        protected ?string $hidden = null,
        #[ORM\Fragment]
        protected ?string $lang = null,
        #[ORM\Fragment]
        protected ?string $slot = null,
        #[ORM\Fragment]
        protected ?string $style = null,
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

    public function setSpan(?string $value): static
    {
        $this->span = $value;
        return $this;
    }

    public function getSpan(): ?string
    {
        return $this->span;
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

    public function setSlot(?string $value): static
    {
        $this->slot = $value;
        return $this;
    }

    public function getSlot(): ?string
    {
        return $this->slot;
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
}
