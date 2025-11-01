<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Input - The input element represents a typed data field, usually with a form control to allow user input.
 * 
 * @generated 2025-11-01 20:20:24
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input
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
use Html\Element\Inline\MarkedText;
use Html\Element\Inline\Slot;
use Html\Enum\AriaCurrentEnum;
use Html\Enum\AriaDisabledEnum;
use Html\Enum\AriaInvalidEnum;
use Html\Enum\AriaLabelEnum;
use Html\Enum\AutocompleteEnum;
use Html\Enum\AutocorrectEnum;
use Html\Enum\InputTypeEnum;
use Html\Enum\RoleEnum;
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

#[Element('input')]
class Input extends InlineElement
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
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'input';

    /**
     * If an element is self closing
     */
    public const bool SELF_CLOSING = true;

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
    public static array $parentOf = [
    ];


    /** Specifies a comma-separated list of file types that the server accepts. */
    public ?string $accept = null;

    /** 
     * Specifies controls whether autocorrection of editable text is enabled for spelling and/or punctuation errors. Default is on.
     * @category HTML attribute
     * @example on
     */
    public ?AutocorrectEnum $autocorrect = null;

    /** Specifies alternative text to be displayed when the image cannot be rendered. */
    public ?string $alt = null;

    /** 
     * 
     * @category HTML attribute
     * @example on
     */
    public ?AutocompleteEnum $autocomplete = null;

    /** When present, it indicates that an input element should be pre-selected (checked) when the page loads. */
    public ?bool $checked = null;

    /** Specifies the direction of the text. */
    public ?string $dirname = null;

    /** When present, it specifies that an input element should be disabled. */
    public ?bool $disabled = null;

    /** Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $height = null;

    /** Refers to a <datalist> element that contains pre-defined options for an input element. */
    public ?string $list = null;

    /** Specifies the maximum value for an input element, meter, or progress element. */
    public ?int $max = null;

    /** Specifies the maximum number of characters allowed in an input field. */
    public ?int $maxlength = null;

    /** Specifies the minimum value for an input element or a meter element. */
    public ?string $min = null;

    /** Specifies the minimum number of characters required in an input field. */
    public ?int $minlength = null;

    /** When present, it specifies that the user is allowed to enter more than one value in an input element. */
    public ?bool $multiple = null;

    /** Specifies the name associated with the element. The meaning may vary depending on the context. */
    public ?string $name = null;

    /** Specifies a regular expression that the <input> element's value is checked against. */
    public ?string $pattern = null;

    /** Specifies a short hint that describes the expected value of an input field. */
    public ?string $placeholder = null;

    /** When present, it specifies that an input element is read-only. */
    public ?bool $readonly = null;

    /** When present, it specifies that an input field must be filled out before submitting the form. */
    public ?bool $required = null;

    /** Specifies the height of a hr element in pixels. */
    public ?int $size = null;

    /** Specifies the URL of the external resource to be embedded or referenced. Required if input type is image */
    public ?string $src = null;

    /** Specifies the legal number intervals for an input element. */
    public ?string $step = null;

    /** 
     * Specifies the type of the input. Defaults to text if the attribute is omitted
     * @category HTML attribute
     * @example text
     */
    public ?InputTypeEnum $type = null;

    /** Specifies the value associated with the element. The meaning and usage may vary depending on the element type. */
    public ?string $value = null;

    /** Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $width = null;

    /** Array */
    public ?RoleEnum $role = null;

    /** Identifies the element(s) whose contents or presence are controlled by this element. Value is a list of IDs separated by a space */
    public ?string $ariaControls = null;

    /** Identifies the element(s) that describes the object. Value is a list of IDs separated by a space */
    public ?string $ariaDescribedby = null;

    /** Identifies the element(s) that labels the current element. Value is a list of IDs separated by a space */
    public ?string $ariaLabelledby = null;

    /** 
     * Indicates the current item within a container or set of related elements.
     * @category HTML attribute
     * @example false
     */
    public ?AriaCurrentEnum $ariaCurrent = null;

    /** 
     * Indicates that the value entered does not conform to the expected format.
     * @category HTML attribute
     * @example false
     */
    public ?AriaInvalidEnum $ariaInvalid = null;

    /** Defines a string value that labels the current element for assistive technologies. */
    public null|string|AriaLabelEnum $ariaLabel = null;

    /** 
     * Indicates that the element is perceivable but disabled, so it is not editable or otherwise operable.
     * @category HTML attribute
     * @example false
     */
    public ?AriaDisabledEnum $ariaDisabled = null;


    public function setAccept(string $accept): static
    {
        $this->accept = $accept;
        $this->delegated->setAttribute('accept', (string) $accept);
        return $this;
    }

    public function getAccept(): ?string
    {
        return $this->accept;
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

    public function setAlt(string $alt): static
    {
        $this->alt = $alt;
        $this->delegated->setAttribute('alt', (string) $alt);
        return $this;
    }

    public function getAlt(): ?string
    {
        return $this->alt;
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

    public function setChecked(bool $checked): static
    {
        $this->checked = $checked;
        $this->delegated->setAttribute('checked', (string) $checked);
        return $this;
    }

    public function getChecked(): ?bool
    {
        return $this->checked;
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

    public function setHeight(string $height): static
    {
        $this->height = $height;
        $this->delegated->setAttribute('height', (string) $height);
        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setList(string $list): static
    {
        $this->list = $list;
        $this->delegated->setAttribute('list', (string) $list);
        return $this;
    }

    public function getList(): ?string
    {
        return $this->list;
    }

    public function setMax(int $max): static
    {
        $this->max = $max;
        $this->delegated->setAttribute('max', (string) $max);
        return $this;
    }

    public function getMax(): ?int
    {
        return $this->max;
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

    public function setMin(string $min): static
    {
        $this->min = $min;
        $this->delegated->setAttribute('min', (string) $min);
        return $this;
    }

    public function getMin(): ?string
    {
        return $this->min;
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

    public function setPattern(string $pattern): static
    {
        $this->pattern = $pattern;
        $this->delegated->setAttribute('pattern', (string) $pattern);
        return $this;
    }

    public function getPattern(): ?string
    {
        return $this->pattern;
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

    public function setStep(string $step): static
    {
        $this->step = $step;
        $this->delegated->setAttribute('step', (string) $step);
        return $this;
    }

    public function getStep(): ?string
    {
        return $this->step;
    }

    public function setType(string|InputTypeEnum $type): static
    {
        if (is_string($type)) {
            $type = InputTypeEnum::tryFrom($type) ?? throw new \InvalidArgumentException("Invalid value for \$type.");
        }
        $this->type = $type;
        $this->delegated->setAttribute('type', (string) $type->value);

        return $this;
    }

    public function getType(): ?InputTypeEnum
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

    public function setWidth(string $width): static
    {
        $this->width = $width;
        $this->delegated->setAttribute('width', (string) $width);
        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }

    public function setRole(string|RoleEnum $role): static
    {
        if (is_string($role)) {
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
        if (is_string($ariaCurrent)) {
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

    public function setAriaLabel(string|AriaLabelEnum $ariaLabel): static
    {
        $value = $ariaLabel;
        if (is_string($ariaLabel)) {
            $resolved = AriaLabelEnum::tryFrom($ariaLabel);
            if (!is_null($resolved)) {
                $ariaLabel = $resolved;
            }
        }
        if ($ariaLabel instanceof AriaLabelEnum) {
            $value = $ariaLabel->value;
        }
        $this->ariaLabel = $ariaLabel;
        $this->delegated->setAttribute('aria-label', (string) $value);

        return $this;
    }

    public function getAriaLabel(): null|string|AriaLabelEnum
    {
        return $this->ariaLabel;
    }

    public function setAriaDisabled(string|AriaDisabledEnum $ariaDisabled): static
    {
        if (is_string($ariaDisabled)) {
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

}
