<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Select - The select element represents a control for selecting amongst a set of options.
 *
 * @generated 2025-12-04 12:02:25
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/select
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
use Html\Element\Block\Option;
use Html\Element\Block\OptionGroup;
use Html\Element\Block\Paragraph;
use Html\Element\Block\Section;
use Html\Element\Block\Template;
use Html\Element\InlineElement;
use Html\Enum\AriaAtomicEnum;
use Html\Enum\AriaAutocompleteEnum;
use Html\Enum\AriaDisabledEnum;
use Html\Enum\AriaExpandedEnum;
use Html\Enum\AriaHaspopupEnum;
use Html\Enum\AriaInvalidEnum;
use Html\Enum\AriaLiveEnum;
use Html\Enum\AriaMultiselectableEnum;
use Html\Enum\AriaOrientationEnum;
use Html\Enum\AriaPressedEnum;
use Html\Enum\AriaReadonlyEnum;
use Html\Enum\AriaRelevantEnum;
use Html\Enum\AriaRequiredEnum;
use Html\Enum\AutocompleteEnum;
use Html\Enum\AutocorrectEnum;
use Html\Enum\RoleEnum;
use Html\Mapping\Element;
use Html\Trait\GlobalAttribute;
use InvalidArgumentException;

#[Element('select')]
class Select extends InlineElement
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
    use GlobalAttribute\PopoverTrait;

    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'select';

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
    public static array $parentOf = [OptionGroup::class, Option::class];

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
     * When present, it specifies that an input element should be disabled.
     */
    protected ?bool $disabled = null;

    /**
     * When present, it specifies that the user is allowed to enter more than one value in an input element.
     */
    protected ?bool $multiple = null;

    /**
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     */
    protected ?string $name = null;

    /**
     * When present, it specifies that an input field must be filled out before submitting the form.
     */
    protected ?bool $required = null;

    /**
     * Specifies the height of a hr element in pixels.
     */
    protected ?int $size = null;

    /**
     * Associates the button with a form element by ID. Allows buttons to be associated with forms anywhere in the document, not just inside a form element. Can override ancestor form association. Element-specific to button, input, object, select, textarea, and fieldset.
     */
    protected ?string $form = null;

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
     * Defines whether multiple items can be selected in a listbox, grid, or tree.
     * @example false
     */
    protected ?AriaMultiselectableEnum $ariaMultiselectable = null;

    /**
     * Identifies the currently active child element (e.g., for autocomplete suggestions or composite widgets).
     */
    protected ?string $ariaActivedescendant = null;

    /**
     * Specifies whether an element is horizontal or vertical.
     */
    protected ?AriaOrientationEnum $ariaOrientation = null;

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

    public function setMultiple(bool $multiple): static
    {
        $this->multiple = $multiple;
        $this->delegated->setAttribute('multiple', (string) $multiple);
        return $this;
    }

    public function getMultiple(): ?bool
    {
        return $this->multiple;
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

    public function setSize(int $size): static
    {
        $this->size = $size;
        $this->delegated->setAttribute('size', (string) $size);
        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
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

    public function setAriaMultiselectable(string|AriaMultiselectableEnum $ariaMultiselectable): static
    {
        if (\is_string($ariaMultiselectable)) {
            $ariaMultiselectable = AriaMultiselectableEnum::tryFrom(
                $ariaMultiselectable
            ) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaMultiselectable.'
            );
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
            $ariaOrientation = AriaOrientationEnum::tryFrom($ariaOrientation) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaOrientation.'
            );
        }
        $this->ariaOrientation = $ariaOrientation;
        $this->delegated->setAttribute('aria-orientation', (string) $ariaOrientation->value);

        return $this;
    }

    public function getAriaOrientation(): ?AriaOrientationEnum
    {
        return $this->ariaOrientation;
    }
}
