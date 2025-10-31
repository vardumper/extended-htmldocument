<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

trait PopoverTrait
{
   /**
    * @description Marks the element as a popover that can be triggered via JavaScript.
    */
   public ?bool $popover = null;

   public function setPopover(bool|string $popover = true): static
   {
      $this->popover = $popover;
      $this->delegated->setAttribute('popover', $popover ? 'true' : 'false');
      return $this;
   }

   public function getPopover(): bool
   {
      return $this->popover;
   }
}
