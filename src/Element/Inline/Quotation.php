<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Quotation - The q element represents some phrasing content quoted from another source.
 *
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/q
 */

namespace Html\Element\Inline;

use Html\Model\InlineElement;

class Quotation extends InlineElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'q';

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
     * Specifies the URL of the cited work or the name of the cited creative work.
     */
    public ?string $cite;
}
