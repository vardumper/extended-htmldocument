<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2026-05-21 10:50:05
 * @subpackage Html\Entity\Inline
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/select
 */

namespace Html\Entity\Inline;

use DateTimeInterface;
use DOM\ORM\Entity\AbstractEntity;
use DOM\ORM\Mapping as ORM;

/**
 * select entity — persists as XML via DOM-ORM.
 */
#[ORM\Item(entityType: 'select')]
class SelectEntity extends AbstractEntity
{
    /**
     * Allowed parent elements (HTML content model)
     * @var array<string>
     */
    public static array $childOf = [
        'aside',
        'body',
        'dd',
        'dialog',
        'div',
        'fieldset',
        'footer',
        'form',
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
    public static array $parentOf = ['optgroup', 'option'];

    public function __construct(
        #[ORM\Fragment]
        protected ?string $class = null,
        #[ORM\Fragment]
        protected ?string $autocomplete = null,
        #[ORM\Fragment]
        protected ?string $autocorrect = null,
        #[ORM\Fragment]
        protected ?string $disabled = null,
        #[ORM\Fragment]
        protected ?string $multiple = null,
        #[ORM\Fragment]
        protected ?string $name = null,
        #[ORM\Fragment]
        protected ?string $required = null,
        #[ORM\Fragment]
        protected ?string $size = null,
        #[ORM\Fragment]
        protected ?string $form = null,
        #[ORM\Fragment]
        protected ?string $role = null,
        #[ORM\Fragment]
        protected ?string $ariaControls = null,
        #[ORM\Fragment]
        protected ?string $ariaDescribedby = null,
        #[ORM\Fragment]
        protected ?string $ariaLabelledby = null,
        #[ORM\Fragment]
        protected ?string $ariaInvalid = null,
        #[ORM\Fragment]
        protected ?string $ariaLabel = null,
        #[ORM\Fragment]
        protected ?string $ariaDisabled = null,
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
        protected ?string $ariaExpanded = null,
        #[ORM\Fragment]
        protected ?string $ariaHaspopup = null,
        #[ORM\Fragment]
        protected ?string $ariaPressed = null,
        #[ORM\Fragment]
        protected ?string $ariaAutocomplete = null,
        #[ORM\Fragment]
        protected ?string $ariaPlaceholder = null,
        #[ORM\Fragment]
        protected ?string $ariaReadonly = null,
        #[ORM\Fragment]
        protected ?string $ariaRequired = null,
        #[ORM\Fragment]
        protected ?string $ariaMultiselectable = null,
        #[ORM\Fragment]
        protected ?string $ariaActivedescendant = null,
        #[ORM\Fragment]
        protected ?string $ariaOrientation = null,
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
        protected ?string $popover = null,
        #[ORM\Fragment]
        protected ?string $slot = null,
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

    public function setDisabled(?string $value): static
    {
        $this->disabled = $value;
        return $this;
    }

    public function getDisabled(): ?string
    {
        return $this->disabled;
    }

    public function setMultiple(?string $value): static
    {
        $this->multiple = $value;
        return $this;
    }

    public function getMultiple(): ?string
    {
        return $this->multiple;
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

    public function setRequired(?string $value): static
    {
        $this->required = $value;
        return $this;
    }

    public function getRequired(): ?string
    {
        return $this->required;
    }

    public function setSize(?string $value): static
    {
        $this->size = $value;
        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setForm(?string $value): static
    {
        $this->form = $value;
        return $this;
    }

    public function getForm(): ?string
    {
        return $this->form;
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

    public function setAriaDisabled(?string $value): static
    {
        $this->ariaDisabled = $value;
        return $this;
    }

    public function getAriaDisabled(): ?string
    {
        return $this->ariaDisabled;
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

    public function setAriaExpanded(?string $value): static
    {
        $this->ariaExpanded = $value;
        return $this;
    }

    public function getAriaExpanded(): ?string
    {
        return $this->ariaExpanded;
    }

    public function setAriaHaspopup(?string $value): static
    {
        $this->ariaHaspopup = $value;
        return $this;
    }

    public function getAriaHaspopup(): ?string
    {
        return $this->ariaHaspopup;
    }

    public function setAriaPressed(?string $value): static
    {
        $this->ariaPressed = $value;
        return $this;
    }

    public function getAriaPressed(): ?string
    {
        return $this->ariaPressed;
    }

    public function setAriaAutocomplete(?string $value): static
    {
        $this->ariaAutocomplete = $value;
        return $this;
    }

    public function getAriaAutocomplete(): ?string
    {
        return $this->ariaAutocomplete;
    }

    public function setAriaPlaceholder(?string $value): static
    {
        $this->ariaPlaceholder = $value;
        return $this;
    }

    public function getAriaPlaceholder(): ?string
    {
        return $this->ariaPlaceholder;
    }

    public function setAriaReadonly(?string $value): static
    {
        $this->ariaReadonly = $value;
        return $this;
    }

    public function getAriaReadonly(): ?string
    {
        return $this->ariaReadonly;
    }

    public function setAriaRequired(?string $value): static
    {
        $this->ariaRequired = $value;
        return $this;
    }

    public function getAriaRequired(): ?string
    {
        return $this->ariaRequired;
    }

    public function setAriaMultiselectable(?string $value): static
    {
        $this->ariaMultiselectable = $value;
        return $this;
    }

    public function getAriaMultiselectable(): ?string
    {
        return $this->ariaMultiselectable;
    }

    public function setAriaActivedescendant(?string $value): static
    {
        $this->ariaActivedescendant = $value;
        return $this;
    }

    public function getAriaActivedescendant(): ?string
    {
        return $this->ariaActivedescendant;
    }

    public function setAriaOrientation(?string $value): static
    {
        $this->ariaOrientation = $value;
        return $this;
    }

    public function getAriaOrientation(): ?string
    {
        return $this->ariaOrientation;
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
