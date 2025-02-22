<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * MarkedText - The mark element represents a run of text in one document marked or highlighted for reference or notation purposes, due to the marked passage's relevance or importance in the enclosing context.
 *
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/mark
 */

namespace Html\Element\Inline;

use Html\Model\InlineElement;

final class MarkedText extends InlineElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'mark';

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
