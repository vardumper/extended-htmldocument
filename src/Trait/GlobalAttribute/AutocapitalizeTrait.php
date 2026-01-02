<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

use Html\Enum\AutoCapitalizeEnum;

trait AutocapitalizeTrait
{
    /**
     * Represents the autocapitalize behavior of the element
     */
    private ?AutoCapitalizeEnum $autocapitalize = null;

    /**
     * @description Controls automatic capitalization for text input (none, sentences, words, characters).
     */
    public function setAutoCapitalize(string|AutoCapitalizeEnum $autoCapitalize): static
    {
        if (is_string($autoCapitalize)) {
            $autoCapitalize = AutoCapitalizeEnum::from($autoCapitalize);
        }
        $this->autocapitalize = $autoCapitalize;
        $this->delegated->setAttribute('autocapitalize', $autoCapitalize->value);
        return $this;
    }

    public function getAutoCapitalize(): ?AutoCapitalizeEnum
    {
        return $this->autocapitalize;
    }
}
