<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Heading6 - The h6 element represents a section heading. It has the lowest rank among the six levels of section headings.
 * 
 * @generated 2025-11-28 14:53:40
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/h6
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Article;
use Html\Element\Block\Aside;
use Html\Element\Block\Body;
use Html\Element\Block\Dialog;
use Html\Element\Block\Division;
use Html\Element\Block\Footer;
use Html\Element\Block\Header;
use Html\Element\Block\HeadingsGroup;
use Html\Element\Block\Legend;
use Html\Element\Block\Main;
use Html\Element\Block\Paragraph;
use Html\Element\Block\Section;
use Html\Element\Block\Template;
use Html\Element\Inline\Slot;
use Html\Enum\AriaAtomicEnum;
use Html\Enum\AriaBusyEnum;
use Html\Enum\AriaHiddenEnum;
use Html\Enum\AriaLiveEnum;
use Html\Enum\AriaRelevantEnum;
use Html\Enum\RoleEnum;
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

#[Element('h6')]
class Heading6 extends BlockElement
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
    use GlobalAttribute\SpellcheckTrait;
    use GlobalAttribute\StyleTrait;
    use GlobalAttribute\TabindexTrait;
    use GlobalAttribute\TitleTrait;
    use GlobalAttribute\TranslateTrait;
    use GlobalAttribute\PopoverTrait;
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'h6';

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
        Dialog::class,
        Division::class,
        Footer::class,
        Header::class,
        HeadingsGroup::class,
        Legend::class,
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
    ];


    /** Defines the semantic purpose of an element for assistive technologies. */
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


}
