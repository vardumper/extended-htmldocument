<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Span - The span element doesn't mean anything on its own, but can be useful when used together with the global attributes, e.g. class, lang, or dir. It represents its children.
 *
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/span
 */

namespace Html\Element\Inline;

use Html\Model\InlineElement;

final class Span extends InlineElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'span';

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
