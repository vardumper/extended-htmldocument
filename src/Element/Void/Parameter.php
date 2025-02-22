<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Parameter - The param element defines parameters for an object element.
 *
 * @subpackage Html\Element\Void
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/param
 */

namespace Html\Element\Void;

use Html\Model\VoidElement;

final class Parameter extends VoidElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'param';

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

    /**
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     */
    public ?string $name;

    /**
     * Specifies the value associated with the element. The meaning and usage may vary depending on the element type.
     */
    public ?string $value;
}
