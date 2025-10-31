<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

trait TabindexTrait
{
   /**
    * Represents a tab order of the element
    */
   public ?int $tabindex = null;

   /**
    * @description Sets the tab order for keyboard navigation.
    */
   public function setTabIndex(int $tabIndex): static
   {
      $this->tabindex = $tabIndex;
      // $this->delegated->setAttribute('tabindex', (string)$tabIndex);
      return $this;
   }

   public function getTabIndex(): ?int
   {
      return $this->tabindex;
   }
}
