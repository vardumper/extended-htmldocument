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

use Html\Model\InlineElement;

class Abbreviation extends InlineElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'abbr';

    /**
     * If an element is unique per HTML document
     * @category HTML element property
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     * @category HTML element property
     */
    public static bool $uniquePerParent = false;

    /**
     * The allowed parent classes. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $childOf = [];

    /** 
     * Specifies additional information about the element, typically displayed as a tooltip.
     * @category HTML attribute */
    public ?string $title;

}
