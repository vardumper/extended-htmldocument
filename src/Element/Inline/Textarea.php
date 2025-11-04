<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Textarea - The textarea element represents a multiline plain text edit control for the element's raw value.
 *
 * @generated 2025-11-02 22:39:29
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/textarea
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
use Html\Element\Block\Paragraph;
use Html\Element\Block\Section;
use Html\Element\Block\Template;
use Html\Element\InlineElement;
use Html\Enum\AriaDisabledEnum;
use Html\Enum\AriaInvalidEnum;
use Html\Enum\AutocompleteEnum;
use Html\Enum\AutocorrectEnum;
use Html\Enum\RoleEnum;
use Html\Enum\WrapEnum;
use Html\Mapping\Element;
use Html\Trait\GlobalAttribute;
use InvalidArgumentException;

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
    use GlobalAttribute\SpellcheckTrait;
    use GlobalAttribute\StyleTrait;
    use GlobalAttribute\TabindexTrait;
    use GlobalAttribute\TitleTrait;
    use GlobalAttribute\TranslateTrait;
    use GlobalAttribute\PopoverTrait;

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
    public ?AutocompleteEnum $autocomplete = null;

    /**
     * Specifies controls whether autocorrection of editable text is enabled for spelling and/or punctuation errors. Default is on.
     * @example on
     */
    public ?AutocorrectEnum $autocorrect = null;

    /**
     * Specifies the visible width of a text area, in average character widths.
     */
    public ?int $cols = null;

    /**
     * Specifies the name of the field that will contain the text direction (ltr or rtl) of the input or textarea when the form is submitted
     */
    public ?string $dirname = null;

    /**
     * When present, it specifies that an input element should be disabled.
     */
    public ?bool $disabled = null;

    /**
     * Associates the button with a form element by ID. Allows buttons to be associated with forms anywhere in the document, not just inside a form element. Can override ancestor form association. Element-specific to button, input, object, select, textarea, and fieldset.
     */
    public ?string $form = null;

    /**
     * Specifies the maximum number of characters allowed in an input field.
     */
    public ?int $maxlength = null;

    /**
     * Specifies the minimum number of characters required in an input field.
     */
    public ?int $minlength = null;

    /**
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     */
    public ?string $name = null;

    /**
     * Specifies a short hint that describes the expected value of an input field.
     */
    public ?string $placeholder = null;

    /**
     * When present, it specifies that an input element is read-only.
     */
    public ?bool $readonly = null;

    /**
     * When present, it specifies that an input field must be filled out before submitting the form.
     */
    public ?bool $required = null;

    /**
     * Specifies the visible number of lines in a text area.
     */
    public ?int $rows = null;

    /**
     * @example soft
     */
    public ?WrapEnum $wrap = null;

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
     * Indicates that the value entered does not conform to the expected format.
     * @example false
     */
    public ?AriaInvalidEnum $ariaInvalid = null;

    /**
     * Defines a string value that labels the current element for assistive technologies.
     */
    public ?string $ariaLabel = null;

    /**
     * Indicates that the element is perceivable but disabled, so it is not editable or otherwise operable.
     * @example false
     */
    public ?AriaDisabledEnum $ariaDisabled = null;

    public function setAutocomplete(string|AutocompleteEnum $autocomplete): static
    {
        if (is_string($autocomplete)) {
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
        if (is_string($wrap)) {
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

    public function setAriaInvalid(string|AriaInvalidEnum $ariaInvalid): static
    {
        if (is_string($ariaInvalid)) {
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
