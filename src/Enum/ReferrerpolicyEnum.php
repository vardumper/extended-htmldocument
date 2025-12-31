<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * ReferrerpolicyEnum - Specifies the referrer policy for fetches initiated by the element.
 * 
 * @generated 2025-12-31 00:08:48
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/referrerpolicy/
 */

namespace Html\Enum;

enum ReferrerpolicyEnum: string {
    case NO_REFERRER = 'no-referrer';
    case NO_REFERRER_WHEN_DOWNGRADE = 'no-referrer-when-downgrade';
    case ORIGIN = 'origin';
    case ORIGIN_WHEN_CROSS_ORIGIN = 'origin-when-cross-origin';
    case SAME_ORIGIN = 'same-origin';
    case STRICT_ORIGIN = 'strict-origin';
    case STRICT_ORIGIN_WHEN_CROSS_ORIGIN = 'strict-origin-when-cross-origin';
    case UNSAFE_URL = 'unsafe-url';

    public static function getQualifiedName(): string
    {
        return 'referrerpolicy';
    }
}
