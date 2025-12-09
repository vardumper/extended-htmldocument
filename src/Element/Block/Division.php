<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2025-12-09 15:32:40
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/div
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\{
    Article,
    Aside,
    Audio,
    Body,
    DefinitionDescription,
    DefinitionList,
    DefinitionTerm,
    DeletedText,
    Details,
    Dialog,
    Embed,
    Figure,
    Footer,
    Form,
    Header,
    Heading1,
    Heading2,
    Heading3,
    Heading4,
    Heading5,
    Heading6,
    InlineFrame,
    InsertedText,
    ListItem,
    Main,
    Map,
    ObjectElement,
    OrderedList,
    Paragraph,
    Picture,
    PreformattedText,
    Section,
    Summary,
    Table,
    Template,
    UnorderedList,
    Video,
};
use Html\Element\Inline\{
    Abbreviation,
    Anchor,
    BidirectionalIsolation,
    BidirectionalOverride,
    Bold,
    Button,
    Citation,
    Code,
    Data,
    Definition,
    Emphasis,
    Image,
    Input,
    Italic,
    KeyboardInput,
    MarkedText,
    Quotation,
    Ruby,
    RubyParenthesis,
    RubyText,
    SampleOutput,
    Select,
    Slot,
    Small,
    Span,
    Strikethrough,
    Strong,
    Subscript,
    Superscript,
    Textarea,
    Time,
    Underline,
    Variable,
};
use Html\Element\Void\{
    Area,
    BreakElement,
    Parameter,
    Source,
    Track,
    WordBreakOpportunity,
};
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
 * The div element has no special meaning at all. It represents its children. It can be used with the class, lang, and title attributes to mark up semantics common to a group of consecutive elements.
 */
#[Element('div')]
class Division extends BlockElement
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
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'div';

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
        Anchor::class,
        Abbreviation::class,
        Area::class,
        Article::class,
        Aside::class,
        Audio::class,
        Bold::class,
        BidirectionalIsolation::class,
        BidirectionalOverride::class,
        BreakElement::class,
        Citation::class,
        Code::class,
        Data::class,
        DefinitionDescription::class,
        DeletedText::class,
        Definition::class,
        Division::class,
        DefinitionList::class,
        DefinitionTerm::class,
        Emphasis::class,
        Embed::class,
        Figure::class,
        Form::class,
        Heading1::class,
        Heading2::class,
        Heading3::class,
        Heading4::class,
        Heading5::class,
        Heading6::class,
        Italic::class,
        InlineFrame::class,
        Image::class,
        InsertedText::class,
        Button::class,
        Input::class,
        Select::class,
        Textarea::class,
        Details::class,
        Section::class,
        Summary::class,
        KeyboardInput::class,
        ListItem::class,
        Map::class,
        MarkedText::class,
        ObjectElement::class,
        OrderedList::class,
        Paragraph::class,
        Parameter::class,
        Picture::class,
        PreformattedText::class,
        Quotation::class,
        RubyParenthesis::class,
        RubyText::class,
        Ruby::class,
        Strikethrough::class,
        SampleOutput::class,
        Small::class,
        Source::class,
        Span::class,
        Strong::class,
        Subscript::class,
        Superscript::class,
        Table::class,
        Time::class,
        Track::class,
        Underline::class,
        UnorderedList::class,
        Variable::class,
        Video::class,
        WordBreakOpportunity::class,
    ];


    /** The role attribute is used to define the purpose of an element. */
    protected ?RoleEnum $role = null;

    /** Identifies the element(s) whose contents or presence are controlled by this element. Value is a list of IDs separated by a space */
    protected ?string $ariaControls = null;

    /** Identifies the element(s) that describes the object. Value is a list of IDs separated by a space */
    protected ?string $ariaDescribedby = null;

    /** Identifies the element(s) that labels the current element. Value is a list of IDs separated by a space */
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

    /** Defines a string value that labels the current element for assistive technologies. */
    protected ?string $ariaLabel = null;

    /** References an element that provides additional details about the current element. */
    protected ?string $ariaDetails = null;

    /** Defines keyboard shortcuts available for the element. */
    protected ?string $ariaKeyshortcuts = null;

    /** Provides a human-readable custom role description for assistive technologies. */
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

    /** Identifies the currently active child element (e.g., for autocomplete suggestions or composite widgets). */
    protected ?string $ariaActivedescendant = null;

    /** Specifies whether an element is horizontal or vertical. */
    protected ?AriaOrientationEnum $ariaOrientation = null;

    /** Establishes ownership relationships between elements. Value is a space-separated list of IDs. */
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

    public function setAriaLabel(string $ariaLabel): static
    {
        $this->ariaLabel = $ariaLabel;
        $this->delegated->setAttribute('aria-label', (string) $ariaLabel);
        return $this;
    }

    public function getAriaLabel(): ?string
    {
        return $this->ariaLabel;
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
