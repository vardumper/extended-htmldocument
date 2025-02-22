<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * ReferrerpolicyEnum - Specifies the referrer policy for fetches initiated by the element.
 *
 * @subpackage Html\Enum
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/referrerpolicy/
 */

namespace Html\Enum;

enum ReferrerpolicyEnum: string
{
    public const NO_REFERRER = 'no-referrer';

    public const NO_REFERRER_WHEN_DOWNGRADE = 'no-referrer-when-downgrade';

    public const ORIGIN = 'origin';

    public const ORIGIN_WHEN_CROSS_ORIGIN = 'origin-when-cross-origin';

    public const SAME_ORIGIN = 'same-origin';

    public const STRICT_ORIGIN = 'strict-origin';

    public const STRICT_ORIGIN_WHEN_CROSS_ORIGIN = 'strict-origin-when-cross-origin';

    public const UNSAFE_URL = 'unsafe-url';

    public function getQualifiedName(): string
    {
        return 'referrerpolicy';
    }
}
