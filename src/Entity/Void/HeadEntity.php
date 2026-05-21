<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2026-05-21 10:50:05
 * @subpackage Html\Entity\Void
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/head
 */

namespace Html\Entity\Void;

use DateTimeInterface;
use DOM\ORM\Entity\AbstractEntity;
use DOM\ORM\Mapping as ORM;

/**
 * head entity — persists as XML via DOM-ORM.
 */
#[ORM\Item(entityType: 'head')]
class HeadEntity extends AbstractEntity
{
    /**
     * Allowed parent elements (HTML content model)
     * @var array<string>
     */
    public static array $childOf = ['html'];

    /**
     * Allowed child elements (HTML content model)
     * @var array<string>
     */
    public static array $parentOf = ['base', 'link', 'meta', 'noscript', 'script', 'style', 'title'];

    public function __construct(
        #[ORM\Fragment]
        protected ?string $class = null,
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
}
