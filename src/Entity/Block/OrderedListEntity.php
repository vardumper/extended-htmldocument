<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2026-05-21 11:39:20
 * @subpackage Html\Entity\Block
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ol
 */

namespace Html\Entity\Block;

use DateTimeInterface;
use DOM\ORM\Entity\AbstractEntity;
use DOM\ORM\Mapping as ORM;
use Html\Enum\AriaAtomicEnum;
use Html\Enum\AriaBusyEnum;
use Html\Enum\AriaHiddenEnum;
use Html\Enum\AriaLiveEnum;
use Html\Enum\AriaMultiselectableEnum;
use Html\Enum\AriaOrientationEnum;
use Html\Enum\AriaRelevantEnum;
use Html\Enum\AutoCapitalizeEnum;
use Html\Enum\ContentEditableEnum;
use Html\Enum\DirectionEnum;
use Html\Enum\InputModeEnum;
use Html\Enum\OlTypeEnum;
use Html\Enum\PopoverEnum;
use Html\Enum\RoleEnum;
use Html\Enum\SpellCheckEnum;
use Html\Enum\TranslateEnum;

/**
 * ol entity — persists as XML via DOM-ORM.
 */
#[ORM\Item(entityType: 'ol')]
class OrderedListEntity extends AbstractEntity
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
        'details',
        'dialog',
        'div',
        'footer',
        'header',
        'li',
        'main',
        'p',
        'section',
        'slot',
        'template',
    ];

    /**
     * Allowed child elements (HTML content model)
     * @var array<string>
     */
    public static array $parentOf = ['li'];

    public function __construct(
        #[ORM\Fragment]
        protected ?string $class = null,
        #[ORM\Fragment]
        protected ?string $reversed = null,
        #[ORM\Fragment]
        protected ?string $start = null,
        #[ORM\Fragment]
        protected ?OlTypeEnum $type = null,
        #[ORM\Fragment]
        protected ?RoleEnum $role = null,
        #[ORM\Fragment]
        protected ?string $ariaControls = null,
        #[ORM\Fragment]
        protected ?string $ariaDescribedby = null,
        #[ORM\Fragment]
        protected ?string $ariaLabelledby = null,
        #[ORM\Fragment]
        protected ?AriaBusyEnum $ariaBusy = null,
        #[ORM\Fragment]
        protected ?AriaHiddenEnum $ariaHidden = null,
        #[ORM\Fragment]
        protected ?string $ariaDetails = null,
        #[ORM\Fragment]
        protected ?string $ariaKeyshortcuts = null,
        #[ORM\Fragment]
        protected ?string $ariaRoledescription = null,
        #[ORM\Fragment]
        protected ?AriaLiveEnum $ariaLive = null,
        #[ORM\Fragment]
        protected ?AriaRelevantEnum $ariaRelevant = null,
        #[ORM\Fragment]
        protected ?AriaAtomicEnum $ariaAtomic = null,
        #[ORM\Fragment]
        protected ?AriaMultiselectableEnum $ariaMultiselectable = null,
        #[ORM\Fragment]
        protected ?string $ariaActivedescendant = null,
        #[ORM\Fragment]
        protected ?AriaOrientationEnum $ariaOrientation = null,
        #[ORM\Fragment]
        protected ?string $ariaOwns = null,
        #[ORM\Fragment]
        protected ?string $accesskey = null,
        #[ORM\Fragment]
        protected ?AutoCapitalizeEnum $autocapitalize = null,
        #[ORM\Fragment]
        protected ?string $autofocus = null,
        #[ORM\Fragment]
        protected ?ContentEditableEnum $contenteditable = null,
        #[ORM\Fragment]
        protected ?DirectionEnum $dir = null,
        #[ORM\Fragment]
        protected ?string $draggable = null,
        #[ORM\Fragment]
        protected ?string $hidden = null,
        #[ORM\Fragment]
        protected ?InputModeEnum $inputmode = null,
        #[ORM\Fragment]
        protected ?string $lang = null,
        #[ORM\Fragment]
        protected ?PopoverEnum $popover = null,
        #[ORM\Fragment]
        protected ?string $slot = null,
        #[ORM\Fragment]
        protected ?SpellCheckEnum $spellcheck = null,
        #[ORM\Fragment]
        protected ?string $style = null,
        #[ORM\Fragment]
        protected ?string $tabindex = null,
        #[ORM\Fragment]
        protected ?string $title = null,
        #[ORM\Fragment]
        protected ?TranslateEnum $translate = null,
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

    public function setReversed(?string $value): static
    {
        $this->reversed = $value;
        return $this;
    }

    public function getReversed(): ?string
    {
        return $this->reversed;
    }

    public function setStart(?string $value): static
    {
        $this->start = $value;
        return $this;
    }

    public function getStart(): ?string
    {
        return $this->start;
    }

    public function setType(?OlTypeEnum $value): static
    {
        $this->type = $value;
        return $this;
    }

    public function getType(): ?OlTypeEnum
    {
        return $this->type;
    }

    public function setRole(?RoleEnum $value): static
    {
        $this->role = $value;
        return $this;
    }

    public function getRole(): ?RoleEnum
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

    public function setAriaBusy(?AriaBusyEnum $value): static
    {
        $this->ariaBusy = $value;
        return $this;
    }

    public function getAriaBusy(): ?AriaBusyEnum
    {
        return $this->ariaBusy;
    }

    public function setAriaHidden(?AriaHiddenEnum $value): static
    {
        $this->ariaHidden = $value;
        return $this;
    }

    public function getAriaHidden(): ?AriaHiddenEnum
    {
        return $this->ariaHidden;
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

    public function setAriaLive(?AriaLiveEnum $value): static
    {
        $this->ariaLive = $value;
        return $this;
    }

    public function getAriaLive(): ?AriaLiveEnum
    {
        return $this->ariaLive;
    }

    public function setAriaRelevant(?AriaRelevantEnum $value): static
    {
        $this->ariaRelevant = $value;
        return $this;
    }

    public function getAriaRelevant(): ?AriaRelevantEnum
    {
        return $this->ariaRelevant;
    }

    public function setAriaAtomic(?AriaAtomicEnum $value): static
    {
        $this->ariaAtomic = $value;
        return $this;
    }

    public function getAriaAtomic(): ?AriaAtomicEnum
    {
        return $this->ariaAtomic;
    }

    public function setAriaMultiselectable(?AriaMultiselectableEnum $value): static
    {
        $this->ariaMultiselectable = $value;
        return $this;
    }

    public function getAriaMultiselectable(): ?AriaMultiselectableEnum
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

    public function setAriaOrientation(?AriaOrientationEnum $value): static
    {
        $this->ariaOrientation = $value;
        return $this;
    }

    public function getAriaOrientation(): ?AriaOrientationEnum
    {
        return $this->ariaOrientation;
    }

    public function setAriaOwns(?string $value): static
    {
        $this->ariaOwns = $value;
        return $this;
    }

    public function getAriaOwns(): ?string
    {
        return $this->ariaOwns;
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

    public function setAutocapitalize(?AutoCapitalizeEnum $value): static
    {
        $this->autocapitalize = $value;
        return $this;
    }

    public function getAutocapitalize(): ?AutoCapitalizeEnum
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

    public function setContenteditable(?ContentEditableEnum $value): static
    {
        $this->contenteditable = $value;
        return $this;
    }

    public function getContenteditable(): ?ContentEditableEnum
    {
        return $this->contenteditable;
    }

    public function setDir(?DirectionEnum $value): static
    {
        $this->dir = $value;
        return $this;
    }

    public function getDir(): ?DirectionEnum
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

    public function setInputmode(?InputModeEnum $value): static
    {
        $this->inputmode = $value;
        return $this;
    }

    public function getInputmode(): ?InputModeEnum
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

    public function setPopover(?PopoverEnum $value): static
    {
        $this->popover = $value;
        return $this;
    }

    public function getPopover(): ?PopoverEnum
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

    public function setSpellcheck(?SpellCheckEnum $value): static
    {
        $this->spellcheck = $value;
        return $this;
    }

    public function getSpellcheck(): ?SpellCheckEnum
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

    public function setTranslate(?TranslateEnum $value): static
    {
        $this->translate = $value;
        return $this;
    }

    public function getTranslate(): ?TranslateEnum
    {
        return $this->translate;
    }
}
