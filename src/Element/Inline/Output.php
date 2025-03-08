<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Output - The output element represents the result of a calculation or user action.
 *
 * @generated 2025-03-08 17:22:28
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/output
 */

namespace Html\Element\Inline;

use Html\Element\Block\Body;
use Html\Element\Block\Fieldset;
use Html\Element\Block\Form;
use Html\Element\Block\Paragraph;
use Html\Element\InlineElement;

class Output extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'output';

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
