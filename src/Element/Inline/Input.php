<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Input - The input element represents a typed data field, usually with a form control to allow user input.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input
 */
namespace Html\Element\Inline;

use Html\Element\InlineElement;
use Html\Enum\AutocompleteEnum;
use Html\Enum\TypeEnum;

class Input extends InlineElement
{
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
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [
    ];


    /** Specifies a comma-separated list of file types that the server accepts. */
    public ?string $accept = null;

    /** Specifies alternative text to be displayed when the image cannot be rendered. */
    public ?string $alt = null;

    /**  */
    protected ?AutocompleteEnum $autocomplete = null;

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
    protected ?TypeEnum $type = null;

    /** Specifies the value associated with the element. The meaning and usage may vary depending on the element type. */
    public ?string $value = null;

    /** Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $width = null;


    public function setAccept(string $accept): void
    {
        $this->accept = $accept;
    }

    public function getAccept(): ?string
    {
        return $this->accept;
    }

    public function setAlt(string $alt): void
    {
        $this->alt = $alt;
    }

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setAutocomplete(AutocompleteEnum $autocomplete): void
    {
        $this->autocomplete = $autocomplete;
        $this->htmlElement->setAttribute('autocomplete', $autocomplete->value);
    }

    public function getAutocomplete(): ?AutocompleteEnum
    {
        return $this->autocomplete;
    }

    public function setChecked(bool $checked): void
    {
        $this->checked = $checked;
    }

    public function getChecked(): ?bool
    {
        return $this->checked;
    }

    public function setDirname(string $dirname): void
    {
        $this->dirname = $dirname;
    }

    public function getDirname(): ?string
    {
        return $this->dirname;
    }

    public function setDisabled(bool $disabled): void
    {
        $this->disabled = $disabled;
    }

    public function getDisabled(): ?bool
    {
        return $this->disabled;
    }

    public function setHeight(string $height): void
    {
        $this->height = $height;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setList(string $list): void
    {
        $this->list = $list;
    }

    public function getList(): ?string
    {
        return $this->list;
    }

    public function setMax(int $max): void
    {
        $this->max = $max;
    }

    public function getMax(): ?int
    {
        return $this->max;
    }

    public function setMaxlength(int $maxlength): void
    {
        $this->maxlength = $maxlength;
    }

    public function getMaxlength(): ?int
    {
        return $this->maxlength;
    }

    public function setMin(string $min): void
    {
        $this->min = $min;
    }

    public function getMin(): ?string
    {
        return $this->min;
    }

    public function setMinlength(int $minlength): void
    {
        $this->minlength = $minlength;
    }

    public function getMinlength(): ?int
    {
        return $this->minlength;
    }

    public function setMultiple(bool $multiple): void
    {
        $this->multiple = $multiple;
    }

    public function getMultiple(): ?bool
    {
        return $this->multiple;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setPattern(string $pattern): void
    {
        $this->pattern = $pattern;
    }

    public function getPattern(): ?string
    {
        return $this->pattern;
    }

    public function setPlaceholder(string $placeholder): void
    {
        $this->placeholder = $placeholder;
    }

    public function getPlaceholder(): ?string
    {
        return $this->placeholder;
    }

    public function setReadonly(bool $readonly): void
    {
        $this->readonly = $readonly;
    }

    public function getReadonly(): ?bool
    {
        return $this->readonly;
    }

    public function setRequired(bool $required): void
    {
        $this->required = $required;
    }

    public function getRequired(): ?bool
    {
        return $this->required;
    }

    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSrc(string $src): void
    {
        $this->src = $src;
    }

    public function getSrc(): ?string
    {
        return $this->src;
    }

    public function setStep(string $step): void
    {
        $this->step = $step;
    }

    public function getStep(): ?string
    {
        return $this->step;
    }

    public function setType(TypeEnum $type): void
    {
        $this->type = $type;
        $this->htmlElement->setAttribute('type', $type->value);
    }

    public function getType(): ?TypeEnum
    {
        return $this->type;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setWidth(string $width): void
    {
        $this->width = $width;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }

}
