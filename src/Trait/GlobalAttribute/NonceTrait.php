<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

trait NonceTrait
{
   /**
    * Represents a unique cryptographic nonce used to verify requests
    */
   public ?string $nonce = null;

   /**
    * @description Defines the language of the content (e.g., en, fr).
    */
   public function setNonce(string $nonce): static
   {
      $this->nonce = $nonce;
      // $this->delegated->setAttribute('nonce', $nonce);
      return $this;
   }

   public function getNonce(): ?string
   {
      return $this->nonce;
   }
}
