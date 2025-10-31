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
      $this->hidden = $hidden;
      $this->delegated->setAttribute('hidden', $hidden ? 'true' : 'false');
      return $this;
   }

   public function getHidden(): bool
   {
      return $this->hidden;
   }
}
