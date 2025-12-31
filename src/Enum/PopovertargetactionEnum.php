<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * PopovertargetactionEnum - Specifies the action to perform on the popover element controlled by popovertarget. "show" displays a hidden popover, "hide" hides a visible popover, "toggle" (default) switches between states. Part of the Popover API. Element-specific to button and input elements.
 * 
 * @generated 2025-12-31 00:30:17
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/popovertargetaction/
 * @tutorial an example value can be toggle
 */

namespace Html\Enum;

enum PopovertargetactionEnum: string {
    case SHOW = 'show';
    case HIDE = 'hide';
    case TOGGLE = 'toggle'; // default

    public static function getQualifiedName(): string
    {
        return 'popovertargetaction';
    }

    public static function getDefault(): self
    {
        return self::TOGGLE;
    }
}
