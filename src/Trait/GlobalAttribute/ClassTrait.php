<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

/**
 * ClassName property not declared here, as it's part of PHPs HTMLElement class
 */
trait ClassTrait
{
   /**
    * @description Assigns CSS class names to an element.
    */
   public function setClass(string $className): static
   {
      $this->className = $className;
      return $this;
   }

   public function getClass(): ?string
   {
      return $this->className;
   }

   /**
    * alias
    */
   public function getClassName(): ?string
   {
      return $this->className;
   }

   /**
    * alias
    */
   public function setClassName(string $className): static
   {
      return $this->setClass($className);
   }
}
