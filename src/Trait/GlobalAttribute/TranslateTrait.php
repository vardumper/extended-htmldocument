<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

use Html\Enum\TranslateEnum;

trait TranslateTrait
{
   /**
    *  used to tell user agents whether the content should be translated.
    */
   public ?TranslateEnum $translate = null;

   /**
    * @description Specifies whether the content should be translated (yes, no).
    */
   public function setTranslate(bool|string|TranslateEnum $translate): static
   {
      if (is_string($translate)) {
         if (!in_array($translate, [
            TranslateEnum::YES->value,
            TranslateEnum::NO->value,
         ], true)) {
            throw new \InvalidArgumentException('Invalid value for translate attribute');
         }
         $translate = TranslateEnum::from($translate);
      }
      if (is_bool($translate)) {
         $translate = $translate ? TranslateEnum::YES : TranslateEnum::NO;
      }
      $this->translate = $translate;
      $this->delegated->setAttribute('translate', $translate->value);
      return $this;
   }

   public function getTranslate(): ?TranslateEnum
   {
      return $this->translate;
   }
}
