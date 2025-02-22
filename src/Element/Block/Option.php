<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Option - The option element represents an item in a select dropdown list.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/option
 */
namespace Html\Element\Block;

use Html\Element\Inline\Select;
use Html\Element\Block\OptionGroup;
use Html\Model\BlockElement;

class Option extends BlockElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'option';

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
     * The allowed parent element classes. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $childOf = [
        Select::class,
        OptionGroup::class,
    ];

    /** 
     * When present, it specifies that an input element should be disabled.
     * @category HTML attribute */
    public ?bool $disabled;

    /** 
     * Specifies a label for the associated form control, option group, or option.
     * @category HTML attribute */
    public ?string $label;

    /** 
     * When present, it specifies that an option should be pre-selected when the page loads.
     * @category HTML attribute */
    public ?bool $selected;

    /** 
     * Specifies the value associated with the element. The meaning and usage may vary depending on the element type.
     * @category HTML attribute */
    public ?string $value;

}
