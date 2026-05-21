<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2026-05-21 10:50:05
 * @subpackage Html\Entity\Void
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meta
 */

namespace Html\Entity\Void;

use DateTimeInterface;
use DOM\ORM\Entity\AbstractEntity;
use DOM\ORM\Mapping as ORM;

/**
 * meta entity — persists as XML via DOM-ORM.
 */
#[ORM\Item(entityType: 'meta')]
class MetaEntity extends AbstractEntity
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
        protected ?string $charset = null,
        #[ORM\Fragment]
        protected ?string $content = null,
        #[ORM\Fragment]
        protected ?string $httpEquiv = null,
        #[ORM\Fragment]
        protected ?string $name = null,
        #[ORM\Fragment]
        protected ?string $scheme = null,
        #[ORM\Fragment]
        protected ?string $hidden = null,
        #[ORM\Fragment]
        protected ?string $lang = null,
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

    public function setCharset(?string $value): static
    {
        $this->charset = $value;
        return $this;
    }

    public function getCharset(): ?string
    {
        return $this->charset;
    }

    public function setContent(?string $value): static
    {
        $this->content = $value;
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setHttpEquiv(?string $value): static
    {
        $this->httpEquiv = $value;
        return $this;
    }

    public function getHttpEquiv(): ?string
    {
        return $this->httpEquiv;
    }

    public function setName(?string $value): static
    {
        $this->name = $value;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setScheme(?string $value): static
    {
        $this->scheme = $value;
        return $this;
    }

    public function getScheme(): ?string
    {
        return $this->scheme;
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
