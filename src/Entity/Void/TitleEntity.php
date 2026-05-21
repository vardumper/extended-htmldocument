<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2026-05-21 10:50:05
 * @subpackage Html\Entity\Void
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/title
 */

namespace Html\Entity\Void;

use DateTimeInterface;
use DOM\ORM\Entity\AbstractEntity;
use DOM\ORM\Mapping as ORM;

/**
 * title entity — persists as XML via DOM-ORM.
 */
#[ORM\Item(entityType: 'title')]
class TitleEntity extends AbstractEntity
{
    /**
     * Allowed parent elements (HTML content model)
     * @var array<string>
     */
    public static array $childOf = ['head', 'svg'];

    /**
     * Allowed child elements (HTML content model)
     * @var array<string>
     */
    public static array $parentOf = [];

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
