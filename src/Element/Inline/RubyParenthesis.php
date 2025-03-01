<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * RubyParenthesis - The rp element is used to provide fallback parentheses for browsers non-supporting ruby annotations. It can be used in complex ruby markup to provide parentheses around the rt element for browsers that do not support ruby elements.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/rp
 */
namespace Html\Element\Inline;

use Html\Element\InlineElement;

class RubyParenthesis extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'rp';

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
