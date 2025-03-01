<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * KindEnum - 
 * 
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/kind/
 */

namespace Html\Enum;

enum KindEnum: string {
    case CAPTIONS = 'captions';
    case CHAPTERS = 'chapters';
    case DESCRIPTIONS = 'descriptions';
    case METADATA = 'metadata';
    case SUBTITLES = 'subtitles';

    public static function getQualifiedName(): string
    {
        return 'kind';
    }
}
