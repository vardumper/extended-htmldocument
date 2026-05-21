<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2026-05-21 11:39:20
 * @subpackage Html\Entity\Void
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/base
 */

namespace Html\Entity\Void;

use DateTimeInterface;
use DOM\ORM\Entity\AbstractEntity;
use DOM\ORM\Mapping as ORM;

/**
 * base entity — persists as XML via DOM-ORM.
 */
#[ORM\Item(entityType: 'base')]
class BaseEntity extends AbstractEntity
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
        protected ?string $href = null,
        #[ORM\Fragment]
        protected ?string $target = null,
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

    public function setHref(?string $value): static
    {
        $this->href = $value;
        return $this;
    }

    public function getHref(): ?string
    {
        return $this->href;
    }

    public function setTarget(?string $value): static
    {
        $this->target = $value;
        return $this;
    }

    public function getTarget(): ?string
    {
        return $this->target;
    }
}
