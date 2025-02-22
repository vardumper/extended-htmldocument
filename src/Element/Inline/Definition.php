<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Definition - The dfn element represents the defining instance of a term.
 *
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dfn
 */

namespace Html\Element\Inline;

use Html\Model\InlineElement;

final class Definition extends InlineElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'dfn';

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
