<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Textarea - The textarea element represents a multiline plain text edit control for the element's raw value.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/textarea
 */
namespace Html\Element\Inline;

use Html\Element\InlineElement;
use Html\Enum\AutocompleteEnum;
use Html\Enum\WrapEnum;

class Textarea extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'textarea';

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


    /**  */
    protected ?AutocompleteEnum $autocomplete = null;

    /** Specifies the visible width of a text area, in average character widths. */
    public ?int $cols = null;

    /** Specifies the direction of the text. */
    public ?string $dirname = null;

    /** When present, it specifies that an input element should be disabled. */
    public ?bool $disabled = null;

    /** Specifies the maximum number of characters allowed in an input field. */
    public ?int $maxlength = null;

    /** Specifies the minimum number of characters required in an input field. */
    public ?int $minlength = null;

    /** Specifies the name associated with the element. The meaning may vary depending on the context. */
    public ?string $name = null;

    /** Specifies a short hint that describes the expected value of an input field. */
    public ?string $placeholder = null;

    /** When present, it specifies that an input element is read-only. */
    public ?bool $readonly = null;

    /** When present, it specifies that an input field must be filled out before submitting the form. */
    public ?bool $required = null;

    /** Specifies the visible number of lines in a text area. */
    public ?int $rows = null;

    /**  */
    protected ?WrapEnum $wrap = null;


    public function setAutocomplete(AutocompleteEnum $autocomplete): void
    {
        $this->autocomplete = $autocomplete;
        $this->htmlElement->setAttribute('autocomplete', $autocomplete->value);
    }

    public function getAutocomplete(): ?AutocompleteEnum
    {
        return $this->autocomplete;
    }

    public function setCols(int $cols): void
    {
        $this->cols = $cols;
    }

    public function getCols(): ?int
    {
        return $this->cols;
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

    public function setMaxlength(int $maxlength): void
    {
        $this->maxlength = $maxlength;
    }

    public function getMaxlength(): ?int
    {
        return $this->maxlength;
    }

    public function setMinlength(int $minlength): void
    {
        $this->minlength = $minlength;
    }

    public function getMinlength(): ?int
    {
        return $this->minlength;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): ?string
    {
        return $this->name;
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

    public function setRows(int $rows): void
    {
        $this->rows = $rows;
    }

    public function getRows(): ?int
    {
        return $this->rows;
    }

    public function setWrap(WrapEnum $wrap): void
    {
        $this->wrap = $wrap;
        $this->htmlElement->setAttribute('wrap', $wrap->value);
    }

    public function getWrap(): ?WrapEnum
    {
        return $this->wrap;
    }

}
