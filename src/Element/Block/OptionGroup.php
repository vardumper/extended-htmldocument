<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * OptionGroup - The optgroup element represents a group of option elements with a common label.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/optgroup
 */
namespace Html\Element\Block;

use Html\Element\Inline\Select;
use Html\Model\BlockElement;

class OptionGroup extends BlockElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'optgroup';

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
    ];

    /** 
     * When present, it specifies that an input element should be disabled.
     * @category HTML attribute */
    public ?bool $disabled;

    /** 
     * Specifies a label for the associated form control, option group, or option.
     * @category HTML attribute */
    public ?string $label;

}
