<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Textarea - The textarea element represents a multiline plain text edit control for the element's raw value.
 * 
 * @generated 2025-10-26 23:58:50
 * @category HTML
 * @package vardumper/extended-htmldocument
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
use Html\Element\Inline\MarkedText;
use Html\Element\Inline\Slot;
use Html\Enum\AutocompleteEnum;
use Html\Enum\WrapEnum;
use Html\Mapping\Element;

#[Element('textarea')]
class Textarea extends InlineElement
{
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
    public static array $parentOf = [
    ];


    /** 
     * 
     * @category HTML attribute
     * @example on
     */
    public ?AutocompleteEnum $autocomplete = null;

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

    /** 
     * 
     * @category HTML attribute
     * @example soft
     */
    public ?WrapEnum $wrap = null;


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
            $wrap = WrapEnum::tryFrom($wrap) ?? throw new \InvalidArgumentException("Invalid value for \$wrap.");
        }
        $this->wrap = $wrap;
        $this->delegated->setAttribute('wrap', (string) $wrap->value);

        return $this;
    }

    public function getWrap(): ?WrapEnum
    {
        return $this->wrap;
    }

}
