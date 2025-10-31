<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

trait HiddenTrait
{
   /**
    * Indicates whether the element is hidden
    */
   public ?bool $hidden = null;


   /**
    * @description Hides the element from rendering.
    */
   public function setHidden(bool|string $hidden = true): static
   {
      // cast string to bool
      if (is_string($hidden)) {
         $hidden = match (strtolower($hidden)) {
            'true' => true,
            'false' => false,
            default => throw new \InvalidArgumentException('Hidden attribute can only be "true" or "false".'),
         };
      }
      if ($hidden) {
         $this->hidden = $hidden;
         $this->setAttribute('hidden', $hidden);
         $this->delegated->setAttribute('hidden', $hidden ? 'true' : 'false');
      }
      return $this;
   }

   public function getHidden(): bool
   {
      return $this->hidden;
   }
}
