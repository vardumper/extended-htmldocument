<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

// @phpstan-ignore-next-line - trait may be used dynamically by code generation
trait IsTrait
{
   /**
    * allows you to specify a particular custom element that extends a built-in element
    */
   public ?string $is = null;

   /**
    * @description Allows an element to be a custom built-in element (Web Components).
    */
   public function setIs(string $is): static
   {
      $this->is = $is;
      // $this->delegated->setAttribute('is', $is);
      return $this;
   }

   public function getIs(): ?string
   {
      return $this->is;
   }
}
