<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * AriaLiveEnum - Defines how updates to the element should be announced to screen readers.
 *
 * @generated 2026-01-21 21:02:30
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/aria-live/
 * @tutorial an example value can be off
 */

namespace Html\Enum;

enum AriaLiveEnum: string
{
    case OFF = 'off'; // default
    case POLITE = 'polite';
    case ASSERTIVE = 'assertive';

    public static function getQualifiedName(): string
    {
        return 'aria-live';
    }

    public static function getDefault(): self
    {
        return self::OFF;
    }
}
