<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Fieldset - The fieldset element represents a set of form controls optionally grouped under a common name.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/fieldset
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

final class Fieldset extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'fieldset';

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
