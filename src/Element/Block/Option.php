<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Option - The option element represents an item in a select dropdown list.
 *
 * @generated 2025-10-26 20:40:54
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/option
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\Select;
use Html\Mapping\Element;

#[Element('option')]
class Option extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'option';

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
    public static array $childOf = [Select::class, OptionGroup::class, DataList::class];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * When present, it specifies that an input element should be disabled.
     */
    public ?bool $disabled = null;

    /**
     * Specifies a label for the associated form control, option group, or option.
     */
    public ?string $label = null;

    /**
     * When present, it specifies that an option should be pre-selected when the page loads.
     */
    public ?bool $selected = null;

    /**
     * Specifies the value associated with the element. The meaning and usage may vary depending on the element type.
     */
    public ?string $value = null;

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

    public function setLabel(string $label): static
    {
        $this->label = $label;
        $this->delegated->setAttribute('label', (string) $label);
        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setSelected(bool $selected): static
    {
        $this->selected = $selected;
        $this->delegated->setAttribute('selected', (string) $selected);
        return $this;
    }

    public function getSelected(): ?bool
    {
        return $this->selected;
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
}
