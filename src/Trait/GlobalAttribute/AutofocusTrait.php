<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

trait AutofocusTrait
{
   /**
    * Indicates whether the element is hidden
    */
   public ?bool $autofocus = null;


   /**
    * @description Hides the element from rendering.
    */
   public function setAutofocus(bool|string $autofocus = true): static
   {
      // cast string to bool
      if (is_string($autofocus)) {
         $autofocus = match (strtolower($autofocus)) {
            'true' => true,
            'false' => false,
            default => throw new \InvalidArgumentException('Autofocus attribute can only be "true" or "false".'),
         };
      }
      if ($autofocus) {
         $this->autofocus = $autofocus;
         $this->delegated->setAttribute('autofocus', 'true');
      }
      return $this;
   }

   public function getAutofocus(): bool
   {
      return $this->autofocus;
   }
}
