<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * ReferrerpolicyEnum - Specifies the referrer policy for fetches initiated by the element.
 * 
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/referrerpolicy/
 */

namespace Html\Enum;

enum ReferrerpolicyEnum: string {
    const NO_REFERRER = 'no-referrer';
    const NO_REFERRER_WHEN_DOWNGRADE = 'no-referrer-when-downgrade';
    const ORIGIN = 'origin';
    const ORIGIN_WHEN_CROSS_ORIGIN = 'origin-when-cross-origin';
    const SAME_ORIGIN = 'same-origin';
    const STRICT_ORIGIN = 'strict-origin';
    const STRICT_ORIGIN_WHEN_CROSS_ORIGIN = 'strict-origin-when-cross-origin';
    const UNSAFE_URL = 'unsafe-url';

    public static function getQualifiedName(): string
    {
        return 'referrerpolicy';
    }
}
