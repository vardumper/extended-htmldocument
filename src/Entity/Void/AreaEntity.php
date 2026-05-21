<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2026-05-21 10:50:05
 * @subpackage Html\Entity\Void
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/area
 */

namespace Html\Entity\Void;

use DateTimeInterface;
use DOM\ORM\Entity\AbstractEntity;
use DOM\ORM\Mapping as ORM;

/**
 * area entity — persists as XML via DOM-ORM.
 */
#[ORM\Item(entityType: 'area')]
class AreaEntity extends AbstractEntity
{
    /**
     * Allowed parent elements (HTML content model)
     * @var array<string>
     */
    public static array $childOf = [
        'article',
        'aside',
        'body',
        'dd',
        'div',
        'footer',
        'header',
        'main',
        'map',
        'mark',
        'p',
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
        protected ?string $alt = null,
        #[ORM\Fragment]
        protected ?string $coords = null,
        #[ORM\Fragment]
        protected ?string $download = null,
        #[ORM\Fragment]
        protected ?string $href = null,
        #[ORM\Fragment]
        protected ?string $hreflang = null,
        #[ORM\Fragment]
        protected ?string $rel = null,
        #[ORM\Fragment]
        protected ?string $shape = null,
        #[ORM\Fragment]
        protected ?string $target = null,
        #[ORM\Fragment]
        protected ?string $type = null,
        #[ORM\Fragment]
        protected ?string $accesskey = null,
        #[ORM\Fragment]
        protected ?string $autocapitalize = null,
        #[ORM\Fragment]
        protected ?string $autofocus = null,
        #[ORM\Fragment]
        protected ?string $contenteditable = null,
        #[ORM\Fragment]
        protected ?string $dir = null,
        #[ORM\Fragment]
        protected ?string $draggable = null,
        #[ORM\Fragment]
        protected ?string $hidden = null,
        #[ORM\Fragment]
        protected ?string $inputmode = null,
        #[ORM\Fragment]
        protected ?string $lang = null,
        #[ORM\Fragment]
        protected ?string $spellcheck = null,
        #[ORM\Fragment]
        protected ?string $style = null,
        #[ORM\Fragment]
        protected ?string $tabindex = null,
        #[ORM\Fragment]
        protected ?string $title = null,
        #[ORM\Fragment]
        protected ?string $translate = null,
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

    public function setAlt(?string $value): static
    {
        $this->alt = $value;
        return $this;
    }

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setCoords(?string $value): static
    {
        $this->coords = $value;
        return $this;
    }

    public function getCoords(): ?string
    {
        return $this->coords;
    }

    public function setDownload(?string $value): static
    {
        $this->download = $value;
        return $this;
    }

    public function getDownload(): ?string
    {
        return $this->download;
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

    public function setHreflang(?string $value): static
    {
        $this->hreflang = $value;
        return $this;
    }

    public function getHreflang(): ?string
    {
        return $this->hreflang;
    }

    public function setRel(?string $value): static
    {
        $this->rel = $value;
        return $this;
    }

    public function getRel(): ?string
    {
        return $this->rel;
    }

    public function setShape(?string $value): static
    {
        $this->shape = $value;
        return $this;
    }

    public function getShape(): ?string
    {
        return $this->shape;
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

    public function setType(?string $value): static
    {
        $this->type = $value;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setAccesskey(?string $value): static
    {
        $this->accesskey = $value;
        return $this;
    }

    public function getAccesskey(): ?string
    {
        return $this->accesskey;
    }

    public function setAutocapitalize(?string $value): static
    {
        $this->autocapitalize = $value;
        return $this;
    }

    public function getAutocapitalize(): ?string
    {
        return $this->autocapitalize;
    }

    public function setAutofocus(?string $value): static
    {
        $this->autofocus = $value;
        return $this;
    }

    public function getAutofocus(): ?string
    {
        return $this->autofocus;
    }

    public function setContenteditable(?string $value): static
    {
        $this->contenteditable = $value;
        return $this;
    }

    public function getContenteditable(): ?string
    {
        return $this->contenteditable;
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

    public function setDraggable(?string $value): static
    {
        $this->draggable = $value;
        return $this;
    }

    public function getDraggable(): ?string
    {
        return $this->draggable;
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

    public function setInputmode(?string $value): static
    {
        $this->inputmode = $value;
        return $this;
    }

    public function getInputmode(): ?string
    {
        return $this->inputmode;
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

    public function setSpellcheck(?string $value): static
    {
        $this->spellcheck = $value;
        return $this;
    }

    public function getSpellcheck(): ?string
    {
        return $this->spellcheck;
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

    public function setTabindex(?string $value): static
    {
        $this->tabindex = $value;
        return $this;
    }

    public function getTabindex(): ?string
    {
        return $this->tabindex;
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

    public function setTranslate(?string $value): static
    {
        $this->translate = $value;
        return $this;
    }

    public function getTranslate(): ?string
    {
        return $this->translate;
    }
}
