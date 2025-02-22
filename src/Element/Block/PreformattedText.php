<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * PreformattedText - The pre element represents preformatted text. Text within this element is typically displayed in a non-proportional font exactly as it is laid out in the file.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/pre
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

final class PreformattedText extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'pre';

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
