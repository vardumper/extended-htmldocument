<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2026-05-21 10:50:05
 * @subpackage Html\Entity\Block
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form
 */

namespace Html\Entity\Block;

use DateTimeInterface;
use DOM\ORM\Entity\AbstractEntity;
use DOM\ORM\Mapping as ORM;

/**
 * form entity — persists as XML via DOM-ORM.
 */
#[ORM\Item(entityType: 'form')]
class FormEntity extends AbstractEntity
{
    /**
     * Allowed parent elements (HTML content model)
     * @var array<string>
     */
    public static array $childOf = [
        'article',
        'body',
        'dd',
        'details',
        'dialog',
        'div',
        'header',
        'main',
        'mark',
        'menu',
        'p',
        'section',
        'slot',
        'template',
    ];

    /**
     * Allowed child elements (HTML content model)
     * @var array<string>
     */
    public static array $parentOf = [
        'button',
        'canvas',
        'datalist',
        'details',
        'dialog',
        'fieldset',
        'input',
        'label',
        'legend',
        'meter',
        'noscript',
        'output',
        'progress',
        'script',
        'select',
        'slot',
        'summary',
        'template',
        'textarea',
    ];

    public function __construct(
        #[ORM\Fragment]
        protected ?string $class = null,
        #[ORM\Fragment]
        protected ?string $acceptCharset = null,
        #[ORM\Fragment]
        protected ?string $action = null,
        #[ORM\Fragment]
        protected ?string $autocomplete = null,
        #[ORM\Fragment]
        protected ?string $autocorrect = null,
        #[ORM\Fragment]
        protected ?string $enctype = null,
        #[ORM\Fragment]
        protected ?string $method = null,
        #[ORM\Fragment]
        protected ?string $name = null,
        #[ORM\Fragment]
        protected ?string $novalidate = null,
        #[ORM\Fragment]
        protected ?string $target = null,
        #[ORM\Fragment]
        protected ?string $ariaInvalid = null,
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
        protected ?string $accesskey = null,
        #[ORM\Fragment]
        protected ?string $dir = null,
        #[ORM\Fragment]
        protected ?string $draggable = null,
        #[ORM\Fragment]
        protected ?string $hidden = null,
        #[ORM\Fragment]
        protected ?string $lang = null,
        #[ORM\Fragment]
        protected ?string $slot = null,
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

    public function setAcceptCharset(?string $value): static
    {
        $this->acceptCharset = $value;
        return $this;
    }

    public function getAcceptCharset(): ?string
    {
        return $this->acceptCharset;
    }

    public function setAction(?string $value): static
    {
        $this->action = $value;
        return $this;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAutocomplete(?string $value): static
    {
        $this->autocomplete = $value;
        return $this;
    }

    public function getAutocomplete(): ?string
    {
        return $this->autocomplete;
    }

    public function setAutocorrect(?string $value): static
    {
        $this->autocorrect = $value;
        return $this;
    }

    public function getAutocorrect(): ?string
    {
        return $this->autocorrect;
    }

    public function setEnctype(?string $value): static
    {
        $this->enctype = $value;
        return $this;
    }

    public function getEnctype(): ?string
    {
        return $this->enctype;
    }

    public function setMethod(?string $value): static
    {
        $this->method = $value;
        return $this;
    }

    public function getMethod(): ?string
    {
        return $this->method;
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

    public function setNovalidate(?string $value): static
    {
        $this->novalidate = $value;
        return $this;
    }

    public function getNovalidate(): ?string
    {
        return $this->novalidate;
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

    public function setAriaInvalid(?string $value): static
    {
        $this->ariaInvalid = $value;
        return $this;
    }

    public function getAriaInvalid(): ?string
    {
        return $this->ariaInvalid;
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

    public function setAccesskey(?string $value): static
    {
        $this->accesskey = $value;
        return $this;
    }

    public function getAccesskey(): ?string
    {
        return $this->accesskey;
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
