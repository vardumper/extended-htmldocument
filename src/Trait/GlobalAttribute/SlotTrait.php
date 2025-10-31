<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

trait SlotTrait
{
   /**
    * Represents a slot in a shadow DOM
    */
   public ?string $slot = null;

   /**
    * @description Assigns the element to a named slot in a shadow DOM.
    */
   public function setSlot(string $slot): static
   {
      $this->slot = $slot;
      // $this->delegated->setAttribute('slot', $slot);
      return $this;
   }

   public function getSlot(): ?string
   {
      return $this->slot;
   }
}
