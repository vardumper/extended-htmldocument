<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Figure - The figure element represents self-contained content, potentially with an optional caption, which is specified using the (optional) figcaption element.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figure
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

final class Figure extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'figure';

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
