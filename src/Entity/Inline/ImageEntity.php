<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2026-05-21 10:50:05
 * @subpackage Html\Entity\Inline
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img
 */

namespace Html\Entity\Inline;

use DateTimeInterface;
use DOM\ORM\Entity\AbstractEntity;
use DOM\ORM\Mapping as ORM;

/**
 * img entity — persists as XML via DOM-ORM.
 */
#[ORM\Item(entityType: 'img')]
class ImageEntity extends AbstractEntity
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
        'figure',
        'footer',
        'header',
        'main',
        'mark',
        'p',
        'picture',
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
        protected ?string $crossorigin = null,
        #[ORM\Fragment]
        protected ?string $decoding = null,
        #[ORM\Fragment]
        protected ?string $height = null,
        #[ORM\Fragment]
        protected ?string $ismap = null,
        #[ORM\Fragment]
        protected ?string $referrerpolicy = null,
        #[ORM\Fragment]
        protected ?string $sizes = null,
        #[ORM\Fragment]
        protected ?string $src = null,
        #[ORM\Fragment]
        protected ?string $srcset = null,
        #[ORM\Fragment]
        protected ?string $usemap = null,
        #[ORM\Fragment]
        protected ?string $width = null,
        #[ORM\Fragment]
        protected ?string $ariaHidden = null,
        #[ORM\Fragment]
        protected ?string $ariaLabel = null,
        #[ORM\Fragment]
        protected ?string $ariaDetails = null,
        #[ORM\Fragment]
        protected ?string $ariaKeyshortcuts = null,
        #[ORM\Fragment]
        protected ?string $ariaRoledescription = null,
        #[ORM\Fragment]
        protected ?string $ariaLive = null,
        #[ORM\Fragment]
        protected ?string $ariaRelevant = null,
        #[ORM\Fragment]
        protected ?string $ariaAtomic = null,
        #[ORM\Fragment]
        protected ?string $dir = null,
        #[ORM\Fragment]
        protected ?string $draggable = null,
        #[ORM\Fragment]
        protected ?string $hidden = null,
        #[ORM\Fragment]
        protected ?string $lang = null,
        #[ORM\Fragment]
        protected ?string $style = null,
        #[ORM\Fragment]
        protected ?string $tabindex = null,
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

    public function setAlt(?string $value): static
    {
        $this->alt = $value;
        return $this;
    }

    public function getAlt(): ?string
    {
        return $this->alt;
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

    public function setDecoding(?string $value): static
    {
        $this->decoding = $value;
        return $this;
    }

    public function getDecoding(): ?string
    {
        return $this->decoding;
    }

    public function setHeight(?string $value): static
    {
        $this->height = $value;
        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setIsmap(?string $value): static
    {
        $this->ismap = $value;
        return $this;
    }

    public function getIsmap(): ?string
    {
        return $this->ismap;
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

    public function setSizes(?string $value): static
    {
        $this->sizes = $value;
        return $this;
    }

    public function getSizes(): ?string
    {
        return $this->sizes;
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

    public function setSrcset(?string $value): static
    {
        $this->srcset = $value;
        return $this;
    }

    public function getSrcset(): ?string
    {
        return $this->srcset;
    }

    public function setUsemap(?string $value): static
    {
        $this->usemap = $value;
        return $this;
    }

    public function getUsemap(): ?string
    {
        return $this->usemap;
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

    public function setAriaHidden(?string $value): static
    {
        $this->ariaHidden = $value;
        return $this;
    }

    public function getAriaHidden(): ?string
    {
        return $this->ariaHidden;
    }

    public function setAriaLabel(?string $value): static
    {
        $this->ariaLabel = $value;
        return $this;
    }

    public function getAriaLabel(): ?string
    {
        return $this->ariaLabel;
    }

    public function setAriaDetails(?string $value): static
    {
        $this->ariaDetails = $value;
        return $this;
    }

    public function getAriaDetails(): ?string
    {
        return $this->ariaDetails;
    }

    public function setAriaKeyshortcuts(?string $value): static
    {
        $this->ariaKeyshortcuts = $value;
        return $this;
    }

    public function getAriaKeyshortcuts(): ?string
    {
        return $this->ariaKeyshortcuts;
    }

    public function setAriaRoledescription(?string $value): static
    {
        $this->ariaRoledescription = $value;
        return $this;
    }

    public function getAriaRoledescription(): ?string
    {
        return $this->ariaRoledescription;
    }

    public function setAriaLive(?string $value): static
    {
        $this->ariaLive = $value;
        return $this;
    }

    public function getAriaLive(): ?string
    {
        return $this->ariaLive;
    }

    public function setAriaRelevant(?string $value): static
    {
        $this->ariaRelevant = $value;
        return $this;
    }

    public function getAriaRelevant(): ?string
    {
        return $this->ariaRelevant;
    }

    public function setAriaAtomic(?string $value): static
    {
        $this->ariaAtomic = $value;
        return $this;
    }

    public function getAriaAtomic(): ?string
    {
        return $this->ariaAtomic;
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
}
