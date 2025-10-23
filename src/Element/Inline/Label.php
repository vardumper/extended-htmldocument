<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Label - The label element represents a caption in a user interface. The caption can be associated with a specific form control, known as the label element's labeled control, either using the for attribute, or by putting the form control inside the label element itself.
 *
 * @generated 2025-10-23 23:06:19
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/label
 */

namespace Html\Element\Inline;

use Html\Element\Block\Body;
use Html\Element\Block\Fieldset;
use Html\Element\Block\Form;
use Html\Element\Block\Paragraph;
use Html\Element\InlineElement;
use Html\Mapping\Element;

#[Element('label')]
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
    public static array $childOf = [Body::class, Fieldset::class, Form::class, Paragraph::class];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * Refers to the <datalist> element that contains the options for an input element.
     */
    public ?string $for = null;

    public function setFor(string $for): static
    {
        $this->for = $for;
        $this->delegated->setAttribute('for', (string) $for);
        return $this;
    }

    public function getFor(): ?string
    {
        return $this->for;
    }
}
