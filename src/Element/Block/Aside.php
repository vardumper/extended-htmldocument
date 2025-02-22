<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Aside - The aside element represents a section of a page that consists of content that is tangentially related to the content around the aside element, and which could be considered separate from that content.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/aside
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

class Aside extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'aside';

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
