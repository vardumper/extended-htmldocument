<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

trait StyleTrait
{
   /**
    * Represents the CSS inline style of the element
    */
   public ?string $style = null;


   /**
    * @description Adds inline CSS styles to the element.
    */
   public function setStyle(string $style): static
   {
      $this->style = $style;
      // $this->delegated->setAttribute('style', $style);
      return $this;
   }

   public function getStyle(): ?string
   {
      return $this->style;
   }
}
