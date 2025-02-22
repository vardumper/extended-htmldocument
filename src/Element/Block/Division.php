<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Division - The div element has no special meaning at all. It represents its children. It can be used with the class, lang, and title attributes to mark up semantics common to a group of consecutive elements.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/div
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

class Division extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'div';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = false;

    /**
     * The allowed parent element classes. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [];
}
