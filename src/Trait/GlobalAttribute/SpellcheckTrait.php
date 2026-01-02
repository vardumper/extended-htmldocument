<?php

namespace Html\Trait\GlobalAttribute;

use Html\Enum\SpellCheckEnum;
use InvalidArgumentException;

trait SpellcheckTrait
{
    /**
     * Represents the spellchecking behavior of the element
     */
    protected ?SpellCheckEnum $spellcheck = null;

    /**
     * @description Specifies if spellchecking is enabled (true, false).
     */
    public function setSpellcheck(bool|string|SpellCheckEnum $spellCheck): static
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

    public function getSpellcheck(): ?SpellCheckEnum
    {
        return $this->spellcheck;
    }
}
