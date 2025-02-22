<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Data - The data element represents its contents, along with a machine-readable form of those contents in the value attribute.
 *
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/data
 */

namespace Html\Element\Inline;

use Html\Model\InlineElement;

class Data extends InlineElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'data';

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

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * Specifies the value associated with the element. The meaning and usage may vary depending on the element type.
     */
    public ?string $value;
}
