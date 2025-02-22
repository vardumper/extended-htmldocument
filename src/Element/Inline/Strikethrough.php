<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Strikethrough - The s element represents contents that are no longer accurate or no longer relevant.
 *
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/s
 */

namespace Html\Element\Inline;

use Html\Model\InlineElement;

final class Strikethrough extends InlineElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 's';

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
