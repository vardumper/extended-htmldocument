<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2026-05-21 10:50:05
 * @subpackage Html\Entity\Block
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/hr
 */

namespace Html\Entity\Block;

use DateTimeInterface;
use DOM\ORM\Entity\AbstractEntity;
use DOM\ORM\Mapping as ORM;

/**
 * hr entity — persists as XML via DOM-ORM.
 */
#[ORM\Item(entityType: 'hr')]
class HorizontalRuleEntity extends AbstractEntity
{
    /**
     * Allowed parent elements (HTML content model)
     * @var array<string>
     */
    public static array $childOf = ['body', 'p'];

    /**
     * Allowed child elements (HTML content model)
     * @var array<string>
     */
    public static array $parentOf = [];

    public function __construct(
        #[ORM\Fragment]
        protected ?string $class = null,
        #[ORM\Fragment]
        protected ?string $align = null,
        #[ORM\Fragment]
        protected ?string $color = null,
        #[ORM\Fragment]
        protected ?string $noshade = null,
        #[ORM\Fragment]
        protected ?string $size = null,
        #[ORM\Fragment]
        protected ?string $width = null,
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

    public function setAlign(?string $value): static
    {
        $this->align = $value;
        return $this;
    }

    public function getAlign(): ?string
    {
        return $this->align;
    }

    public function setColor(?string $value): static
    {
        $this->color = $value;
        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setNoshade(?string $value): static
    {
        $this->noshade = $value;
        return $this;
    }

    public function getNoshade(): ?string
    {
        return $this->noshade;
    }

    public function setSize(?string $value): static
    {
        $this->size = $value;
        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setWidth(?string $value): static
    {
        $this->width = $value;
        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->width;
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
