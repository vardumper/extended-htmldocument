<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2026-05-21 10:50:05
 * @subpackage Html\Entity\Void
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script
 */

namespace Html\Entity\Void;

use DateTimeInterface;
use DOM\ORM\Entity\AbstractEntity;
use DOM\ORM\Mapping as ORM;

/**
 * script entity — persists as XML via DOM-ORM.
 */
#[ORM\Item(entityType: 'script')]
class ScriptEntity extends AbstractEntity
{
    /**
     * Allowed parent elements (HTML content model)
     * @var array<string>
     */
    public static array $childOf = ['body', 'form', 'head', 'menu', 'svg'];

    /**
     * Allowed child elements (HTML content model)
     * @var array<string>
     */
    public static array $parentOf = [];

    public function __construct(
        #[ORM\Fragment]
        protected ?string $class = null,
        #[ORM\Fragment]
        protected ?string $async = null,
        #[ORM\Fragment]
        protected ?string $charset = null,
        #[ORM\Fragment]
        protected ?string $crossorigin = null,
        #[ORM\Fragment]
        protected ?string $defer = null,
        #[ORM\Fragment]
        protected ?string $integrity = null,
        #[ORM\Fragment]
        protected ?string $nonce = null,
        #[ORM\Fragment]
        protected ?string $referrerpolicy = null,
        #[ORM\Fragment]
        protected ?string $src = null,
        #[ORM\Fragment]
        protected ?string $type = null,
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

    public function setAsync(?string $value): static
    {
        $this->async = $value;
        return $this;
    }

    public function getAsync(): ?string
    {
        return $this->async;
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

    public function setCrossorigin(?string $value): static
    {
        $this->crossorigin = $value;
        return $this;
    }

    public function getCrossorigin(): ?string
    {
        return $this->crossorigin;
    }

    public function setDefer(?string $value): static
    {
        $this->defer = $value;
        return $this;
    }

    public function getDefer(): ?string
    {
        return $this->defer;
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

    public function setNonce(?string $value): static
    {
        $this->nonce = $value;
        return $this;
    }

    public function getNonce(): ?string
    {
        return $this->nonce;
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

    public function setSrc(?string $value): static
    {
        $this->src = $value;
        return $this;
    }

    public function getSrc(): ?string
    {
        return $this->src;
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
