<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Meter - The meter element represents a scalar measurement within a known range, or a fractional value.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meter
 */
namespace Html\Element\Inline;

use Html\Model\InlineElement;

class Meter extends InlineElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'meter';

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
     * Specifies the high value for a range input or a meter element.
     * @category HTML attribute */
    public ?string $high;

    /** 
     * Specifies the low value for a range input.
     * @category HTML attribute */
    public ?string $low;

    /** 
     * Specifies the maximum value for an input element, meter, or progress element.
     * @category HTML attribute */
    public ?int $max;

    /** 
     * Specifies the minimum value for an input element or a meter element.
     * @category HTML attribute */
    public ?string $min;

    /** 
     * Specifies the optimal value for a gauge or progress element.
     * @category HTML attribute */
    public ?string $optimum;

    /** 
     * Specifies the value associated with the element. The meaning and usage may vary depending on the element type.
     * @category HTML attribute */
    public ?string $value;

}
