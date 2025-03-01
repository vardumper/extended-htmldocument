<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * RubyText - The rt element marks the ruby text component of a ruby annotation, which is used to provide pronunciation, translation, or transliteration information for East Asian typography. The rt element must be a child of a ruby element.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/rt
 */
namespace Html\Element\Inline;

use Html\Element\InlineElement;

class RubyText extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'rt';

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


}
