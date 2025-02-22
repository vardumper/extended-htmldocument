<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Code - The code element represents a fragment of computer code. This could be an XML element name, a filename, a computer program, or any other string that a computer would recognize.
 *
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/code
 */

namespace Html\Element\Inline;

use Html\Model\InlineElement;

class Code extends InlineElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'code';

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
}
