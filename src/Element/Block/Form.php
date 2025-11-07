<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Form - The form element represents a section of a document containing interactive controls for submitting information to a web server.
 * 
 * @generated 2025-11-07 16:53:19
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Article;
use Html\Element\Block\Body;
use Html\Element\Block\Canvas;
use Html\Element\Block\DataList;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\Details;
use Html\Element\Block\Dialog;
use Html\Element\Block\Division;
use Html\Element\Block\Fieldset;
use Html\Element\Block\Header;
use Html\Element\Block\Legend;
use Html\Element\Block\Main;
use Html\Element\Block\Menu;
use Html\Element\Block\NoScript;
use Html\Element\Block\Paragraph;
use Html\Element\Block\Section;
use Html\Element\Block\Summary;
use Html\Element\Block\Template;
use Html\Element\Inline\Button;
use Html\Element\Inline\Input;
use Html\Element\Inline\Label;
use Html\Element\Inline\MarkedText;
use Html\Element\Inline\Meter;
use Html\Element\Inline\Output;
use Html\Element\Inline\Progress;
use Html\Element\Inline\Select;
use Html\Element\Inline\Slot;
use Html\Element\Inline\Textarea;
use Html\Element\Void\Script;
use Html\Enum\AriaAtomicEnum;
use Html\Enum\AriaInvalidEnum;
use Html\Enum\AriaLiveEnum;
use Html\Enum\AriaRelevantEnum;
use Html\Enum\AutocompleteEnum;
use Html\Enum\AutocorrectEnum;
use Html\Enum\EnctypeEnum;
use Html\Enum\MethodEnum;
use Html\Enum\TargetEnum;
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

#[Element('form')]
class Form extends BlockElement
{
    use GlobalAttribute\AccesskeyTrait;
    use GlobalAttribute\ClassTrait;
    use GlobalAttribute\DataTrait;
    use GlobalAttribute\DirTrait;
    use GlobalAttribute\DraggableTrait;
    use GlobalAttribute\HiddenTrait;
    use GlobalAttribute\IdTrait;
    use GlobalAttribute\LangTrait;
    use GlobalAttribute\StyleTrait;
    use GlobalAttribute\TabindexTrait;
    use GlobalAttribute\TitleTrait;
    use GlobalAttribute\TranslateTrait;
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'form';

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
        Body::class,
        DefinitionDescription::class,
        Details::class,
        Dialog::class,
        Division::class,
        Header::class,
        Main::class,
        MarkedText::class,
        Menu::class,
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
        Button::class,
        Canvas::class,
        DataList::class,
        Details::class,
        Dialog::class,
        Fieldset::class,
        Input::class,
        Label::class,
        Legend::class,
        Meter::class,
        NoScript::class,
        Output::class,
        Progress::class,
        Script::class,
        Select::class,
        Slot::class,
        Summary::class,
        Template::class,
        Textarea::class,
    ];


    /** Specifies the character encodings that are to be used for form submission. */
    public ?string $acceptCharset = null;

    /** Specifies the URL where the form data should be submitted when the form is submitted. */
    public ?string $action = null;

    /** 
     * Specifies whether a form or input field should have autocomplete enabled. Default is on.
     * @category HTML attribute
     * @example on
     */
    public ?AutocompleteEnum $autocomplete = null;

    /** 
     * Specifies controls whether autocorrection of editable text is enabled for spelling and/or punctuation errors. Default is on.
     * @category HTML attribute
     * @example on
     */
    public ?AutocorrectEnum $autocorrect = null;

    /** Specifies how form data should be encoded before sending it to a server. Only used if the method attribute is set to post. Default is application/x-www-form-urlencoded. */
    public ?EnctypeEnum $enctype = null;

    /** 
     * 
     * @category HTML attribute
     * @example get
     */
    public ?MethodEnum $method = null;

    /** Specifies the name associated with the element. The meaning may vary depending on the context. */
    public ?string $name = null;

    /** When present, it specifies that a form should not be validated when submitted. */
    public ?bool $novalidate = null;

    /** 
     * Specifies where to open the linked document.
     * @category HTML attribute
     * @example _self
     */
    public ?TargetEnum $target = null;

    /** 
     * Indicates that the value entered does not conform to the expected format.
     * @category HTML attribute
     * @example false
     */
    public ?AriaInvalidEnum $ariaInvalid = null;

    /** Defines a string value that labels the current element for assistive technologies. */
    public ?string $ariaLabel = null;

    /** References an element that provides additional details about the current element. */
    public ?string $ariaDetails = null;

    /** Defines keyboard shortcuts available for the element. */
    public ?string $ariaKeyshortcuts = null;

    /** Provides a human-readable custom role description for assistive technologies. */
    public ?string $ariaRoledescription = null;

    /** 
     * Defines how updates to the element should be announced to screen readers.
     * @category HTML attribute
     * @example off
     */
    public ?AriaLiveEnum $ariaLive = null;

    /** 
     * Indicates what content changes should be announced in a live region.
     * @category HTML attribute
     * @example additions text
     */
    public ?AriaRelevantEnum $ariaRelevant = null;

    /** 
     * Indicates whether assistive technologies should present the entire region as a whole when changes occur.
     * @category HTML attribute
     * @example false
     */
    public ?AriaAtomicEnum $ariaAtomic = null;


    public function setAcceptCharset(string $acceptCharset): static
    {
        $this->acceptCharset = $acceptCharset;
        $this->delegated->setAttribute('accept-charset', (string) $acceptCharset);
        return $this;
    }

    public function getAcceptCharset(): ?string
    {
        return $this->acceptCharset;
    }

    public function setAction(string $action): static
    {
        $this->action = $action;
        $this->delegated->setAttribute('action', (string) $action);
        return $this;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAutocomplete(string|AutocompleteEnum $autocomplete): static
    {
        if (is_string($autocomplete)) {
            $autocomplete = AutocompleteEnum::tryFrom($autocomplete) ?? throw new \InvalidArgumentException("Invalid value for \$autocomplete.");
        }
        $this->autocomplete = $autocomplete;
        $this->delegated->setAttribute('autocomplete', (string) $autocomplete->value);

        return $this;
    }

    public function getAutocomplete(): ?AutocompleteEnum
    {
        return $this->autocomplete;
    }

    public function setAutocorrect(string|AutocorrectEnum $autocorrect): static
    {
        if (is_string($autocorrect)) {
            $autocorrect = AutocorrectEnum::tryFrom($autocorrect) ?? throw new \InvalidArgumentException("Invalid value for \$autocorrect.");
        }
        $this->autocorrect = $autocorrect;
        $this->delegated->setAttribute('autocorrect', (string) $autocorrect->value);

        return $this;
    }

    public function getAutocorrect(): ?AutocorrectEnum
    {
        return $this->autocorrect;
    }

    public function setEnctype(string|EnctypeEnum $enctype): static
    {
        if (is_string($enctype)) {
            $enctype = EnctypeEnum::tryFrom($enctype) ?? throw new \InvalidArgumentException("Invalid value for \$enctype.");
        }
        $this->enctype = $enctype;
        $this->delegated->setAttribute('enctype', (string) $enctype->value);

        return $this;
    }

    public function getEnctype(): ?EnctypeEnum
    {
        return $this->enctype;
    }

    public function setMethod(string|MethodEnum $method): static
    {
        if (is_string($method)) {
            $method = MethodEnum::tryFrom($method) ?? throw new \InvalidArgumentException("Invalid value for \$method.");
        }
        $this->method = $method;
        $this->delegated->setAttribute('method', (string) $method->value);

        return $this;
    }

    public function getMethod(): ?MethodEnum
    {
        return $this->method;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        $this->delegated->setAttribute('name', (string) $name);
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setNovalidate(bool $novalidate): static
    {
        $this->novalidate = $novalidate;
        $this->delegated->setAttribute('novalidate', (string) $novalidate);
        return $this;
    }

    public function getNovalidate(): ?bool
    {
        return $this->novalidate;
    }

    public function setTarget(string|TargetEnum $target): static
    {
        if (is_string($target)) {
            $target = TargetEnum::tryFrom($target) ?? throw new \InvalidArgumentException("Invalid value for \$target.");
        }
        $this->target = $target;
        $this->delegated->setAttribute('target', (string) $target->value);

        return $this;
    }

    public function getTarget(): ?TargetEnum
    {
        return $this->target;
    }

    public function setAriaInvalid(string|AriaInvalidEnum $ariaInvalid): static
    {
        if (is_string($ariaInvalid)) {
            $ariaInvalid = AriaInvalidEnum::tryFrom($ariaInvalid) ?? throw new \InvalidArgumentException("Invalid value for \$ariaInvalid.");
        }
        $this->ariaInvalid = $ariaInvalid;
        $this->delegated->setAttribute('aria-invalid', (string) $ariaInvalid->value);

        return $this;
    }

    public function getAriaInvalid(): ?AriaInvalidEnum
    {
        return $this->ariaInvalid;
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
        if (is_string($ariaLive)) {
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
        if (is_string($ariaRelevant)) {
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
        if (is_string($ariaAtomic)) {
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
