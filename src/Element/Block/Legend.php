<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Legend - The legend element represents a caption for the content of its parent fieldset.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/legend
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

class Legend extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'legend';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = true;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [Fieldset::class];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * Specifies the default value of the <textarea> element.
     */
    public ?string $text;
}
