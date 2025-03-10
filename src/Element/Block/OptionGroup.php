<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * OptionGroup - The optgroup element represents a group of option elements with a common label.
 *
 * @generated 2025-03-08 18:09:25
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/optgroup
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\Select;

class OptionGroup extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'optgroup';

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
    public static array $childOf = [Select::class];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [Option::class];

    /**
     * When present, it specifies that an input element should be disabled.
     */
    public ?bool $disabled = null;

    /**
     * Specifies a label for the associated form control, option group, or option.
     */
    public ?string $label = null;

    public function setDisabled(bool $disabled): self
    {
        $this->disabled = $disabled;
        return $this;
    }

    public function getDisabled(): ?bool
    {
        return $this->disabled;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;
        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }
}
