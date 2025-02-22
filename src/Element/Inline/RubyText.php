<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * RubyText - The rt element marks the ruby text component of a ruby annotation, which is used to provide pronunciation, translation, or transliteration information for East Asian typography. The rt element must be a child of a ruby element.
 *
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/rt
 */

namespace Html\Element\Inline;

use Html\Model\InlineElement;

final class RubyText extends InlineElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'rt';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = false;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [];
}
