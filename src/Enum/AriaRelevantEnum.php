<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * AriaRelevantEnum - Indicates what content changes should be announced in a live region.
 * 
 * @generated 2025-12-31 00:30:17
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/aria-relevant/
 * @tutorial an example value can be additions text
 */

namespace Html\Enum;

enum AriaRelevantEnum: string {
    case ADDITIONS = 'additions';
    case REMOVALS = 'removals';
    case TEXT = 'text';
    case ALL = 'all';
    case ADDITIONS_TEXT = 'additions text'; // default

    public static function getQualifiedName(): string
    {
        return 'aria-relevant';
    }

    public static function getDefault(): self
    {
        return self::ADDITIONS_TEXT;
    }
}
