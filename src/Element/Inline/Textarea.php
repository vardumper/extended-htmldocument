<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2025-12-31 00:30:17
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/textarea
 */

namespace Html\Element\Inline;

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
    Paragraph,
    Section,
    Template,
};
use Html\Element\InlineElement;
use Html\Enum\{
    AriaAtomicEnum,
    AriaAutocompleteEnum,
    AriaDisabledEnum,
    AriaExpandedEnum,
    AriaHaspopupEnum,
    AriaInvalidEnum,
    AriaLiveEnum,
    AriaMultilineEnum,
    AriaPressedEnum,
    AriaReadonlyEnum,
    AriaRelevantEnum,
    AriaRequiredEnum,
    AutocompleteEnum,
    AutocorrectEnum,
    RoleEnum,
    WrapEnum,
};
use Html\Mapping\Element;
use Html\Trait\GlobalAttribute;
use InvalidArgumentException;

/**
 * The textarea element represents a multiline plain text edit control for the element's raw value.
 */
#[Element('textarea')]
class Textarea extends InlineElement
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
    public const string QUALIFIED_NAME = 'textarea';

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
     * @example on
     */
    protected ?AutocompleteEnum $autocomplete = null;

    /**
     * Specifies controls whether autocorrection of editable text is enabled for spelling and/or punctuation errors. Default is on.
     * @example on
     */
    protected ?AutocorrectEnum $autocorrect = null;

    /**
     * Specifies the visible width of a text area, in average character widths.
     */
    protected ?int $cols = null;

    /**
     * Specifies the name of the field that will contain the text direction (ltr or rtl) of the input or textarea when the form is submitted
     */
    protected ?string $dirname = null;

    /**
     * When present, it specifies that an input element should be disabled.
     */
    protected ?bool $disabled = null;

    /**
     * Associates the button with a form element by ID. Allows buttons to be associated with forms anywhere in the document, not just inside a form element. Can override ancestor form association. Element-specific to button, input, object, select, textarea, and fieldset.
     */
    protected ?string $form = null;

    /**
     * Specifies the maximum number of characters allowed in an input field.
     */
    protected ?int $maxlength = null;

    /**
     * Specifies the minimum number of characters required in an input field.
     */
    protected ?int $minlength = null;

    /**
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     */
    protected ?string $name = null;

    /**
     * Specifies a short hint that describes the expected value of an input field.
     */
    protected ?string $placeholder = null;

    /**
     * When present, it specifies that an input element is read-only.
     */
    protected ?bool $readonly = null;

    /**
     * When present, it specifies that an input field must be filled out before submitting the form.
     */
    protected ?bool $required = null;

    /**
     * Specifies the visible number of lines in a text area.
     */
    protected ?int $rows = null;

    /**
     * @example soft
     */
    protected ?WrapEnum $wrap = null;

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
     * Indicates that the value entered does not conform to the expected format.
     * @example false
     */
    protected ?AriaInvalidEnum $ariaInvalid = null;

    /**
     * Defines a string value that labels the current element for assistive technologies.
     */
    protected ?string $ariaLabel = null;

    /**
     * Indicates that the element is perceivable but disabled, so it is not editable or otherwise operable.
     * @example false
     */
    protected ?AriaDisabledEnum $ariaDisabled = null;

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
     * Indicates whether a collapsible UI element is expanded (true) or collapsed (false).
     */
    protected ?AriaExpandedEnum $ariaExpanded = null;

    /**
     * Indicates that an element has an associated popup menu, listbox, tree, grid, or dialog.
     * @example false
     */
    protected ?AriaHaspopupEnum $ariaHaspopup = null;

    /**
     * Indicates whether a toggle button is pressed (true, false, or mixed).
     */
    protected ?AriaPressedEnum $ariaPressed = null;

    /**
     * Specifies autocomplete behavior for input fields.
     * @example none
     */
    protected ?AriaAutocompleteEnum $ariaAutocomplete = null;

    /**
     * Provides a placeholder hint for an input field.
     */
    protected ?string $ariaPlaceholder = null;

    /**
     * Marks an input field as read-only but still selectable and focusable.
     * @example false
     */
    protected ?AriaReadonlyEnum $ariaReadonly = null;

    /**
     * Specifies that an input field is required before form submission.
     * @example false
     */
    protected ?AriaRequiredEnum $ariaRequired = null;

    /**
     * Indicates whether the input allows multiple lines of text.
     * @example true
     */
    protected ?AriaMultilineEnum $ariaMultiline = null;

    public function setAutocomplete(string|AutocompleteEnum $autocomplete): static
    {
        if (\is_string($autocomplete)) {
            $autocomplete = AutocompleteEnum::tryFrom($autocomplete) ?? throw new InvalidArgumentException(
                'Invalid value for $autocomplete.'
            );
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
        if (\is_string($autocorrect)) {
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

    public function setCols(int $cols): static
    {
        $this->cols = $cols;
        $this->delegated->setAttribute('cols', (string) $cols);
        return $this;
    }

    public function getCols(): ?int
    {
        return $this->cols;
    }

    public function setDirname(string $dirname): static
    {
        $this->dirname = $dirname;
        $this->delegated->setAttribute('dirname', (string) $dirname);
        return $this;
    }

    public function getDirname(): ?string
    {
        return $this->dirname;
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

    public function setMaxlength(int $maxlength): static
    {
        $this->maxlength = $maxlength;
        $this->delegated->setAttribute('maxlength', (string) $maxlength);
        return $this;
    }

    public function getMaxlength(): ?int
    {
        return $this->maxlength;
    }

    public function setMinlength(int $minlength): static
    {
        $this->minlength = $minlength;
        $this->delegated->setAttribute('minlength', (string) $minlength);
        return $this;
    }

    public function getMinlength(): ?int
    {
        return $this->minlength;
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

    public function setPlaceholder(string $placeholder): static
    {
        $this->placeholder = $placeholder;
        $this->delegated->setAttribute('placeholder', (string) $placeholder);
        return $this;
    }

    public function getPlaceholder(): ?string
    {
        return $this->placeholder;
    }

    public function setReadonly(bool $readonly): static
    {
        $this->readonly = $readonly;
        $this->delegated->setAttribute('readonly', (string) $readonly);
        return $this;
    }

    public function getReadonly(): ?bool
    {
        return $this->readonly;
    }

    public function setRequired(bool $required): static
    {
        $this->required = $required;
        $this->delegated->setAttribute('required', (string) $required);
        return $this;
    }

    public function getRequired(): ?bool
    {
        return $this->required;
    }

    public function setRows(int $rows): static
    {
        $this->rows = $rows;
        $this->delegated->setAttribute('rows', (string) $rows);
        return $this;
    }

    public function getRows(): ?int
    {
        return $this->rows;
    }

    public function setWrap(string|WrapEnum $wrap): static
    {
        if (\is_string($wrap)) {
            $wrap = WrapEnum::tryFrom($wrap) ?? throw new InvalidArgumentException('Invalid value for $wrap.');
        }
        $this->wrap = $wrap;
        $this->delegated->setAttribute('wrap', (string) $wrap->value);

        return $this;
    }

    public function getWrap(): ?WrapEnum
    {
        return $this->wrap;
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

    public function setAriaInvalid(string|AriaInvalidEnum $ariaInvalid): static
    {
        if (\is_string($ariaInvalid)) {
            $ariaInvalid = AriaInvalidEnum::tryFrom($ariaInvalid) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaInvalid.'
            );
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

    public function setAriaDisabled(string|AriaDisabledEnum $ariaDisabled): static
    {
        if (\is_string($ariaDisabled)) {
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

    public function setAriaExpanded(string|AriaExpandedEnum $ariaExpanded): static
    {
        if (\is_string($ariaExpanded)) {
            $ariaExpanded = AriaExpandedEnum::tryFrom($ariaExpanded) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaExpanded.'
            );
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
            $ariaHaspopup = AriaHaspopupEnum::tryFrom($ariaHaspopup) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaHaspopup.'
            );
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
            $ariaPressed = AriaPressedEnum::tryFrom($ariaPressed) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaPressed.'
            );
        }
        $this->ariaPressed = $ariaPressed;
        $this->delegated->setAttribute('aria-pressed', (string) $ariaPressed->value);

        return $this;
    }

    public function getAriaPressed(): ?AriaPressedEnum
    {
        return $this->ariaPressed;
    }

    public function setAriaAutocomplete(string|AriaAutocompleteEnum $ariaAutocomplete): static
    {
        if (\is_string($ariaAutocomplete)) {
            $ariaAutocomplete = AriaAutocompleteEnum::tryFrom($ariaAutocomplete) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaAutocomplete.'
            );
        }
        $this->ariaAutocomplete = $ariaAutocomplete;
        $this->delegated->setAttribute('aria-autocomplete', (string) $ariaAutocomplete->value);

        return $this;
    }

    public function getAriaAutocomplete(): ?AriaAutocompleteEnum
    {
        return $this->ariaAutocomplete;
    }

    public function setAriaPlaceholder(string $ariaPlaceholder): static
    {
        $this->ariaPlaceholder = $ariaPlaceholder;
        $this->delegated->setAttribute('aria-placeholder', (string) $ariaPlaceholder);
        return $this;
    }

    public function getAriaPlaceholder(): ?string
    {
        return $this->ariaPlaceholder;
    }

    public function setAriaReadonly(string|AriaReadonlyEnum $ariaReadonly): static
    {
        if (\is_string($ariaReadonly)) {
            $ariaReadonly = AriaReadonlyEnum::tryFrom($ariaReadonly) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaReadonly.'
            );
        }
        $this->ariaReadonly = $ariaReadonly;
        $this->delegated->setAttribute('aria-readonly', (string) $ariaReadonly->value);

        return $this;
    }

    public function getAriaReadonly(): ?AriaReadonlyEnum
    {
        return $this->ariaReadonly;
    }

    public function setAriaRequired(string|AriaRequiredEnum $ariaRequired): static
    {
        if (\is_string($ariaRequired)) {
            $ariaRequired = AriaRequiredEnum::tryFrom($ariaRequired) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaRequired.'
            );
        }
        $this->ariaRequired = $ariaRequired;
        $this->delegated->setAttribute('aria-required', (string) $ariaRequired->value);

        return $this;
    }

    public function getAriaRequired(): ?AriaRequiredEnum
    {
        return $this->ariaRequired;
    }

    public function setAriaMultiline(string|AriaMultilineEnum $ariaMultiline): static
    {
        if (\is_string($ariaMultiline)) {
            $ariaMultiline = AriaMultilineEnum::tryFrom($ariaMultiline) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaMultiline.'
            );
        }
        $this->ariaMultiline = $ariaMultiline;
        $this->delegated->setAttribute('aria-multiline', (string) $ariaMultiline->value);

        return $this;
    }

    public function getAriaMultiline(): ?AriaMultilineEnum
    {
        return $this->ariaMultiline;
    }
}
