<?php
declare(strict_types=1);
namespace Html\Trait\GlobalAttribute;

use Html\Enum\InputModeEnum;
use InvalidArgumentException;

trait InputmodeTrait
{
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
}
