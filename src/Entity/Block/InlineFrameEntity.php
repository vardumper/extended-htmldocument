<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2026-05-21 10:50:05
 * @subpackage Html\Entity\Block
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/iframe
 */

namespace Html\Entity\Block;

use DateTimeInterface;
use DOM\ORM\Entity\AbstractEntity;
use DOM\ORM\Mapping as ORM;

/**
 * iframe entity — persists as XML via DOM-ORM.
 */
#[ORM\Item(entityType: 'iframe')]
class InlineFrameEntity extends AbstractEntity
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
        'dialog',
        'div',
        'footer',
        'header',
        'main',
        'mark',
        'p',
        'section',
        'slot',
        'template',
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
        protected ?string $allowfullscreen = null,
        #[ORM\Fragment]
        protected ?string $height = null,
        #[ORM\Fragment]
        protected ?string $name = null,
        #[ORM\Fragment]
        protected ?string $referrerpolicy = null,
        #[ORM\Fragment]
        protected ?string $sandbox = null,
        #[ORM\Fragment]
        protected ?string $seamless = null,
        #[ORM\Fragment]
        protected ?string $src = null,
        #[ORM\Fragment]
        protected ?string $srcdoc = null,
        #[ORM\Fragment]
        protected ?string $width = null,
        #[ORM\Fragment]
        protected ?string $role = null,
        #[ORM\Fragment]
        protected ?string $ariaControls = null,
        #[ORM\Fragment]
        protected ?string $ariaDescribedby = null,
        #[ORM\Fragment]
        protected ?string $ariaLabelledby = null,
        #[ORM\Fragment]
        protected ?string $ariaBusy = null,
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
        protected ?string $hidden = null,
        #[ORM\Fragment]
        protected ?string $lang = null,
        #[ORM\Fragment]
        protected ?string $popover = null,
        #[ORM\Fragment]
        protected ?string $slot = null,
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

    public function setAllowfullscreen(?string $value): static
    {
        $this->allowfullscreen = $value;
        return $this;
    }

    public function getAllowfullscreen(): ?string
    {
        return $this->allowfullscreen;
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

    public function setName(?string $value): static
    {
        $this->name = $value;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
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

    public function setSandbox(?string $value): static
    {
        $this->sandbox = $value;
        return $this;
    }

    public function getSandbox(): ?string
    {
        return $this->sandbox;
    }

    public function setSeamless(?string $value): static
    {
        $this->seamless = $value;
        return $this;
    }

    public function getSeamless(): ?string
    {
        return $this->seamless;
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

    public function setSrcdoc(?string $value): static
    {
        $this->srcdoc = $value;
        return $this;
    }

    public function getSrcdoc(): ?string
    {
        return $this->srcdoc;
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

    public function setRole(?string $value): static
    {
        $this->role = $value;
        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setAriaControls(?string $value): static
    {
        $this->ariaControls = $value;
        return $this;
    }

    public function getAriaControls(): ?string
    {
        return $this->ariaControls;
    }

    public function setAriaDescribedby(?string $value): static
    {
        $this->ariaDescribedby = $value;
        return $this;
    }

    public function getAriaDescribedby(): ?string
    {
        return $this->ariaDescribedby;
    }

    public function setAriaLabelledby(?string $value): static
    {
        $this->ariaLabelledby = $value;
        return $this;
    }

    public function getAriaLabelledby(): ?string
    {
        return $this->ariaLabelledby;
    }

    public function setAriaBusy(?string $value): static
    {
        $this->ariaBusy = $value;
        return $this;
    }

    public function getAriaBusy(): ?string
    {
        return $this->ariaBusy;
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

    public function setPopover(?string $value): static
    {
        $this->popover = $value;
        return $this;
    }

    public function getPopover(): ?string
    {
        return $this->popover;
    }

    public function setSlot(?string $value): static
    {
        $this->slot = $value;
        return $this;
    }

    public function getSlot(): ?string
    {
        return $this->slot;
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
