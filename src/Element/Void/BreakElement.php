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

use Html\Element\VoidElement;
use Html\Enum\ClearEnum;

class BreakElement extends VoidElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'br';

    /**
     * If an element is self closing
     */
    public const bool SELF_CLOSING = true;

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
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * @deprecated
     */
    public ?ClearEnum $clear;
}
