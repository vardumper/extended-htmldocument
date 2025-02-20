<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Meter - The meter element represents a scalar measurement within a known range, or a fractional value.
 *
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meter
 */

namespace Html\Element\Inline;

use Html\Model\InlineElement;

final class Meter extends InlineElement
{
    public static string $qualifiedName = 'meter';

    /* Specifies the high value for a range input or a meter element. */
    public ?string $high;

    /* Specifies the low value for a range input. */
    public ?string $low;

    /* Specifies the maximum value for an input element, meter, or progress element. */
    public ?int $max;

    /* Specifies the minimum value for an input element or a meter element. */
    public ?string $min;

    /* Specifies the optimal value for a gauge or progress element. */
    public ?string $optimum;

    /* Specifies the value associated with the element. The meaning and usage may vary depending on the element type. */
    public ?string $value;
}
