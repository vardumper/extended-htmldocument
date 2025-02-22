<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * EnctypeEnum -
 *
 * @subpackage Html\Enum
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/enctype/
 */

namespace Html\Enum;

enum EnctypeEnum: string
{
    public const APPLICATION_X_WWW_FORM_URLENCODED = 'application/x-www-form-urlencoded';

    public const MULTIPART_FORM_DATA = 'multipart/form-data';

    public const TEXT_PLAIN = 'text/plain';

    public function getQualifiedName(): string
    {
        return 'enctype';
    }
}
