<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Heading1 - The h1 element represents a section heading. It has the highest rank among the six levels of section headings.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/h1
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

final class Heading1 extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'h1';

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
