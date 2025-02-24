<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Select - The select element represents a control for selecting amongst a set of options.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/select
 */
namespace Html\Element\Inline;

use Html\Element\Block\Option;
use Html\Element\Block\OptionGroup;
use Html\Element\InlineElement;
use Html\Enum\AutocompleteEnum;

class Select extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'select';

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
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [
        OptionGroup::class,
        Option::class,
    ];


    /**  */
    public ?AutocompleteEnum $autocomplete;

    /** When present, it specifies that an input element should be disabled. */
    public ?bool $disabled;

    /** When present, it specifies that the user is allowed to enter more than one value in an input element. */
    public ?bool $multiple;

    /** Specifies the name associated with the element. The meaning may vary depending on the context. */
    public ?string $name;

    /** When present, it specifies that an input field must be filled out before submitting the form. */
    public ?bool $required;

    /** Specifies the height of a hr element in pixels. */
    public ?int $size;

}
