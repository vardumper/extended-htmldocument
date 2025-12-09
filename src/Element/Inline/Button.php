<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2025-12-09 15:32:40
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/button
 */
namespace Html\Element\Inline;

use Html\Element\InlineElement;
use Html\Element\Block\{
    Aside,
    Body,
    DefinitionDescription,
    Dialog,
    Division,
    Fieldset,
    Footer,
    Form,
    Header,
    Main,
    Menu,
    Paragraph,
    Section,
    Template,
};
use Html\Element\Inline\{
    MarkedText,
    Slot,
};
use Html\Enum\{
    AriaAtomicEnum,
    AriaBusyEnum,
    AriaCheckedEnum,
    AriaCurrentEnum,
    AriaDisabledEnum,
    AriaExpandedEnum,
    AriaHaspopupEnum,
    AriaLiveEnum,
    AriaPressedEnum,
    AriaRelevantEnum,
    AutocorrectEnum,
    ButtonTypeEnum,
    FormenctypeEnum,
    FormmethodEnum,
    FormtargetEnum,
    PopovertargetactionEnum,
    RoleEnum,
};
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

/**
 * The button element represents a clickable button, used to submit forms or anywhere in a document for accessible, standard button functionality.
 */
#[Element('button')]
class Button extends InlineElement
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
    use GlobalAttribute\SlotTrait;
    use GlobalAttribute\SpellcheckTrait;
    use GlobalAttribute\StyleTrait;
    use GlobalAttribute\TabindexTrait;
    use GlobalAttribute\TitleTrait;
    use GlobalAttribute\TranslateTrait;
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'button';

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
        Aside::class,
        Body::class,
        DefinitionDescription::class,
        Dialog::class,
        Division::class,
        Fieldset::class,
        Footer::class,
        Form::class,
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
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [
    ];


    /** 
     * Specifies controls whether autocorrection of editable text is enabled for spelling and/or punctuation errors. Default is on.
     * @category HTML attribute
     * @example on
     */
    protected ?AutocorrectEnum $autocorrect = null;

    /** When present, it specifies that an input element should be disabled. */
    protected ?bool $disabled = null;

    /** Specifies the name associated with the element. The meaning may vary depending on the context. */
    protected ?string $name = null;

    /** Specifies the type of the button. */
    protected ?ButtonTypeEnum $type = null;

    /** Specifies the value associated with the element. The meaning and usage may vary depending on the element type. */
    protected ?string $value = null;

    /** Associates the button with a form element by ID. Allows buttons to be associated with forms anywhere in the document, not just inside a form element. Can override ancestor form association. Element-specific to button, input, object, select, textarea, and fieldset. */
    protected ?string $form = null;

    /** The URL that processes the form submission. Overrides the action attribute of the button's form owner. Only applies to submit buttons. Element-specific to button and input elements with type submit or image. */
    protected ?string $formaction = null;

    /** 
     * Specifies how form data should be encoded when submitting to the server. Only for submit buttons. Overrides the form's enctype attribute. Element-specific to button and input elements with type submit or image.
     * @category HTML attribute
     * @example application/x-www-form-urlencoded
     */
    protected ?FormenctypeEnum $formenctype = null;

    /** 
     * Specifies the HTTP method to use when submitting the form. Only for submit buttons. Overrides the form's method attribute. Use "post" for sensitive data, "get" for idempotent operations, "dialog" to close dialog without submission. Element-specific to button and input elements with type submit or image.
     * @category HTML attribute
     * @example get
     */
    protected ?FormmethodEnum $formmethod = null;

    /** When present, specifies that the form should not be validated when submitted. Only applies to submit buttons. Overrides the form's novalidate attribute. Element-specific to button and input elements with type submit or image. */
    protected ?bool $formnovalidate = null;

    /** Specifies where to display the response after form submission. Can be a browsing context name or keyword (_self, _blank, _parent, _top). Only for submit buttons. Overrides the form's target attribute. Element-specific to button and input elements with type submit or image. */
    protected null|string|FormtargetEnum $formtarget = null;

    /** Turns the button into a popover control by specifying the ID of the popover element to control. Creates implicit aria-details and aria-expanded relationships, establishes anchor positioning reference, and improves accessibility. Part of the Popover API. Element-specific to button and input elements. */
    protected ?string $popovertarget = null;

    /** 
     * Specifies the action to perform on the popover element controlled by popovertarget. "show" displays a hidden popover, "hide" hides a visible popover, "toggle" (default) switches between states. Part of the Popover API. Element-specific to button and input elements.
     * @category HTML attribute
     * @example toggle
     */
    protected ?PopovertargetactionEnum $popovertargetaction = null;

    /** Specifies the action to be performed on an element controlled via commandfor attribute. Supports dialog operations (show-modal, close, request-close), popover operations (show-popover, hide-popover, toggle-popover), and custom commands prefixed with "--". Provides declarative element control without JavaScript. Element-specific to button element. */
    protected ?string $command = null;

    /** Turns the button into a command button by specifying the ID of the element to control. Works with the command attribute to define the action. A more general version of popovertarget. Enables declarative control of interactive elements. Element-specific to button element. */
    protected ?string $commandfor = null;

    /** Defines the semantic purpose of an element for assistive technologies. */
    protected ?RoleEnum $role = null;

    /** Identifies the element(s) whose contents or presence are controlled by this element. Value is a list of IDs separated by a space */
    protected ?string $ariaControls = null;

    /** Identifies the element(s) that describes the object. Value is a list of IDs separated by a space */
    protected ?string $ariaDescribedby = null;

    /** Identifies the element(s) that labels the current element. Value is a list of IDs separated by a space */
    protected ?string $ariaLabelledby = null;

    /** 
     * Indicates the current item within a container or set of related elements.
     * @category HTML attribute
     * @example false
     */
    protected ?AriaCurrentEnum $ariaCurrent = null;

    /** 
     * The aria-busy attribute is used to indicate whether an element is currently busy or not.
     * @category HTML attribute
     * @example false
     */
    protected ?AriaBusyEnum $ariaBusy = null;

    /** Defines a string value that labels the current element for assistive technologies. */
    protected ?string $ariaLabel = null;

    /** 
     * Indicates that the element is perceivable but disabled, so it is not editable or otherwise operable.
     * @category HTML attribute
     * @example false
     */
    protected ?AriaDisabledEnum $ariaDisabled = null;

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

    /** Indicates whether a collapsible UI element is expanded (true) or collapsed (false). */
    protected ?AriaExpandedEnum $ariaExpanded = null;

    /** 
     * Indicates that an element has an associated popup menu, listbox, tree, grid, or dialog.
     * @category HTML attribute
     * @example false
     */
    protected ?AriaHaspopupEnum $ariaHaspopup = null;

    /** Indicates whether a toggle button is pressed (true, false, or mixed). */
    protected ?AriaPressedEnum $ariaPressed = null;

    /** Defines the checked state for checkboxes, radio buttons, or toggle switches. */
    protected ?AriaCheckedEnum $ariaChecked = null;


    public function setAutofocus(bool $autofocus): static
    {
        $this->autofocus = $autofocus;
        $this->delegated->setAttribute('autofocus', (string) $autofocus);
        return $this;
    }

    public function getAutofocus(): ?bool
    {
        return $this->autofocus;
    }

    public function setAutocorrect(string|AutocorrectEnum $autocorrect): static
    {
        if (\is_string($autocorrect)) {
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

    public function setType(string|ButtonTypeEnum $type): static
    {
        if (\is_string($type)) {
            $type = ButtonTypeEnum::tryFrom($type) ?? throw new \InvalidArgumentException("Invalid value for \$type.");
        }
        $this->type = $type;
        $this->delegated->setAttribute('type', (string) $type->value);

        return $this;
    }

    public function getType(): ?ButtonTypeEnum
    {
        return $this->type;
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

    public function setForm(string $form): static
    {
        $this->form = $form;
        $this->delegated->setAttribute('form', (string) $form);
        return $this;
    }

    public function getForm(): ?string
    {
        return $this->form;
    }

    public function setFormaction(string $formaction): static
    {
        $this->formaction = $formaction;
        $this->delegated->setAttribute('formaction', (string) $formaction);
        return $this;
    }

    public function getFormaction(): ?string
    {
        return $this->formaction;
    }

    public function setFormenctype(string|FormenctypeEnum $formenctype): static
    {
        if (\is_string($formenctype)) {
            $formenctype = FormenctypeEnum::tryFrom($formenctype) ?? throw new \InvalidArgumentException("Invalid value for \$formenctype.");
        }
        $this->formenctype = $formenctype;
        $this->delegated->setAttribute('formenctype', (string) $formenctype->value);

        return $this;
    }

    public function getFormenctype(): ?FormenctypeEnum
    {
        return $this->formenctype;
    }

    public function setFormmethod(string|FormmethodEnum $formmethod): static
    {
        if (\is_string($formmethod)) {
            $formmethod = FormmethodEnum::tryFrom($formmethod) ?? throw new \InvalidArgumentException("Invalid value for \$formmethod.");
        }
        $this->formmethod = $formmethod;
        $this->delegated->setAttribute('formmethod', (string) $formmethod->value);

        return $this;
    }

    public function getFormmethod(): ?FormmethodEnum
    {
        return $this->formmethod;
    }

    public function setFormnovalidate(bool $formnovalidate): static
    {
        $this->formnovalidate = $formnovalidate;
        $this->delegated->setAttribute('formnovalidate', (string) $formnovalidate);
        return $this;
    }

    public function getFormnovalidate(): ?bool
    {
        return $this->formnovalidate;
    }

    public function setFormtarget(string|FormtargetEnum $formtarget): static
    {
        $value = $formtarget;
        if (\is_string($formtarget)) {
            $resolved = FormtargetEnum::tryFrom($formtarget);
            if (!\is_null($resolved)) {
                $formtarget = $resolved;
            }
        }
        if ($formtarget instanceof FormtargetEnum) {
            $value = $formtarget->value;
        }
        $this->formtarget = $formtarget;
        $this->delegated->setAttribute('formtarget', (string) $value);

        return $this;
    }

    public function getFormtarget(): null|string|FormtargetEnum
    {
        return $this->formtarget;
    }

    public function setPopovertarget(string $popovertarget): static
    {
        $this->popovertarget = $popovertarget;
        $this->delegated->setAttribute('popovertarget', (string) $popovertarget);
        return $this;
    }

    public function getPopovertarget(): ?string
    {
        return $this->popovertarget;
    }

    public function setPopovertargetaction(string|PopovertargetactionEnum $popovertargetaction): static
    {
        if (\is_string($popovertargetaction)) {
            $popovertargetaction = PopovertargetactionEnum::tryFrom($popovertargetaction) ?? throw new \InvalidArgumentException("Invalid value for \$popovertargetaction.");
        }
        $this->popovertargetaction = $popovertargetaction;
        $this->delegated->setAttribute('popovertargetaction', (string) $popovertargetaction->value);

        return $this;
    }

    public function getPopovertargetaction(): ?PopovertargetactionEnum
    {
        return $this->popovertargetaction;
    }

    public function setCommand(string $command): static
    {
        $this->command = $command;
        $this->delegated->setAttribute('command', (string) $command);
        return $this;
    }

    public function getCommand(): ?string
    {
        return $this->command;
    }

    public function setCommandfor(string $commandfor): static
    {
        $this->commandfor = $commandfor;
        $this->delegated->setAttribute('commandfor', (string) $commandfor);
        return $this;
    }

    public function getCommandfor(): ?string
    {
        return $this->commandfor;
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

    public function setAriaCurrent(string|AriaCurrentEnum $ariaCurrent): static
    {
        if (\is_string($ariaCurrent)) {
            $ariaCurrent = AriaCurrentEnum::tryFrom($ariaCurrent) ?? throw new \InvalidArgumentException("Invalid value for \$ariaCurrent.");
        }
        $this->ariaCurrent = $ariaCurrent;
        $this->delegated->setAttribute('aria-current', (string) $ariaCurrent->value);

        return $this;
    }

    public function getAriaCurrent(): ?AriaCurrentEnum
    {
        return $this->ariaCurrent;
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

    public function setAriaDisabled(string|AriaDisabledEnum $ariaDisabled): static
    {
        if (\is_string($ariaDisabled)) {
            $ariaDisabled = AriaDisabledEnum::tryFrom($ariaDisabled) ?? throw new \InvalidArgumentException("Invalid value for \$ariaDisabled.");
        }
        $this->ariaDisabled = $ariaDisabled;
        $this->delegated->setAttribute('aria-disabled', (string) $ariaDisabled->value);

        return $this;
    }

    public function getAriaDisabled(): ?AriaDisabledEnum
    {
        return $this->ariaDisabled;
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

    public function setAriaExpanded(string|AriaExpandedEnum $ariaExpanded): static
    {
        if (\is_string($ariaExpanded)) {
            $ariaExpanded = AriaExpandedEnum::tryFrom($ariaExpanded) ?? throw new \InvalidArgumentException("Invalid value for \$ariaExpanded.");
        }
        $this->ariaExpanded = $ariaExpanded;
        $this->delegated->setAttribute('aria-expanded', (string) $ariaExpanded->value);

        return $this;
    }

    public function getAriaExpanded(): ?AriaExpandedEnum
    {
        return $this->ariaExpanded;
    }

    public function setAriaHaspopup(string|AriaHaspopupEnum $ariaHaspopup): static
    {
        if (\is_string($ariaHaspopup)) {
            $ariaHaspopup = AriaHaspopupEnum::tryFrom($ariaHaspopup) ?? throw new \InvalidArgumentException("Invalid value for \$ariaHaspopup.");
        }
        $this->ariaHaspopup = $ariaHaspopup;
        $this->delegated->setAttribute('aria-haspopup', (string) $ariaHaspopup->value);

        return $this;
    }

    public function getAriaHaspopup(): ?AriaHaspopupEnum
    {
        return $this->ariaHaspopup;
    }

    public function setAriaPressed(string|AriaPressedEnum $ariaPressed): static
    {
        if (\is_string($ariaPressed)) {
            $ariaPressed = AriaPressedEnum::tryFrom($ariaPressed) ?? throw new \InvalidArgumentException("Invalid value for \$ariaPressed.");
        }
        $this->ariaPressed = $ariaPressed;
        $this->delegated->setAttribute('aria-pressed', (string) $ariaPressed->value);

        return $this;
    }

    public function getAriaPressed(): ?AriaPressedEnum
    {
        return $this->ariaPressed;
    }

    public function setAriaChecked(string|AriaCheckedEnum $ariaChecked): static
    {
        if (\is_string($ariaChecked)) {
            $ariaChecked = AriaCheckedEnum::tryFrom($ariaChecked) ?? throw new \InvalidArgumentException("Invalid value for \$ariaChecked.");
        }
        $this->ariaChecked = $ariaChecked;
        $this->delegated->setAttribute('aria-checked', (string) $ariaChecked->value);

        return $this;
    }

    public function getAriaChecked(): ?AriaCheckedEnum
    {
        return $this->ariaChecked;
    }

}
