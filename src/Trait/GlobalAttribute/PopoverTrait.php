<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

use Html\Enum\PopoverEnum;

trait PopoverTrait
{
   /**
    * @description Marks the element as a popover that can be triggered via JavaScript.
    */
   public ?PopoverEnum $popover = null;

   public function setPopover(bool|string|PopoverEnum $popover = PopoverEnum::AUTO): static
   {
      // handle boolean
      if (is_bool($popover)) {
         if ($popover === true) {
            $popover = PopoverEnum::AUTO;
         }
      }

      // handle string input
      if (is_string($popover)) {
         $popover = match (strtolower($popover)) {
            'true' => PopoverEnum::AUTO,
            'false' => false,
            'auto' => PopoverEnum::AUTO,
            'hint' => PopoverEnum::HINT,
            'manual' => PopoverEnum::MANUAL,
            default => throw new \InvalidArgumentException('Popover attribute can only be "true", "false", "auto", "hint" or "manual".'),
         };
      }

      if ($popover instanceof PopoverEnum) {
         $this->popover = $popover;
         $this->setAttribute('popover', $popover->value);
         $this->delegated->setAttribute('popover', $popover->value);
      }
      return $this;
   }

   public function getPopover(): ?PopoverEnum
   {
      return $this->popover;
   }
}
