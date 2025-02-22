<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Paragraph - The p element represents a paragraph.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/p
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

class Paragraph extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'p';

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
