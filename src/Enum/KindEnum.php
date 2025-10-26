<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * KindEnum -
 *
 * @generated 2025-10-26 20:40:54
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/kind/
 * @tutorial an example value can be subtitles
 */

namespace Html\Enum;

enum KindEnum: string
{
    case CAPTIONS = 'captions';
    case CHAPTERS = 'chapters';
    case DESCRIPTIONS = 'descriptions';
    case METADATA = 'metadata';
    case SUBTITLES = 'subtitles'; // default

    public static function getQualifiedName(): string
    {
        return 'kind';
    }

    public static function getDefault(): self
    {
        return self::SUBTITLES;
    }
}
