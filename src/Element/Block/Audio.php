<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2025-12-31 00:08:53
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/audio
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\{
    Article,
    Aside,
    Body,
    DefinitionDescription,
    Division,
    Footer,
    Header,
    Main,
    Paragraph,
    Section,
};
use Html\Element\Inline\MarkedText;
use Html\Enum\{
    AriaAtomicEnum,
    AriaBusyEnum,
    AriaLiveEnum,
    AriaRelevantEnum,
    CrossoriginEnum,
    PreloadEnum,
    RoleEnum,
};
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

/**
 * The audio element is used to embed sound content in documents. It may contain one or more audio sources, represented using the src attribute or the source element.
 */
#[Element('audio')]
class Audio extends BlockElement
{
    use GlobalAttribute\AccesskeyTrait;
    use GlobalAttribute\ClassTrait;
    use GlobalAttribute\DataTrait;
    use GlobalAttribute\DraggableTrait;
    use GlobalAttribute\HiddenTrait;
    use GlobalAttribute\IdTrait;
    use GlobalAttribute\LangTrait;
    use GlobalAttribute\PopoverTrait;
    use GlobalAttribute\SlotTrait;
    use GlobalAttribute\StyleTrait;
    use GlobalAttribute\TabindexTrait;
    use GlobalAttribute\TitleTrait;
    use GlobalAttribute\TranslateTrait;
    use GlobalAttribute\AlpineJsTrait;
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'audio';

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
        Division::class,
        Footer::class,
        Header::class,
        Main::class,
        MarkedText::class,
        Paragraph::class,
        Section::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
    ];


    /** 
     * When present, it specifies that the audio or video will automatically start playing as soon as it can do so without stopping.
     * @category HTML attribute */
    protected ?bool $autoplay = null;

    /** 
     * When present, it specifies that audio or video controls should be displayed (such as play, pause, and volume).
     * @category HTML attribute */
    protected ?bool $controls = null;

    /** 
     * Specifies how the element handles cross-origin requests.
     * @category HTML attribute */
    protected ?CrossoriginEnum $crossorigin = null;

    /** 
     * When present, it specifies that the audio or video will start over again every time it is finished.
     * @category HTML attribute */
    protected ?bool $loop = null;

    /** 
     * When present, it specifies that the audio output of the video should be muted.
     * @category HTML attribute */
    protected ?bool $muted = null;

    /** 
     * 
     * @category HTML attribute */
    protected ?PreloadEnum $preload = null;

    /** 
     * Specifies the URL of the external resource to be embedded or referenced.
     * @category HTML attribute
     * @required
     */
    protected ?string $src = null;

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


    public function setAutoplay(bool $autoplay): static
    {
        $this->autoplay = $autoplay;
        $this->delegated->setAttribute('autoplay', (string) $autoplay);
        return $this;
    }

    public function getAutoplay(): ?bool
    {
        return $this->autoplay;
    }

    public function setControls(bool $controls): static
    {
        $this->controls = $controls;
        $this->delegated->setAttribute('controls', (string) $controls);
        return $this;
    }

    public function getControls(): ?bool
    {
        return $this->controls;
    }

    public function setCrossorigin(string|CrossoriginEnum $crossorigin): static
    {
        if (\is_string($crossorigin)) {
            $crossorigin = CrossoriginEnum::tryFrom($crossorigin) ?? throw new \InvalidArgumentException("Invalid value for \$crossorigin.");
        }
        $this->crossorigin = $crossorigin;
        $this->delegated->setAttribute('crossorigin', (string) $crossorigin->value);

        return $this;
    }

    public function getCrossorigin(): ?CrossoriginEnum
    {
        return $this->crossorigin;
    }

    public function setLoop(bool $loop): static
    {
        $this->loop = $loop;
        $this->delegated->setAttribute('loop', (string) $loop);
        return $this;
    }

    public function getLoop(): ?bool
    {
        return $this->loop;
    }

    public function setMuted(bool $muted): static
    {
        $this->muted = $muted;
        $this->delegated->setAttribute('muted', (string) $muted);
        return $this;
    }

    public function getMuted(): ?bool
    {
        return $this->muted;
    }

    public function setPreload(string|PreloadEnum $preload): static
    {
        if (\is_string($preload)) {
            $preload = PreloadEnum::tryFrom($preload) ?? throw new \InvalidArgumentException("Invalid value for \$preload.");
        }
        $this->preload = $preload;
        $this->delegated->setAttribute('preload', (string) $preload->value);

        return $this;
    }

    public function getPreload(): ?PreloadEnum
    {
        return $this->preload;
    }

    public function setSrc(string $src): static
    {
        $this->src = $src;
        $this->delegated->setAttribute('src', (string) $src);
        return $this;
    }

    public function getSrc(): ?string
    {
        return $this->src;
    }

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
