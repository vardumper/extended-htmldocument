<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * BreakElement - The br element represents a line break.
 *
 * @subpackage Html\Element\Void
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/br
 */

namespace Html\Element\Void;

use Html\Enum\ClearEnum;
use Html\Model\VoidElement;

class BreakElement extends VoidElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'br';

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

    public ?ClearEnum $clear;
}
