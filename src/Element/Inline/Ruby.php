<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Ruby - The ruby element represents a ruby annotation. Ruby annotations are short runs of text presented alongside base text, primarily used for East Asian typography to indicate pronunciation or to provide a short annotation.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ruby
 */
namespace Html\Element\Inline;

use Html\Element\InlineElement;
use Html\Element\Inline\RubyParenthesis;
use Html\Element\Inline\RubyText;

class Ruby extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'ruby';

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
        RubyParenthesis::class,
        RubyText::class,
    ];


}
