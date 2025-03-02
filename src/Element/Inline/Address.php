<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Address - The address element represents the contact information for its nearest article or body ancestor. If that is the body element, then the contact information applies to the document as a whole.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/address
 */
namespace Html\Element\Inline;

use Html\Element\Block\Article;
use Html\Element\Block\Body;
use Html\Element\InlineElement;
use Html\Element\Inline\Abbreviation;
use Html\Element\Inline\Anchor;
use Html\Element\Inline\BidirectionalIsolation;
use Html\Element\Inline\BidirectionalOverride;
use Html\Element\Inline\Bold;
use Html\Element\Inline\Citation;
use Html\Element\Inline\Code;
use Html\Element\Inline\Data;
use Html\Element\Inline\Definition;
use Html\Element\Inline\Emphasis;
use Html\Element\Inline\Image;
use Html\Element\Inline\Italic;
use Html\Element\Inline\KeyboardInput;
use Html\Element\Inline\MarkedText;
use Html\Element\Inline\Quotation;
use Html\Element\Inline\Ruby;
use Html\Element\Inline\RubyParenthesis;
use Html\Element\Inline\RubyText;
use Html\Element\Inline\SampleOutput;
use Html\Element\Inline\Small;
use Html\Element\Inline\Span;
use Html\Element\Inline\Strikethrough;
use Html\Element\Inline\Strong;
use Html\Element\Inline\Subscript;
use Html\Element\Inline\Superscript;
use Html\Element\Inline\Time;
use Html\Element\Inline\Underline;
use Html\Element\Inline\Variable;
use Html\Element\Void\BreakElement;
use Html\Element\Void\WordBreakOpportunity;

class Address extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'address';

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
        Article::class,
        Body::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [
        Anchor::class,
        Abbreviation::class,
        Bold::class,
        BidirectionalIsolation::class,
        BidirectionalOverride::class,
        BreakElement::class,
        Citation::class,
        Code::class,
        Data::class,
        Definition::class,
        Emphasis::class,
        Italic::class,
        Image::class,
        KeyboardInput::class,
        MarkedText::class,
        Quotation::class,
        RubyParenthesis::class,
        RubyText::class,
        Ruby::class,
        Strikethrough::class,
        SampleOutput::class,
        Small::class,
        Span::class,
        Strong::class,
        Subscript::class,
        Superscript::class,
        Time::class,
        Underline::class,
        Variable::class,
        WordBreakOpportunity::class,
    ];



}
