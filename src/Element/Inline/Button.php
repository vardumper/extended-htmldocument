<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Button - The button element represents a clickable button, used to submit forms or anywhere in a document for accessible, standard button functionality.
 *
 * @generated 2025-11-02 22:39:29
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/button
 */

namespace Html\Element\Inline;

use Html\Element\Block\Aside;
use Html\Element\Block\Body;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\Dialog;
use Html\Element\Block\Division;
use Html\Element\Block\Fieldset;
use Html\Element\Block\Footer;
use Html\Element\Block\Form;
use Html\Element\Block\Header;
use Html\Element\Block\Main;
use Html\Element\Block\Menu;
use Html\Element\Block\Paragraph;
use Html\Element\Block\Section;
use Html\Element\Block\Template;
use Html\Element\InlineElement;
use Html\Enum\AriaBusyEnum;
use Html\Enum\AriaCurrentEnum;
use Html\Enum\AriaDisabledEnum;
use Html\Enum\AutocorrectEnum;
use Html\Enum\ButtonTypeEnum;
use Html\Enum\FormenctypeEnum;
use Html\Enum\FormmethodEnum;
use Html\Enum\FormtargetEnum;
use Html\Enum\PopovertargetactionEnum;
use Html\Enum\RoleEnum;
use Html\Mapping\Element;
use Html\Trait\GlobalAttribute;
use InvalidArgumentException;

#[Element('button')]
class Button extends InlineElement
{
    use GlobalAttribute\AutofocusTrait;
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
    public static array $parentOf = [];

    /**
     * When present, it specifies that an element should automatically get focus when the page loads.
     */
    public ?bool $autofocus = null;

    /**
     * Specifies controls whether autocorrection of editable text is enabled for spelling and/or punctuation errors. Default is on.
     * @example on
     */
    public ?AutocorrectEnum $autocorrect = null;

    /**
     * When present, it specifies that an input element should be disabled.
     */
    public ?bool $disabled = null;

    /**
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     */
    public ?string $name = null;

    /**
     * Specifies the type of the button.
     */
    public ?ButtonTypeEnum $type = null;

    /**
     * Specifies the value associated with the element. The meaning and usage may vary depending on the element type.
     */
    public ?string $value = null;

    /**
     * Associates the button with a form element by ID. Allows buttons to be associated with forms anywhere in the document, not just inside a form element. Can override ancestor form association. Element-specific to button, input, object, select, textarea, and fieldset.
     */
    public ?string $form = null;

    /**
     * The URL that processes the form submission. Overrides the action attribute of the button's form owner. Only applies to submit buttons. Element-specific to button and input elements with type submit or image.
     */
    public ?string $formaction = null;

    /**
     * Specifies how form data should be encoded when submitting to the server. Only for submit buttons. Overrides the form's enctype attribute. Element-specific to button and input elements with type submit or image.
     * @example application/x-www-form-urlencoded
     */
    public ?FormenctypeEnum $formenctype = null;

    /**
     * Specifies the HTTP method to use when submitting the form. Only for submit buttons. Overrides the form's method attribute. Use "post" for sensitive data, "get" for idempotent operations, "dialog" to close dialog without submission. Element-specific to button and input elements with type submit or image.
     * @example get
     */
    public ?FormmethodEnum $formmethod = null;

    /**
     * When present, specifies that the form should not be validated when submitted. Only applies to submit buttons. Overrides the form's novalidate attribute. Element-specific to button and input elements with type submit or image.
     */
    public ?bool $formnovalidate = null;

    /** Specifies where to display the response after form submission. Can be a browsing context name or keyword (_self, _blank, _parent, _top). Only for submit buttons. Overrides the form's target attribute. Element-specific to button and input elements with type submit or image. */
    public null|string|FormtargetEnum $formtarget = null;

    /**
     * Turns the button into a popover control by specifying the ID of the popover element to control. Creates implicit aria-details and aria-expanded relationships, establishes anchor positioning reference, and improves accessibility. Part of the Popover API. Element-specific to button and input elements.
     */
    public ?string $popovertarget = null;

    /**
     * Specifies the action to perform on the popover element controlled by popovertarget. "show" displays a hidden popover, "hide" hides a visible popover, "toggle" (default) switches between states. Part of the Popover API. Element-specific to button and input elements.
     * @example toggle
     */
    public ?PopovertargetactionEnum $popovertargetaction = null;

    /**
     * Specifies the action to be performed on an element controlled via commandfor attribute. Supports dialog operations (show-modal, close, request-close), popover operations (show-popover, hide-popover, toggle-popover), and custom commands prefixed with "--". Provides declarative element control without JavaScript. Element-specific to button element.
     */
    public ?string $command = null;

    /**
     * Turns the button into a command button by specifying the ID of the element to control. Works with the command attribute to define the action. A more general version of popovertarget. Enables declarative control of interactive elements. Element-specific to button element.
     */
    public ?string $commandfor = null;

    /**
     * Defines the semantic purpose of an element for assistive technologies.
     */
    public ?RoleEnum $role = null;

    /**
     * Identifies the element(s) whose contents or presence are controlled by this element. Value is a list of IDs separated by a space
     */
    public ?string $ariaControls = null;

    /**
     * Identifies the element(s) that describes the object. Value is a list of IDs separated by a space
     */
    public ?string $ariaDescribedby = null;

    /**
     * Identifies the element(s) that labels the current element. Value is a list of IDs separated by a space
     */
    public ?string $ariaLabelledby = null;

    /**
     * Indicates the current item within a container or set of related elements.
     * @example false
     */
    public ?AriaCurrentEnum $ariaCurrent = null;

    /**
     * The aria-busy attribute is used to indicate whether an element is currently busy or not.
     * @example false
     */
    public ?AriaBusyEnum $ariaBusy = null;

    /**
     * Defines a string value that labels the current element for assistive technologies.
     */
    public ?string $ariaLabel = null;

    /**
     * Indicates that the element is perceivable but disabled, so it is not editable or otherwise operable.
     * @example false
     */
    public ?AriaDisabledEnum $ariaDisabled = null;

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
        if (is_string($autocorrect)) {
            $autocorrect = AutocorrectEnum::tryFrom($autocorrect) ?? throw new InvalidArgumentException(
                'Invalid value for $autocorrect.'
            );
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
        if (is_string($type)) {
            $type = ButtonTypeEnum::tryFrom($type) ?? throw new InvalidArgumentException('Invalid value for $type.');
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
        if (is_string($formenctype)) {
            $formenctype = FormenctypeEnum::tryFrom($formenctype) ?? throw new InvalidArgumentException(
                'Invalid value for $formenctype.'
            );
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
        if (is_string($formmethod)) {
            $formmethod = FormmethodEnum::tryFrom($formmethod) ?? throw new InvalidArgumentException(
                'Invalid value for $formmethod.'
            );
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
        if (is_string($formtarget)) {
            $resolved = FormtargetEnum::tryFrom($formtarget);
            if ($resolved !== null) {
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
        if (is_string($popovertargetaction)) {
            $popovertargetaction = PopovertargetactionEnum::tryFrom(
                $popovertargetaction
            ) ?? throw new InvalidArgumentException(
                'Invalid value for $popovertargetaction.'
            );
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
        if (is_string($role)) {
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

    public function setAriaCurrent(string|AriaCurrentEnum $ariaCurrent): static
    {
        if (is_string($ariaCurrent)) {
            $ariaCurrent = AriaCurrentEnum::tryFrom($ariaCurrent) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaCurrent.'
            );
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
        if (is_string($ariaBusy)) {
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
        if (is_string($ariaDisabled)) {
            $ariaDisabled = AriaDisabledEnum::tryFrom($ariaDisabled) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaDisabled.'
            );
        }
        $this->ariaDisabled = $ariaDisabled;
        $this->delegated->setAttribute('aria-disabled', (string) $ariaDisabled->value);

        return $this;
    }

    public function getAriaDisabled(): ?AriaDisabledEnum
    {
        return $this->ariaDisabled;
    }
}
