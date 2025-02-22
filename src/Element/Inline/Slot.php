<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Slot - The slot element is a placeholder inside a web component that you can fill with your own markup, which lets you create separate DOM trees and present them together.
 *
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/slot
 */

namespace Html\Element\Inline;

use Html\Model\InlineElement;

class Slot extends InlineElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'slot';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = false;

    /**
     * The allowed parent classes. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [];

    /**
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     */
    public ?string $name;
}
