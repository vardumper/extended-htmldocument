<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Summary - The summary element represents a summary, caption, or legend for the rest of the contents of the summary element's parent details element, if any.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/summary
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

class Summary extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'summary';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = true;

    /**
     * The allowed parent element classes. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [Details::class];
}
