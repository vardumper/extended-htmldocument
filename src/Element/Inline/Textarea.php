<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Textarea - The textarea element represents a multiline plain text edit control for the element's raw value.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
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
     * @category HTML element property
     */
    public static string $qualifiedName = 'textarea';

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
     * Specifies the visible width of a text area, in average character widths.
     * @category HTML attribute */
    public ?int $cols;

    /** 
     * Specifies the direction of the text.
     * @category HTML attribute */
    public ?string $dirname;

    /** 
     * When present, it specifies that an input element should be disabled.
     * @category HTML attribute */
    public ?bool $disabled;

    /** 
     * Specifies the maximum number of characters allowed in an input field.
     * @category HTML attribute */
    public ?int $maxlength;

    /** 
     * Specifies the minimum number of characters required in an input field.
     * @category HTML attribute */
    public ?int $minlength;

    /** 
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     * @category HTML attribute */
    public ?string $name;

    /** 
     * Specifies a short hint that describes the expected value of an input field.
     * @category HTML attribute */
    public ?string $placeholder;

    /** 
     * When present, it specifies that an input element is read-only.
     * @category HTML attribute */
    public ?bool $readonly;

    /** 
     * When present, it specifies that an input field must be filled out before submitting the form.
     * @category HTML attribute */
    public ?bool $required;

    /** 
     * Specifies the visible number of lines in a text area.
     * @category HTML attribute */
    public ?int $rows;

    /** 
     * 
     * @category HTML attribute */
    public ?WrapEnum $wrap;

}
