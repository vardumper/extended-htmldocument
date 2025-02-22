<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Select - The select element represents a control for selecting amongst a set of options.
 *
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/select
 */

namespace Html\Element\Inline;

use Html\Enum\AutocompleteEnum;
use Html\Model\InlineElement;

final class Select extends InlineElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'select';

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

    public ?AutocompleteEnum $autocomplete;

    /**
     * When present, it specifies that an input element should be disabled.
     */
    public ?bool $disabled;

    /**
     * When present, it specifies that the user is allowed to enter more than one value in an input element.
     */
    public ?bool $multiple;

    /**
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     */
    public ?string $name;

    /**
     * When present, it specifies that an input field must be filled out before submitting the form.
     */
    public ?bool $required;

    /**
     * Specifies the height of a hr element in pixels.
     */
    public ?int $size;
}
