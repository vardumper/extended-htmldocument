<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Time - The time element represents a specific period in time. It may include the datetime attribute to translate dates into machine-readable format, allowing for better search engine results or custom features such as reminders.
 *
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/time
 */

namespace Html\Element\Inline;

use Html\Element\InlineElement;

class Time extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'time';

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
     * Specifies the date and time of the change in the format 'YYYY-MM-DDThh:mm:ss' or a subset of it.
     */
    public ?string $datetime;
}
