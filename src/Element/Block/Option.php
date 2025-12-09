<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2025-12-09 15:32:40
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/option
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\Select;
use Html\Enum\{
    AriaAtomicEnum,
    AriaBusyEnum,
    AriaHiddenEnum,
    AriaLiveEnum,
    AriaRelevantEnum,
    AriaSelectedEnum,
    RoleEnum,
};
use Html\Mapping\Element;
use Html\Trait\GlobalAttribute;
use InvalidArgumentException;

/**
 * The option element represents an item in a select dropdown list.
 */
#[Element('option')]
class Option extends BlockElement
{
    use GlobalAttribute\AccesskeyTrait;
    use GlobalAttribute\AutocapitalizeTrait;
    use GlobalAttribute\ClassTrait;
    use GlobalAttribute\ContenteditableTrait;
    use GlobalAttribute\DataTrait;
    use GlobalAttribute\DirTrait;
    use GlobalAttribute\DraggableTrait;
    use GlobalAttribute\HiddenTrait;
    use GlobalAttribute\IdTrait;
    use GlobalAttribute\InputmodeTrait;
    use GlobalAttribute\LangTrait;
    use GlobalAttribute\PopoverTrait;
    use GlobalAttribute\SlotTrait;
    use GlobalAttribute\SpellcheckTrait;
    use GlobalAttribute\StyleTrait;
    use GlobalAttribute\TabindexTrait;
    use GlobalAttribute\TitleTrait;
    use GlobalAttribute\TranslateTrait;

    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'option';

    /**
     * If an element is self closing
     */
    public const bool SELF_CLOSING = false;

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = false;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [Select::class, OptionGroup::class, DataList::class];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * When present, it specifies that an input element should be disabled.
     */
    protected ?bool $disabled = null;

    /**
     * Specifies a label for the associated form control, option group, or option.
     */
    protected ?string $label = null;

    /**
     * When present, it specifies that an option should be pre-selected when the page loads.
     */
    protected ?bool $selected = null;

    /**
     * Specifies the value associated with the element. The meaning and usage may vary depending on the element type.
     */
    protected ?string $value = null;

    /**
     * Defines the semantic purpose of an element for assistive technologies.
     */
    protected ?RoleEnum $role = null;

    /**
     * Identifies the element(s) whose contents or presence are controlled by this element. Value is a list of IDs separated by a space
     */
    protected ?string $ariaControls = null;

    /**
     * Identifies the element(s) that describes the object. Value is a list of IDs separated by a space
     */
    protected ?string $ariaDescribedby = null;

    /**
     * Identifies the element(s) that labels the current element. Value is a list of IDs separated by a space
     */
    protected ?string $ariaLabelledby = null;

    /**
     * The aria-busy attribute is used to indicate whether an element is currently busy or not.
     * @example false
     */
    protected ?AriaBusyEnum $ariaBusy = null;

    /**
     * Indicates whether the element is exposed to an accessibility API. Use with caution on interactive elements. Set to true only on decorative elements such as icons, or when nav isnt visible
     * @example false
     */
    protected ?AriaHiddenEnum $ariaHidden = null;

    /**
     * References an element that provides additional details about the current element.
     */
    protected ?string $ariaDetails = null;

    /**
     * Defines keyboard shortcuts available for the element.
     */
    protected ?string $ariaKeyshortcuts = null;

    /**
     * Provides a human-readable custom role description for assistive technologies.
     */
    protected ?string $ariaRoledescription = null;

    /**
     * Defines how updates to the element should be announced to screen readers.
     * @example off
     */
    protected ?AriaLiveEnum $ariaLive = null;

    /**
     * Indicates what content changes should be announced in a live region.
     * @example additions text
     */
    protected ?AriaRelevantEnum $ariaRelevant = null;

    /**
     * Indicates whether assistive technologies should present the entire region as a whole when changes occur.
     * @example false
     */
    protected ?AriaAtomicEnum $ariaAtomic = null;

    /**
     * Indicates whether an item is selected (e.g., in a list, table, or tree).
     */
    protected ?AriaSelectedEnum $ariaSelected = null;

    /**
     * Defines an element's position within a set (1-based index).
     */
    protected ?int $ariaPosinset = null;

    /**
     * Specifies the total number of items in a set.
     */
    protected ?int $ariaSetsize = null;

    /**
     * Defines the hierarchical level of an element (e.g., headings, tree items).
     */
    protected ?int $ariaLevel = null;

    public function setDisabled(bool $disabled): static
    {
        $this->disabled = $disabled;
        $this->delegated->setAttribute('disabled', (string) $disabled);
        return $this;
    }

    public function getDisabled(): ?bool
    {
        return $this->disabled;
    }

    public function setLabel(string $label): static
    {
        $this->label = $label;
        $this->delegated->setAttribute('label', (string) $label);
        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setSelected(bool $selected): static
    {
        $this->selected = $selected;
        $this->delegated->setAttribute('selected', (string) $selected);
        return $this;
    }

    public function getSelected(): ?bool
    {
        return $this->selected;
    }

    public function setValue(string $value): static
    {
        $this->value = $value;
        $this->delegated->setAttribute('value', (string) $value);
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setRole(string|RoleEnum $role): static
    {
        if (\is_string($role)) {
            $role = RoleEnum::tryFrom($role) ?? throw new InvalidArgumentException('Invalid value for $role.');
        }
        $this->role = $role;
        $this->delegated->setAttribute('role', (string) $role->value);

        return $this;
    }

    public function getRole(): ?RoleEnum
    {
        return $this->role;
    }

    public function setAriaControls(string $ariaControls): static
    {
        $this->ariaControls = $ariaControls;
        $this->delegated->setAttribute('aria-controls', (string) $ariaControls);
        return $this;
    }

    public function getAriaControls(): ?string
    {
        return $this->ariaControls;
    }

    public function setAriaDescribedby(string $ariaDescribedby): static
    {
        $this->ariaDescribedby = $ariaDescribedby;
        $this->delegated->setAttribute('aria-describedby', (string) $ariaDescribedby);
        return $this;
    }

    public function getAriaDescribedby(): ?string
    {
        return $this->ariaDescribedby;
    }

    public function setAriaLabelledby(string $ariaLabelledby): static
    {
        $this->ariaLabelledby = $ariaLabelledby;
        $this->delegated->setAttribute('aria-labelledby', (string) $ariaLabelledby);
        return $this;
    }

    public function getAriaLabelledby(): ?string
    {
        return $this->ariaLabelledby;
    }

    public function setAriaBusy(string|AriaBusyEnum $ariaBusy): static
    {
        if (\is_string($ariaBusy)) {
            $ariaBusy = AriaBusyEnum::tryFrom($ariaBusy) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaBusy.'
            );
        }
        $this->ariaBusy = $ariaBusy;
        $this->delegated->setAttribute('aria-busy', (string) $ariaBusy->value);

        return $this;
    }

    public function getAriaBusy(): ?AriaBusyEnum
    {
        return $this->ariaBusy;
    }

    public function setAriaHidden(string|AriaHiddenEnum $ariaHidden): static
    {
        if (\is_string($ariaHidden)) {
            $ariaHidden = AriaHiddenEnum::tryFrom($ariaHidden) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaHidden.'
            );
        }
        $this->ariaHidden = $ariaHidden;
        $this->delegated->setAttribute('aria-hidden', (string) $ariaHidden->value);

        return $this;
    }

    public function getAriaHidden(): ?AriaHiddenEnum
    {
        return $this->ariaHidden;
    }

    public function setAriaDetails(string $ariaDetails): static
    {
        $this->ariaDetails = $ariaDetails;
        $this->delegated->setAttribute('aria-details', (string) $ariaDetails);
        return $this;
    }

    public function getAriaDetails(): ?string
    {
        return $this->ariaDetails;
    }

    public function setAriaKeyshortcuts(string $ariaKeyshortcuts): static
    {
        $this->ariaKeyshortcuts = $ariaKeyshortcuts;
        $this->delegated->setAttribute('aria-keyshortcuts', (string) $ariaKeyshortcuts);
        return $this;
    }

    public function getAriaKeyshortcuts(): ?string
    {
        return $this->ariaKeyshortcuts;
    }

    public function setAriaRoledescription(string $ariaRoledescription): static
    {
        $this->ariaRoledescription = $ariaRoledescription;
        $this->delegated->setAttribute('aria-roledescription', (string) $ariaRoledescription);
        return $this;
    }

    public function getAriaRoledescription(): ?string
    {
        return $this->ariaRoledescription;
    }

    public function setAriaLive(string|AriaLiveEnum $ariaLive): static
    {
        if (\is_string($ariaLive)) {
            $ariaLive = AriaLiveEnum::tryFrom($ariaLive) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaLive.'
            );
        }
        $this->ariaLive = $ariaLive;
        $this->delegated->setAttribute('aria-live', (string) $ariaLive->value);

        return $this;
    }

    public function getAriaLive(): ?AriaLiveEnum
    {
        return $this->ariaLive;
    }

    public function setAriaRelevant(string|AriaRelevantEnum $ariaRelevant): static
    {
        if (\is_string($ariaRelevant)) {
            $ariaRelevant = AriaRelevantEnum::tryFrom($ariaRelevant) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaRelevant.'
            );
        }
        $this->ariaRelevant = $ariaRelevant;
        $this->delegated->setAttribute('aria-relevant', (string) $ariaRelevant->value);

        return $this;
    }

    public function getAriaRelevant(): ?AriaRelevantEnum
    {
        return $this->ariaRelevant;
    }

    public function setAriaAtomic(string|AriaAtomicEnum $ariaAtomic): static
    {
        if (\is_string($ariaAtomic)) {
            $ariaAtomic = AriaAtomicEnum::tryFrom($ariaAtomic) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaAtomic.'
            );
        }
        $this->ariaAtomic = $ariaAtomic;
        $this->delegated->setAttribute('aria-atomic', (string) $ariaAtomic->value);

        return $this;
    }

    public function getAriaAtomic(): ?AriaAtomicEnum
    {
        return $this->ariaAtomic;
    }

    public function setAriaSelected(string|AriaSelectedEnum $ariaSelected): static
    {
        if (\is_string($ariaSelected)) {
            $ariaSelected = AriaSelectedEnum::tryFrom($ariaSelected) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaSelected.'
            );
        }
        $this->ariaSelected = $ariaSelected;
        $this->delegated->setAttribute('aria-selected', (string) $ariaSelected->value);

        return $this;
    }

    public function getAriaSelected(): ?AriaSelectedEnum
    {
        return $this->ariaSelected;
    }

    public function setAriaPosinset(int $ariaPosinset): static
    {
        $this->ariaPosinset = $ariaPosinset;
        $this->delegated->setAttribute('aria-posinset', (string) $ariaPosinset);
        return $this;
    }

    public function getAriaPosinset(): ?int
    {
        return $this->ariaPosinset;
    }

    public function setAriaSetsize(int $ariaSetsize): static
    {
        $this->ariaSetsize = $ariaSetsize;
        $this->delegated->setAttribute('aria-setsize', (string) $ariaSetsize);
        return $this;
    }

    public function getAriaSetsize(): ?int
    {
        return $this->ariaSetsize;
    }

    public function setAriaLevel(int $ariaLevel): static
    {
        $this->ariaLevel = $ariaLevel;
        $this->delegated->setAttribute('aria-level', (string) $ariaLevel);
        return $this;
    }

    public function getAriaLevel(): ?int
    {
        return $this->ariaLevel;
    }
}
