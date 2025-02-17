<?php
/**
 * Input - The input element represents a typed data field, usually with a form control to allow user input.
 * 
 * @package Html\Element\Inline
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input
 */
namespace Html\Element\Inline;

use Html\Enum\AutocompleteEnum;
use Html\Enum\TypeEnum;
use Html\Model\InlineElement;

class Input extends InlineElement
{
    public static string $qualifiedName = 'input';

    /* Specifies a comma-separated list of file types that the server accepts. */
    public ?string $accept;

    /* 
     * Specifies alternative text to be displayed when the image cannot be rendered.
     * @required
     */
    public string $alt;

    /*  */
    public ?AutocompleteEnum $autocomplete;

    /* When present, it indicates that an input element should be pre-selected (checked) when the page loads. */
    public ?bool $checked;

    /* Specifies the direction of the text. */
    public ?string $dirname;

    /* When present, it specifies that an input element should be disabled. */
    public ?bool $disabled;

    /* Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $height;

    /* Refers to a <datalist> element that contains pre-defined options for an input element. */
    public ?string $list;

    /* Specifies the maximum value for an input element, meter, or progress element. */
    public ?int $max;

    /* Specifies the maximum number of characters allowed in an input field. */
    public ?int $maxlength;

    /* Specifies the minimum value for an input element or a meter element. */
    public ?string $min;

    /* Specifies the minimum number of characters required in an input field. */
    public ?int $minlength;

    /* When present, it specifies that the user is allowed to enter more than one value in an input element. */
    public ?bool $multiple;

    /* Specifies the name associated with the element. The meaning may vary depending on the context. */
    public ?string $name;

    /* Specifies a regular expression that the <input> element's value is checked against. */
    public ?string $pattern;

    /* Specifies a short hint that describes the expected value of an input field. */
    public ?string $placeholder;

    /* When present, it specifies that an input element is read-only. */
    public ?bool $readonly;

    /* When present, it specifies that an input field must be filled out before submitting the form. */
    public ?bool $required;

    /* Specifies the height of a hr element in pixels. */
    public ?int $size;

    /* 
     * Specifies the URL of the external resource to be embedded or referenced.
     * @required
     */
    public string $src;

    /* Specifies the legal number intervals for an input element. */
    public ?string $step;

    /* Specifies the media type of the linked resource. */
    public ?TypeEnum $type;

    /* Specifies the value associated with the element. The meaning and usage may vary depending on the element type. */
    public ?string $value;

    /* Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $width;


    public function __construct()
    {

    }


}