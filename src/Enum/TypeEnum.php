<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * TypeEnum - Specifies the media type of the linked resource.
 *
 * @subpackage Html\Enum
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/type/
 */

namespace Html\Enum;

enum TypeEnum: string
{
    public const TEXT = 'text';

    public const PASSWORD = 'password';

    public const CHECKBOX = 'checkbox';

    public const RADIO = 'radio';

    public const BUTTON = 'button';

    public const FILE = 'file';

    public const HIDDEN = 'hidden';

    public const IMAGE = 'image';

    public const EMAIL = 'email';

    public const URL = 'url';

    public const NUMBER = 'number';

    public const RANGE = 'range';

    public const DATE = 'date';

    public const TIME = 'time';

    public const SUBMIT = 'submit';

    public const RESET = 'reset';

    public function getQualifiedName(): string
    {
        return 'type';
    }
}
