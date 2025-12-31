<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2025-12-31 00:30:17
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ul
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\{
    Article,
    Aside,
    Body,
    DefinitionDescription,
    Details,
    Dialog,
    Division,
    Footer,
    Header,
    ListItem,
    Main,
    Paragraph,
    Section,
    Template,
};
use Html\Element\Inline\Slot;
use Html\Enum\{
    AriaAtomicEnum,
    AriaBusyEnum,
    AriaHiddenEnum,
    AriaLiveEnum,
    AriaMultiselectableEnum,
    AriaOrientationEnum,
    AriaRelevantEnum,
    RoleEnum,
};
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

/**
 * The ul element represents an unordered list of items, namely a collection of items that do not have a numerical ordering, and their order in the list is meaningless.
 */
#[Element('ul')]
class UnorderedList extends BlockElement
{
    use GlobalAttribute\AccesskeyTrait;
    use GlobalAttribute\AutocapitalizeTrait;
    use GlobalAttribute\AutofocusTrait;
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
    use GlobalAttribute\AlpineJsTrait;
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'ul';

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
    public static array $childOf = [
        Article::class,
        Aside::class,
        Body::class,
        DefinitionDescription::class,
        Details::class,
        Dialog::class,
        Division::class,
        Footer::class,
        Header::class,
        ListItem::class,
        Main::class,
        Paragraph::class,
        Section::class,
        Slot::class,
        Template::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        ListItem::class,
    ];


    /** 
     * Defines the semantic purpose of an element for assistive technologies.
     * @category HTML attribute */
    protected ?RoleEnum $role = null;

    /** 
     * Identifies the element(s) whose contents or presence are controlled by this element. Value is a list of IDs separated by a space
     * @category HTML attribute */
    protected ?string $ariaControls = null;

    /** 
     * Identifies the element(s) that describes the object. Value is a list of IDs separated by a space
     * @category HTML attribute */
    protected ?string $ariaDescribedby = null;

    /** 
     * Identifies the element(s) that labels the current element. Value is a list of IDs separated by a space
     * @category HTML attribute */
    protected ?string $ariaLabelledby = null;

    /** 
     * The aria-busy attribute is used to indicate whether an element is currently busy or not.
     * @category HTML attribute
     * @example false
     */
    protected ?AriaBusyEnum $ariaBusy = null;

    /** 
     * Indicates whether the element is exposed to an accessibility API. Use with caution on interactive elements. Set to true only on decorative elements such as icons, or when nav isnt visible
     * @category HTML attribute
     * @example false
     */
    protected ?AriaHiddenEnum $ariaHidden = null;

    /** 
     * References an element that provides additional details about the current element.
     * @category HTML attribute */
    protected ?string $ariaDetails = null;

    /** 
     * Defines keyboard shortcuts available for the element.
     * @category HTML attribute */
    protected ?string $ariaKeyshortcuts = null;

    /** 
     * Provides a human-readable custom role description for assistive technologies.
     * @category HTML attribute */
    protected ?string $ariaRoledescription = null;

    /** 
     * Defines how updates to the element should be announced to screen readers.
     * @category HTML attribute
     * @example off
     */
    protected ?AriaLiveEnum $ariaLive = null;

    /** 
     * Indicates what content changes should be announced in a live region.
     * @category HTML attribute
     * @example additions text
     */
    protected ?AriaRelevantEnum $ariaRelevant = null;

    /** 
     * Indicates whether assistive technologies should present the entire region as a whole when changes occur.
     * @category HTML attribute
     * @example false
     */
    protected ?AriaAtomicEnum $ariaAtomic = null;

    /** 
     * Defines whether multiple items can be selected in a listbox, grid, or tree.
     * @category HTML attribute
     * @example false
     */
    protected ?AriaMultiselectableEnum $ariaMultiselectable = null;

    /** 
     * Identifies the currently active child element (e.g., for autocomplete suggestions or composite widgets).
     * @category HTML attribute */
    protected ?string $ariaActivedescendant = null;

    /** 
     * Specifies whether an element is horizontal or vertical.
     * @category HTML attribute */
    protected ?AriaOrientationEnum $ariaOrientation = null;

    /** 
     * Establishes ownership relationships between elements. Value is a space-separated list of IDs.
     * @category HTML attribute */
    protected ?string $ariaOwns = null;


    public function setRole(string|RoleEnum $role): static
    {
        if (\is_string($role)) {
            $role = RoleEnum::tryFrom($role) ?? throw new \InvalidArgumentException("Invalid value for \$role.");
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
            $ariaBusy = AriaBusyEnum::tryFrom($ariaBusy) ?? throw new \InvalidArgumentException("Invalid value for \$ariaBusy.");
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
            $ariaHidden = AriaHiddenEnum::tryFrom($ariaHidden) ?? throw new \InvalidArgumentException("Invalid value for \$ariaHidden.");
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
            $ariaLive = AriaLiveEnum::tryFrom($ariaLive) ?? throw new \InvalidArgumentException("Invalid value for \$ariaLive.");
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
            $ariaRelevant = AriaRelevantEnum::tryFrom($ariaRelevant) ?? throw new \InvalidArgumentException("Invalid value for \$ariaRelevant.");
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
            $ariaAtomic = AriaAtomicEnum::tryFrom($ariaAtomic) ?? throw new \InvalidArgumentException("Invalid value for \$ariaAtomic.");
        }
        $this->ariaAtomic = $ariaAtomic;
        $this->delegated->setAttribute('aria-atomic', (string) $ariaAtomic->value);

        return $this;
    }

    public function getAriaAtomic(): ?AriaAtomicEnum
    {
        return $this->ariaAtomic;
    }

    public function setAriaMultiselectable(string|AriaMultiselectableEnum $ariaMultiselectable): static
    {
        if (\is_string($ariaMultiselectable)) {
            $ariaMultiselectable = AriaMultiselectableEnum::tryFrom($ariaMultiselectable) ?? throw new \InvalidArgumentException("Invalid value for \$ariaMultiselectable.");
        }
        $this->ariaMultiselectable = $ariaMultiselectable;
        $this->delegated->setAttribute('aria-multiselectable', (string) $ariaMultiselectable->value);

        return $this;
    }

    public function getAriaMultiselectable(): ?AriaMultiselectableEnum
    {
        return $this->ariaMultiselectable;
    }

    public function setAriaActivedescendant(string $ariaActivedescendant): static
    {
        $this->ariaActivedescendant = $ariaActivedescendant;
        $this->delegated->setAttribute('aria-activedescendant', (string) $ariaActivedescendant);
        return $this;
    }

    public function getAriaActivedescendant(): ?string
    {
        return $this->ariaActivedescendant;
    }

    public function setAriaOrientation(string|AriaOrientationEnum $ariaOrientation): static
    {
        if (\is_string($ariaOrientation)) {
            $ariaOrientation = AriaOrientationEnum::tryFrom($ariaOrientation) ?? throw new \InvalidArgumentException("Invalid value for \$ariaOrientation.");
        }
        $this->ariaOrientation = $ariaOrientation;
        $this->delegated->setAttribute('aria-orientation', (string) $ariaOrientation->value);

        return $this;
    }

    public function getAriaOrientation(): ?AriaOrientationEnum
    {
        return $this->ariaOrientation;
    }

    public function setAriaOwns(string $ariaOwns): static
    {
        $this->ariaOwns = $ariaOwns;
        $this->delegated->setAttribute('aria-owns', (string) $ariaOwns);
        return $this;
    }

    public function getAriaOwns(): ?string
    {
        return $this->ariaOwns;
    }


}
