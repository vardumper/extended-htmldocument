<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Meter - The meter element represents a scalar measurement within a known range, or a fractional value.
 * 
 * @generated 2025-11-01 20:20:24
 * @category HTML
 * @package vardumper/extended-htmldocument
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
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

#[Element('meter')]
class Meter extends InlineElement
{
    use GlobalAttribute\AccesskeyTrait;
    use GlobalAttribute\AutocapitalizeTrait;
    use GlobalAttribute\AutofocusTrait;
    use GlobalAttribute\ClassTrait;
    use GlobalAttribute\ContenteditableTrait;
    use GlobalAttribute\DataTrait;
    use GlobalAttribute\DirTrait;
    use GlobalAttribute\DraggableTrait;
    use GlobalAttribute\HiddenTrait;
    use GlobalAttribute\IdTrait;
    use GlobalAttribute\InputmodeTrait;
    use GlobalAttribute\LangTrait;
    use GlobalAttribute\SpellcheckTrait;
    use GlobalAttribute\StyleTrait;
    use GlobalAttribute\TabindexTrait;
    use GlobalAttribute\TitleTrait;
    use GlobalAttribute\TranslateTrait;
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'meter';

    /**
     * If an element is self closing
     */
    public const bool SELF_CLOSING = false;

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
        Body::class,
        Fieldset::class,
        Form::class,
        Paragraph::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [
    ];


    /** Specifies the high value for a range input or a meter element. */
    public ?string $high = null;

    /** Specifies the low value for a range input. */
    public ?string $low = null;

    /** Specifies the maximum value for an input element, meter, or progress element. */
    public ?int $max = null;

    /** Specifies the minimum value for an input element or a meter element. */
    public ?string $min = null;

    /** Specifies the optimal value for a gauge or progress element. */
    public ?string $optimum = null;

    /** Specifies the value associated with the element. The meaning and usage may vary depending on the element type. */
    public ?string $value = null;


    public function setHigh(string $high): static
    {
        $this->high = $high;
        $this->delegated->setAttribute('high', (string) $high);
        return $this;
    }

    public function getHigh(): ?string
    {
        return $this->high;
    }

    public function setLow(string $low): static
    {
        $this->low = $low;
        $this->delegated->setAttribute('low', (string) $low);
        return $this;
    }

    public function getLow(): ?string
    {
        return $this->low;
    }

    public function setMax(int $max): static
    {
        $this->max = $max;
        $this->delegated->setAttribute('max', (string) $max);
        return $this;
    }

    public function getMax(): ?int
    {
        return $this->max;
    }

    public function setMin(string $min): static
    {
        $this->min = $min;
        $this->delegated->setAttribute('min', (string) $min);
        return $this;
    }

    public function getMin(): ?string
    {
        return $this->min;
    }

    public function setOptimum(string $optimum): static
    {
        $this->optimum = $optimum;
        $this->delegated->setAttribute('optimum', (string) $optimum);
        return $this;
    }

    public function getOptimum(): ?string
    {
        return $this->optimum;
    }

    public function setValue(string $value): static
    {
        $this->value = $value;
        $this->delegated->setAttribute('value', (string) $value);
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

}
