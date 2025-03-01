<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Meter - The meter element represents a scalar measurement within a known range, or a fractional value.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meter
 */
namespace Html\Element\Inline;

use Html\Element\InlineElement;

class Meter extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'meter';

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
    ];


    /** Specifies the high value for a range input or a meter element. */
    public ?string $high;

    /** Specifies the low value for a range input. */
    public ?string $low;

    /** Specifies the maximum value for an input element, meter, or progress element. */
    public ?int $max;

    /** Specifies the minimum value for an input element or a meter element. */
    public ?string $min;

    /** Specifies the optimal value for a gauge or progress element. */
    public ?string $optimum;

    /** Specifies the value associated with the element. The meaning and usage may vary depending on the element type. */
    public ?string $value;

}
