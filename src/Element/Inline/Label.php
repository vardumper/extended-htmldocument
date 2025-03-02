<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Label - The label element represents a caption in a user interface. The caption can be associated with a specific form control, known as the label element's labeled control, either using the for attribute, or by putting the form control inside the label element itself.
 *
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/label
 */

namespace Html\Element\Inline;

use Html\Element\InlineElement;

class Label extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'label';

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
    public static array $childOf = [];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * Refers to the <datalist> element that contains the options for an input element.
     */
    public ?string $for = null;

    public function setFor(string $for): self
    {
        $this->for = $for;
        return $this;
    }

    public function getFor(): ?string
    {
        return $this->for;
    }
}
