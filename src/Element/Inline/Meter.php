<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Meter - The meter element represents a scalar measurement within a known range, or a fractional value.
 *
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meter
 */

namespace Html\Element\Inline;

use Html\Element\Block\Body;
use Html\Element\Block\Fieldset;
use Html\Element\Block\Form;
use Html\Element\Block\Paragraph;
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
    public static array $childOf = [Body::class, Fieldset::class, Form::class, Paragraph::class];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * Specifies the high value for a range input or a meter element.
     */
    public ?string $high = null;

    /**
     * Specifies the low value for a range input.
     */
    public ?string $low = null;

    /**
     * Specifies the maximum value for an input element, meter, or progress element.
     */
    public ?int $max = null;

    /**
     * Specifies the minimum value for an input element or a meter element.
     */
    public ?string $min = null;

    /**
     * Specifies the optimal value for a gauge or progress element.
     */
    public ?string $optimum = null;

    /**
     * Specifies the value associated with the element. The meaning and usage may vary depending on the element type.
     */
    public ?string $value = null;

    public function setHigh(string $high): self
    {
        $this->high = $high;
        return $this;
    }

    public function getHigh(): ?string
    {
        return $this->high;
    }

    public function setLow(string $low): self
    {
        $this->low = $low;
        return $this;
    }

    public function getLow(): ?string
    {
        return $this->low;
    }

    public function setMax(int $max): self
    {
        $this->max = $max;
        return $this;
    }

    public function getMax(): ?int
    {
        return $this->max;
    }

    public function setMin(string $min): self
    {
        $this->min = $min;
        return $this;
    }

    public function getMin(): ?string
    {
        return $this->min;
    }

    public function setOptimum(string $optimum): self
    {
        $this->optimum = $optimum;
        return $this;
    }

    public function getOptimum(): ?string
    {
        return $this->optimum;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }
}
