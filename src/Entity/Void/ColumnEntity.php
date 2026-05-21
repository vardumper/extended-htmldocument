<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2026-05-21 10:50:05
 * @subpackage Html\Entity\Void
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/col
 */

namespace Html\Entity\Void;

use DateTimeInterface;
use DOM\ORM\Entity\AbstractEntity;
use DOM\ORM\Mapping as ORM;

/**
 * col entity — persists as XML via DOM-ORM.
 */
#[ORM\Item(entityType: 'col')]
class ColumnEntity extends AbstractEntity
{
    /**
     * Allowed parent elements (HTML content model)
     * @var array<string>
     */
    public static array $childOf = ['colgroup'];

    /**
     * Allowed child elements (HTML content model)
     * @var array<string>
     */
    public static array $parentOf = [];

    public function __construct(
        #[ORM\Fragment]
        protected ?string $class = null,
        #[ORM\Fragment]
        protected ?string $span = null,
        #[ORM\Fragment]
        protected ?string $width = null,
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

    public function setWidth(?string $value): static
    {
        $this->width = $value;
        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->width;
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
