<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * RubyParenthesis - The rp element is used to provide fallback parentheses for browsers non-supporting ruby annotations. It can be used in complex ruby markup to provide parentheses around the rt element for browsers that do not support ruby elements.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/rp
 */
namespace Html\Element\Inline;

use Html\Model\InlineElement;

class RubyParenthesis extends InlineElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'rp';

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

}
