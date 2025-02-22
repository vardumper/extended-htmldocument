<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Textarea - The textarea element represents a multiline plain text edit control for the element's raw value.
 *
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/textarea
 */

namespace Html\Element\Inline;

use Html\Enum\AutocompleteEnum;
use Html\Enum\WrapEnum;
use Html\Model\InlineElement;

class Textarea extends InlineElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'textarea';

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

    public ?AutocompleteEnum $autocomplete;

    /**
     * Specifies the visible width of a text area, in average character widths.
     */
    public ?int $cols;

    /**
     * Specifies the direction of the text.
     */
    public ?string $dirname;

    /**
     * When present, it specifies that an input element should be disabled.
     */
    public ?bool $disabled;

    /**
     * Specifies the maximum number of characters allowed in an input field.
     */
    public ?int $maxlength;

    /**
     * Specifies the minimum number of characters required in an input field.
     */
    public ?int $minlength;

    /**
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     */
    public ?string $name;

    /**
     * Specifies a short hint that describes the expected value of an input field.
     */
    public ?string $placeholder;

    /**
     * When present, it specifies that an input element is read-only.
     */
    public ?bool $readonly;

    /**
     * When present, it specifies that an input field must be filled out before submitting the form.
     */
    public ?bool $required;

    /**
     * Specifies the visible number of lines in a text area.
     */
    public ?int $rows;

    public ?WrapEnum $wrap;
}
