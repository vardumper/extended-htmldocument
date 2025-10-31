<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

trait InertTrait
{
   /**
    * Indicates whether the element is inert
    */
   public ?bool $inert = null;

   /**
    * @description Makes an element non-interactive (removes it from focus, clicks, etc.).
    */
   public function setInert(bool $inert): static
   {
      $this->inert = $inert;
      $this->delegated->setAttribute('inert', $inert ? 'true' : 'false');
      return $this;
   }

   public function getInert(): bool
   {
      return $this->inert;
   }
}
