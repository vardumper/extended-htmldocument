<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Section - The section element helps in structuring the content of a webpage by grouping related information together.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/section
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

final class Section extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'section';

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
