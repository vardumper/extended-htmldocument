<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Ruby - The ruby element represents a ruby annotation. Ruby annotations are short runs of text presented alongside base text, primarily used for East Asian typography to indicate pronunciation or to provide a short annotation.
 *
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ruby
 */

namespace Html\Element\Inline;

use Html\Model\InlineElement;

class Ruby extends InlineElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'ruby';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = false;

    /**
     * The allowed parent classes. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [];
}
