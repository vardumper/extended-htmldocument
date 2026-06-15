<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2026-05-21 11:39:20
 * @subpackage Html\Entity\Inline
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/textarea
 */

namespace Html\Entity\Inline;

use DateTimeInterface;
use DOM\ORM\Entity\AbstractEntity;
use DOM\ORM\Mapping as ORM;
use Html\Enum\AriaAtomicEnum;
use Html\Enum\AriaAutocompleteEnum;
use Html\Enum\AriaDisabledEnum;
use Html\Enum\AriaExpandedEnum;
use Html\Enum\AriaHaspopupEnum;
use Html\Enum\AriaInvalidEnum;
use Html\Enum\AriaLiveEnum;
use Html\Enum\AriaMultilineEnum;
use Html\Enum\AriaPressedEnum;
use Html\Enum\AriaReadonlyEnum;
use Html\Enum\AriaRelevantEnum;
use Html\Enum\AriaRequiredEnum;
use Html\Enum\AutoCapitalizeEnum;
use Html\Enum\AutocompleteEnum;
use Html\Enum\AutocorrectEnum;
use Html\Enum\ContentEditableEnum;
use Html\Enum\DirectionEnum;
use Html\Enum\InputModeEnum;
use Html\Enum\PopoverEnum;
use Html\Enum\RoleEnum;
use Html\Enum\SpellCheckEnum;
use Html\Enum\TranslateEnum;
use Html\Enum\WrapEnum;

/**
 * textarea entity — persists as XML via DOM-ORM.
 */
#[ORM\Item(entityType: 'textarea')]
class TextareaEntity extends AbstractEntity
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
    public static array $parentOf = [];

    public function __construct(
        #[ORM\Fragment]
        protected ?string $class = null,
        #[ORM\Fragment]
        protected ?AutocompleteEnum $autocomplete = null,
        #[ORM\Fragment]
        protected ?AutocorrectEnum $autocorrect = null,
        #[ORM\Fragment]
        protected ?string $cols = null,
        #[ORM\Fragment]
        protected ?string $dirname = null,
        #[ORM\Fragment]
        protected ?string $disabled = null,
        #[ORM\Fragment]
        protected ?string $form = null,
        #[ORM\Fragment]
        protected ?string $maxlength = null,
        #[ORM\Fragment]
        protected ?string $minlength = null,
        #[ORM\Fragment]
        protected ?string $name = null,
        #[ORM\Fragment]
        protected ?string $placeholder = null,
        #[ORM\Fragment]
        protected ?string $readonly = null,
        #[ORM\Fragment]
        protected ?string $required = null,
        #[ORM\Fragment]
        protected ?string $rows = null,
        #[ORM\Fragment]
        protected ?WrapEnum $wrap = null,
        #[ORM\Fragment]
        protected ?RoleEnum $role = null,
        #[ORM\Fragment]
        protected ?string $ariaControls = null,
        #[ORM\Fragment]
        protected ?string $ariaDescribedby = null,
        #[ORM\Fragment]
        protected ?string $ariaLabelledby = null,
        #[ORM\Fragment]
        protected ?AriaInvalidEnum $ariaInvalid = null,
        #[ORM\Fragment]
        protected ?string $ariaLabel = null,
        #[ORM\Fragment]
        protected ?AriaDisabledEnum $ariaDisabled = null,
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
        protected ?AriaExpandedEnum $ariaExpanded = null,
        #[ORM\Fragment]
        protected ?AriaHaspopupEnum $ariaHaspopup = null,
        #[ORM\Fragment]
        protected ?AriaPressedEnum $ariaPressed = null,
        #[ORM\Fragment]
        protected ?AriaAutocompleteEnum $ariaAutocomplete = null,
        #[ORM\Fragment]
        protected ?string $ariaPlaceholder = null,
        #[ORM\Fragment]
        protected ?AriaReadonlyEnum $ariaReadonly = null,
        #[ORM\Fragment]
        protected ?AriaRequiredEnum $ariaRequired = null,
        #[ORM\Fragment]
        protected ?AriaMultilineEnum $ariaMultiline = null,
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

    public function setAutocomplete(?AutocompleteEnum $value): static
    {
        $this->autocomplete = $value;
        return $this;
    }

    public function getAutocomplete(): ?AutocompleteEnum
    {
        return $this->autocomplete;
    }

    public function setAutocorrect(?AutocorrectEnum $value): static
    {
        $this->autocorrect = $value;
        return $this;
    }

    public function getAutocorrect(): ?AutocorrectEnum
    {
        return $this->autocorrect;
    }

    public function setCols(?string $value): static
    {
        $this->cols = $value;
        return $this;
    }

    public function getCols(): ?string
    {
        return $this->cols;
    }

    public function setDirname(?string $value): static
    {
        $this->dirname = $value;
        return $this;
    }

    public function getDirname(): ?string
    {
        return $this->dirname;
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

    public function setForm(?string $value): static
    {
        $this->form = $value;
        return $this;
    }

    public function getForm(): ?string
    {
        return $this->form;
    }

    public function setMaxlength(?string $value): static
    {
        $this->maxlength = $value;
        return $this;
    }

    public function getMaxlength(): ?string
    {
        return $this->maxlength;
    }

    public function setMinlength(?string $value): static
    {
        $this->minlength = $value;
        return $this;
    }

    public function getMinlength(): ?string
    {
        return $this->minlength;
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

    public function setPlaceholder(?string $value): static
    {
        $this->placeholder = $value;
        return $this;
    }

    public function getPlaceholder(): ?string
    {
        return $this->placeholder;
    }

    public function setReadonly(?string $value): static
    {
        $this->readonly = $value;
        return $this;
    }

    public function getReadonly(): ?string
    {
        return $this->readonly;
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

    public function setRows(?string $value): static
    {
        $this->rows = $value;
        return $this;
    }

    public function getRows(): ?string
    {
        return $this->rows;
    }

    public function setWrap(?WrapEnum $value): static
    {
        $this->wrap = $value;
        return $this;
    }

    public function getWrap(): ?WrapEnum
    {
        return $this->wrap;
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

    public function setAriaInvalid(?AriaInvalidEnum $value): static
    {
        $this->ariaInvalid = $value;
        return $this;
    }

    public function getAriaInvalid(): ?AriaInvalidEnum
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

    public function setAriaDisabled(?AriaDisabledEnum $value): static
    {
        $this->ariaDisabled = $value;
        return $this;
    }

    public function getAriaDisabled(): ?AriaDisabledEnum
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

    public function setAriaExpanded(?AriaExpandedEnum $value): static
    {
        $this->ariaExpanded = $value;
        return $this;
    }

    public function getAriaExpanded(): ?AriaExpandedEnum
    {
        return $this->ariaExpanded;
    }

    public function setAriaHaspopup(?AriaHaspopupEnum $value): static
    {
        $this->ariaHaspopup = $value;
        return $this;
    }

    public function getAriaHaspopup(): ?AriaHaspopupEnum
    {
        return $this->ariaHaspopup;
    }

    public function setAriaPressed(?AriaPressedEnum $value): static
    {
        $this->ariaPressed = $value;
        return $this;
    }

    public function getAriaPressed(): ?AriaPressedEnum
    {
        return $this->ariaPressed;
    }

    public function setAriaAutocomplete(?AriaAutocompleteEnum $value): static
    {
        $this->ariaAutocomplete = $value;
        return $this;
    }

    public function getAriaAutocomplete(): ?AriaAutocompleteEnum
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

    public function setAriaReadonly(?AriaReadonlyEnum $value): static
    {
        $this->ariaReadonly = $value;
        return $this;
    }

    public function getAriaReadonly(): ?AriaReadonlyEnum
    {
        return $this->ariaReadonly;
    }

    public function setAriaRequired(?AriaRequiredEnum $value): static
    {
        $this->ariaRequired = $value;
        return $this;
    }

    public function getAriaRequired(): ?AriaRequiredEnum
    {
        return $this->ariaRequired;
    }

    public function setAriaMultiline(?AriaMultilineEnum $value): static
    {
        $this->ariaMultiline = $value;
        return $this;
    }

    public function getAriaMultiline(): ?AriaMultilineEnum
    {
        return $this->ariaMultiline;
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
