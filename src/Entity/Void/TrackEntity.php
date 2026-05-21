<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2026-05-21 11:39:20
 * @subpackage Html\Entity\Void
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/track
 */

namespace Html\Entity\Void;

use DateTimeInterface;
use DOM\ORM\Entity\AbstractEntity;
use DOM\ORM\Mapping as ORM;
use Html\Enum\KindEnum;

/**
 * track entity — persists as XML via DOM-ORM.
 */
#[ORM\Item(entityType: 'track')]
class TrackEntity extends AbstractEntity
{
    /**
     * Allowed parent elements (HTML content model)
     * @var array<string>
     */
    public static array $childOf = ['aside', 'dd', 'div', 'footer', 'header', 'main', 'mark', 'section'];

    /**
     * Allowed child elements (HTML content model)
     * @var array<string>
     */
    public static array $parentOf = [];

    public function __construct(
        #[ORM\Fragment]
        protected ?string $class = null,
        #[ORM\Fragment]
        protected ?string $default = null,
        #[ORM\Fragment]
        protected ?KindEnum $kind = null,
        #[ORM\Fragment]
        protected ?string $label = null,
        #[ORM\Fragment]
        protected ?string $src = null,
        #[ORM\Fragment]
        protected ?string $srclang = null,
        #[ORM\Fragment]
        protected ?string $hidden = null,
        #[ORM\Fragment]
        protected ?string $lang = null,
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

    public function setDefault(?string $value): static
    {
        $this->default = $value;
        return $this;
    }

    public function getDefault(): ?string
    {
        return $this->default;
    }

    public function setKind(?KindEnum $value): static
    {
        $this->kind = $value;
        return $this;
    }

    public function getKind(): ?KindEnum
    {
        return $this->kind;
    }

    public function setLabel(?string $value): static
    {
        $this->label = $value;
        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
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

    public function setSrclang(?string $value): static
    {
        $this->srclang = $value;
        return $this;
    }

    public function getSrclang(): ?string
    {
        return $this->srclang;
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
}
