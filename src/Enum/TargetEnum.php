<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * TargetEnum - Specifies where to open the linked document.
 *
 * @subpackage Html\Enum
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/target/
 * @tutorial an example value can be _self
 */

namespace Html\Enum;

enum TargetEnum: string
{
    public const _BLANK = '_blank';

    public const _PARENT = '_parent';

    public const _SELF = '_self';

    public const _TOP = '_top';

    public const FRAMENAME = 'framename';

    public function getQualifiedName(): string
    {
        return 'target';
    }
}
