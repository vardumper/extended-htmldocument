<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Select - The select element represents a control for selecting amongst a set of options.
 * 
 * @generated 2025-10-26 23:58:50
 * @category HTML
 * @package vardumper/extended-htmldocument
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
use Html\Element\Inline\MarkedText;
use Html\Element\Inline\Slot;
use Html\Enum\AutocompleteEnum;
use Html\Mapping\Element;

#[Element('select')]
class Select extends InlineElement
{
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
    public static array $parentOf = [
        OptionGroup::class,
        Option::class,
    ];


    /** 
     * 
     * @category HTML attribute
     * @example on
     */
    public ?AutocompleteEnum $autocomplete = null;

    /** When present, it specifies that an input element should be disabled. */
    public ?bool $disabled = null;

    /** When present, it specifies that the user is allowed to enter more than one value in an input element. */
    public ?bool $multiple = null;

    /** Specifies the name associated with the element. The meaning may vary depending on the context. */
    public ?string $name = null;

    /** When present, it specifies that an input field must be filled out before submitting the form. */
    public ?bool $required = null;

    /** Specifies the height of a hr element in pixels. */
    public ?int $size = null;


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

}
