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

use Html\Enum\AutocompleteEnum;
use Html\Model\InlineElement;

class Select extends InlineElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'select';

    /**
     * If an element is unique per HTML document
     * @category HTML element property
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     * @category HTML element property
     */
    public static bool $uniquePerParent = false;

    /**
     * The allowed parent classes. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $childOf = [];

    /** 
     * 
     * @category HTML attribute */
    public ?AutocompleteEnum $autocomplete;

    /** 
     * When present, it specifies that an input element should be disabled.
     * @category HTML attribute */
    public ?bool $disabled;

    /** 
     * When present, it specifies that the user is allowed to enter more than one value in an input element.
     * @category HTML attribute */
    public ?bool $multiple;

    /** 
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     * @category HTML attribute */
    public ?string $name;

    /** 
     * When present, it specifies that an input field must be filled out before submitting the form.
     * @category HTML attribute */
    public ?bool $required;

    /** 
     * Specifies the height of a hr element in pixels.
     * @category HTML attribute */
    public ?int $size;

}
