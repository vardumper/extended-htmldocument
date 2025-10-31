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
      if (is_string($popover)) {
         $popover = match (strtolower($popover)) {
            'true' => true,
            'false' => false,
            default => throw new \InvalidArgumentException('Popover attribute can only be "true" or "false".'),
         };
      }
      if ($popover) {
         $this->popover = $popover;
         $this->setAttribute('popover', $popover);
         $this->delegated->setAttribute('popover', $popover ? 'true' : 'false');
      }
      return $this;
   }

   public function getPopover(): bool
   {
      return $this->popover;
   }
}
