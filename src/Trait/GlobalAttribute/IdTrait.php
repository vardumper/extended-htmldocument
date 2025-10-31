<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

/**
 * Id property not declared here, as it's part of PHPs HTMLElement class
 */
trait IdTrait
{
   public function setId(string $id): static
   {
      // @todo shall we really throw an exception here? or simply ignore it?
      if (preg_match('/\s/', $id)) {
         throw new \InvalidArgumentException('ID attribute cannot contain whitespace characters.');
      }
      if (empty($id)) {
         throw new \InvalidArgumentException('ID attribute cannot be an empty string.');
      }
      $this->id = $id;
      $this->delegated->setAttribute('id', $id);
      return $this;
   }

   public function getId(): ?string
   {
      return $this->id;
   }
}
