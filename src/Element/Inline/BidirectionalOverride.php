<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * BidirectionalOverride - The bdo element represents explicit text directionality formatting control for its children. It allows authors to override the Unicode bidirectional algorithm by explicitly specifying a direction override.
 *
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/bdo
 */

namespace Html\Element\Inline;

use Html\Model\InlineElement;

class BidirectionalOverride extends InlineElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'bdo';

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
