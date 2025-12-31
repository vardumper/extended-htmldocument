<?php
declare(strict_types=1);
namespace Html\Trait\GlobalAttribute;

use Html\Enum\AutocorrectEnum;

// @phpstan-ignore-next-line - trait may be used dynamically by code generation
trait AutocorrectTrait
{
   /**
    * Indicates whether the element should have its spelling and grammar checked
    */
   public ?AutocorrectEnum $autocorrect = null;

   /**
    * @description Enables or disables automatic spelling and grammar checking.
    */
   public function setAutocorrect(bool|string|AutocorrectEnum $autocorrect = AutocorrectEnum::ON): static
   {
      // cast string to enum
      if (is_string($autocorrect)) {
         $autocorrect = match (strtolower($autocorrect)) {
            'on' => AutocorrectEnum::ON,
            'off' => AutocorrectEnum::OFF,
            default => throw new \InvalidArgumentException('Autocorrect attribute can only be "on" or "off".'),
         };
      }
      // cast bool to enum
      if (is_bool($autocorrect)) {
         $autocorrect = $autocorrect === true ? AutocorrectEnum::ON : AutocorrectEnum::OFF;
      }
      $this->autocorrect = $autocorrect;
      $this->setAttribute('autocorrect', $autocorrect->value);
      $this->delegated->setAttribute('autocorrect', $autocorrect->value);
      return $this;
   }

   public function getAutocorrect(): ?AutocorrectEnum
   {
      return $this->autocorrect;
   }
}
