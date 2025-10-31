<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

trait RoleTrait
{
   /**
    * Represents the role of the element
    */
   public ?string $role = null;

   /**
    * @description Defines the ARIA role for accessibility.
    */
   public function setRole(string $role): static
   {
      $this->role = $role;
      // $this->delegated->setAttribute('role', $role);
      return $this;
   }

   public function getRole(): ?string
   {
      return $this->role;
   }
}
