<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * CrossoriginEnum - Specifies how the element handles cross-origin requests.
 * 
 * @generated 2025-12-30 13:44:50
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/crossorigin/
 */

namespace Html\Enum;

enum CrossoriginEnum: string {
    case ANONYMOUS = 'anonymous';
    case USE_CREDENTIALS = 'use-credentials';

    public static function getQualifiedName(): string
    {
        return 'crossorigin';
    }
}
