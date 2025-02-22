<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * ValignEnum - Specifies the vertical alignment of each row cell. The possible enumerated values are baseline, bottom, middle, and top. Use the vertical-align CSS property instead, as this attribute is deprecated.
 *
 * @subpackage Html\Enum
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/valign/
 */

namespace Html\Enum;

enum ValignEnum: string
{
    public const BASELINE = 'baseline';

    public const BOTTOM = 'bottom';

    public const MIDDLE = 'middle';

    public const TOP = 'top';

    public function getQualifiedName(): string
    {
        return 'valign';
    }
}
