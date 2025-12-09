<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2025-12-09 15:32:40
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/progress
 */
namespace Html\Element\Inline;

use Html\Element\InlineElement;
use Html\Element\Block\{
    Body,
    Fieldset,
    Form,
    Paragraph,
};
use Html\Enum\{
    AriaAtomicEnum,
    AriaLiveEnum,
    AriaRelevantEnum,
};
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

/**
 * The progress element represents the completion progress of a task.
 */
#[Element('progress')]
class Progress extends InlineElement
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
    use GlobalAttribute\SlotTrait;
    use GlobalAttribute\SpellcheckTrait;
    use GlobalAttribute\StyleTrait;
    use GlobalAttribute\TabindexTrait;
    use GlobalAttribute\TitleTrait;
    use GlobalAttribute\TranslateTrait;
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'progress';

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


    /** Specifies the maximum value for an input element, meter, or progress element. */
    protected ?int $max = null;

    /** Specifies the value associated with the element. The meaning and usage may vary depending on the element type. */
    protected ?string $value = null;

    /** References an element that provides additional details about the current element. */
    protected ?string $ariaDetails = null;

    /** Defines keyboard shortcuts available for the element. */
    protected ?string $ariaKeyshortcuts = null;

    /** Provides a human-readable custom role description for assistive technologies. */
    protected ?string $ariaRoledescription = null;

    /** 
     * Defines how updates to the element should be announced to screen readers.
     * @category HTML attribute
     * @example off
     */
    protected ?AriaLiveEnum $ariaLive = null;

    /** 
     * Indicates what content changes should be announced in a live region.
     * @category HTML attribute
     * @example additions text
     */
    protected ?AriaRelevantEnum $ariaRelevant = null;

    /** 
     * Indicates whether assistive technologies should present the entire region as a whole when changes occur.
     * @category HTML attribute
     * @example false
     */
    protected ?AriaAtomicEnum $ariaAtomic = null;

    /** Defines the maximum value for a range input. */
    protected ?int $ariaValuemax = null;

    /** Defines the minimum value for a range input. */
    protected ?int $ariaValuemin = null;

    /** Specifies the current value for a range input. */
    protected ?int $ariaValuenow = null;

    /** Provides a human-readable representation of the current value. */
    protected ?string $ariaValuetext = null;


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

    public function setAriaDetails(string $ariaDetails): static
    {
        $this->ariaDetails = $ariaDetails;
        $this->delegated->setAttribute('aria-details', (string) $ariaDetails);
        return $this;
    }

    public function getAriaDetails(): ?string
    {
        return $this->ariaDetails;
    }

    public function setAriaKeyshortcuts(string $ariaKeyshortcuts): static
    {
        $this->ariaKeyshortcuts = $ariaKeyshortcuts;
        $this->delegated->setAttribute('aria-keyshortcuts', (string) $ariaKeyshortcuts);
        return $this;
    }

    public function getAriaKeyshortcuts(): ?string
    {
        return $this->ariaKeyshortcuts;
    }

    public function setAriaRoledescription(string $ariaRoledescription): static
    {
        $this->ariaRoledescription = $ariaRoledescription;
        $this->delegated->setAttribute('aria-roledescription', (string) $ariaRoledescription);
        return $this;
    }

    public function getAriaRoledescription(): ?string
    {
        return $this->ariaRoledescription;
    }

    public function setAriaLive(string|AriaLiveEnum $ariaLive): static
    {
        if (\is_string($ariaLive)) {
            $ariaLive = AriaLiveEnum::tryFrom($ariaLive) ?? throw new \InvalidArgumentException("Invalid value for \$ariaLive.");
        }
        $this->ariaLive = $ariaLive;
        $this->delegated->setAttribute('aria-live', (string) $ariaLive->value);

        return $this;
    }

    public function getAriaLive(): ?AriaLiveEnum
    {
        return $this->ariaLive;
    }

    public function setAriaRelevant(string|AriaRelevantEnum $ariaRelevant): static
    {
        if (\is_string($ariaRelevant)) {
            $ariaRelevant = AriaRelevantEnum::tryFrom($ariaRelevant) ?? throw new \InvalidArgumentException("Invalid value for \$ariaRelevant.");
        }
        $this->ariaRelevant = $ariaRelevant;
        $this->delegated->setAttribute('aria-relevant', (string) $ariaRelevant->value);

        return $this;
    }

    public function getAriaRelevant(): ?AriaRelevantEnum
    {
        return $this->ariaRelevant;
    }

    public function setAriaAtomic(string|AriaAtomicEnum $ariaAtomic): static
    {
        if (\is_string($ariaAtomic)) {
            $ariaAtomic = AriaAtomicEnum::tryFrom($ariaAtomic) ?? throw new \InvalidArgumentException("Invalid value for \$ariaAtomic.");
        }
        $this->ariaAtomic = $ariaAtomic;
        $this->delegated->setAttribute('aria-atomic', (string) $ariaAtomic->value);

        return $this;
    }

    public function getAriaAtomic(): ?AriaAtomicEnum
    {
        return $this->ariaAtomic;
    }

    public function setAriaValuemax(int $ariaValuemax): static
    {
        $this->ariaValuemax = $ariaValuemax;
        $this->delegated->setAttribute('aria-valuemax', (string) $ariaValuemax);
        return $this;
    }

    public function getAriaValuemax(): ?int
    {
        return $this->ariaValuemax;
    }

    public function setAriaValuemin(int $ariaValuemin): static
    {
        $this->ariaValuemin = $ariaValuemin;
        $this->delegated->setAttribute('aria-valuemin', (string) $ariaValuemin);
        return $this;
    }

    public function getAriaValuemin(): ?int
    {
        return $this->ariaValuemin;
    }

    public function setAriaValuenow(int $ariaValuenow): static
    {
        $this->ariaValuenow = $ariaValuenow;
        $this->delegated->setAttribute('aria-valuenow', (string) $ariaValuenow);
        return $this;
    }

    public function getAriaValuenow(): ?int
    {
        return $this->ariaValuenow;
    }

    public function setAriaValuetext(string $ariaValuetext): static
    {
        $this->ariaValuetext = $ariaValuetext;
        $this->delegated->setAttribute('aria-valuetext', (string) $ariaValuetext);
        return $this;
    }

    public function getAriaValuetext(): ?string
    {
        return $this->ariaValuetext;
    }

}
