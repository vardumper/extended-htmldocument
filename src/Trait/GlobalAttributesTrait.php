<?php

namespace Html\Trait;

use Html\Enum\ContentEditableEnum;
use Html\Enum\InputModeEnum;
use Html\Enum\SpellCheckEnum;
use InvalidArgumentException;

/**
 * properties that exist in HTMLElement, don't need to be declared here. __set and __get will handle them
 *  - for example className, id
 *
 * properties that are declared gloabbly here and additionaly in an HTML\Element class, will be set in the HTML\Element class
 *  - for example Anchor::$title
 */
trait GlobalAttributesTrait
{

    /**
     * Represents the spellchecking behavior of the element
     */
    protected ?SpellCheckEnum $spellcheck = null;

    /**
     * used to specify the data entry mode for an input. It helps guide on-screen keyboards (especially on mobile devices)
     * to show the appropriate layout for the expected input type
     */
    private ?InputModeEnum $inputmode = null;




    /**
     * @description Suggests an input mode (e.g., numeric, email, tel).
     */
    public function setInputMode(string|InputModeEnum $inputMode = InputModeEnum::NUMERIC): static
    {
        if (is_string($inputMode) && ! in_array($inputMode, array_map(fn ($e) => $e->value, InputModeEnum::cases()))) {
            throw new InvalidArgumentException('Invalid value for inputmode');
        }
        $this->inputmode = is_string($inputMode) ? InputModeEnum::from($inputMode) : $inputMode;
        $this->delegated->setAttribute('inputmode', $this->inputmode->value);
        return $this;
    }

    public function getInputMode(): ?InputModeEnum
    {
        return $this->inputmode;
    }

    /**
     * @description Specifies if spellchecking is enabled (true, false).
     */
    public function setSpellCheck(bool|string|SpellCheckEnum $spellCheck): static
    {
        if (is_bool($spellCheck)) {
            $spellCheck = $spellCheck ? SpellCheckEnum::TRUE : SpellCheckEnum::FALSE;
        }
        if (is_string($spellCheck)) {
            if (! in_array($spellCheck, array_map(fn ($e) => $e->value, SpellCheckEnum::cases()))) {
                throw new InvalidArgumentException('Invalid value for spellcheck');
            }
            $spellCheck = SpellCheckEnum::from($spellCheck);
        }
        $this->spellcheck = $spellCheck;
        $this->delegated->setAttribute(SpellCheckEnum::getQualifiedName(), $spellCheck->value);
        return $this;
    }

    public function getSpellCheck(): ?SpellCheckEnum
    {
        return $this->spellcheck;
    }
}
