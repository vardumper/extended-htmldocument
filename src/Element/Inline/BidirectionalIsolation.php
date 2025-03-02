<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * BidirectionalIsolation - The bdi element represents a span of text that is to be isolated from its surroundings for the purposes of bidirectional text formatting. (Bidirectional-isolate)
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/bdi
 */
namespace Html\Element\Inline;

use Html\Element\InlineElement;

class BidirectionalIsolation extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'bdi';

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
