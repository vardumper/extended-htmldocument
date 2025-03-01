<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Input - The input element represents a typed data field, usually with a form control to allow user input.
 *
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
    public static array $childOf = [];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * Specifies a comma-separated list of file types that the server accepts.
     */
    public ?string $accept = null;

    /**
     * Specifies alternative text to be displayed when the image cannot be rendered.
     */
    public ?string $alt = null;

    public ?AutocompleteEnum $autocomplete = null;

    /**
     * When present, it indicates that an input element should be pre-selected (checked) when the page loads.
     */
    public ?bool $checked = null;

    /**
     * Specifies the direction of the text.
     */
    public ?string $dirname = null;

    /**
     * When present, it specifies that an input element should be disabled.
     */
    public ?bool $disabled = null;

    /**
     * Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     */
    public ?string $height = null;

    /**
     * Refers to a <datalist> element that contains pre-defined options for an input element.
     */
    public ?string $list = null;

    /**
     * Specifies the maximum value for an input element, meter, or progress element.
     */
    public ?int $max = null;

    /**
     * Specifies the maximum number of characters allowed in an input field.
     */
    public ?int $maxlength = null;

    /**
     * Specifies the minimum value for an input element or a meter element.
     */
    public ?string $min = null;

    /**
     * Specifies the minimum number of characters required in an input field.
     */
    public ?int $minlength = null;

    /**
     * When present, it specifies that the user is allowed to enter more than one value in an input element.
     */
    public ?bool $multiple = null;

    /**
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     */
    public ?string $name = null;

    /**
     * Specifies a regular expression that the <input> element's value is checked against.
     */
    public ?string $pattern = null;

    /**
     * Specifies a short hint that describes the expected value of an input field.
     */
    public ?string $placeholder = null;

    /**
     * When present, it specifies that an input element is read-only.
     */
    public ?bool $readonly = null;

    /**
     * When present, it specifies that an input field must be filled out before submitting the form.
     */
    public ?bool $required = null;

    /**
     * Specifies the height of a hr element in pixels.
     */
    public ?int $size = null;

    /**
     * Specifies the URL of the external resource to be embedded or referenced. Required if input type is image
     */
    public ?string $src = null;

    /**
     * Specifies the legal number intervals for an input element.
     */
    public ?string $step = null;

    /**
     * Specifies the type of the input. Defaults to text if the attribute is omitted
     * @example text
     */
    public ?TypeEnum $type = null;

    /**
     * Specifies the value associated with the element. The meaning and usage may vary depending on the element type.
     */
    public ?string $value = null;

    /**
     * Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     */
    public ?string $width = null;
}
