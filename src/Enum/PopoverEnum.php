<?php

/**
 * This file is not auto-generated. (since its a global attribute)
 *
 * PopoverEnum - Turns an element into a popover that can be triggered via JavaScript.
 *
 * @generated 2025-11-02 15:57:23
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/popover/
 * @tutorial an example value can be
 */

namespace Html\Enum;

enum PopoverEnum: string
{
   case AUTO = 'auto'; // default
   case HINT = 'hint';
   case MANUAL = 'manual';

   public static function getQualifiedName(): string
   {
      return 'popover';
   }

   public static function getDefault(): self
   {
      return self::AUTO;
   }
}
