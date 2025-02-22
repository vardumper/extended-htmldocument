<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Strong - The strong element represents strong importance, seriousness, or urgency for its contents.
 *
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/strong
 */

namespace Html\Element\Inline;

use Html\Model\InlineElement;

class Strong extends InlineElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'strong';

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
