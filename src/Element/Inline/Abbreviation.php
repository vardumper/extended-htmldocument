<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Abbreviation - The abbr element represents an abbreviation or acronym, optionally with its expansion. The title attribute can be used to provide an expansion of the abbreviation. The attribute, if specified, must contain an expansion of the abbreviation, and nothing else.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/abbr
 */
namespace Html\Element\Inline;

use Html\Element\InlineElement;

class Abbreviation extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'abbr';

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
    public static array $childOf = [
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [
    ];


    /** Specifies additional information about the element, typically displayed as a tooltip. */
    public ?string $title;

}
