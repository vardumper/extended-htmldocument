<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * MarkedText - The mark element represents a run of text in one document marked or highlighted for reference or notation purposes, due to the marked passage's relevance or importance in the enclosing context.
 *
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/mark
 */

namespace Html\Element\Inline;

use Html\Element\Block\Audio;
use Html\Element\Block\DeletedText;
use Html\Element\Block\Details;
use Html\Element\Block\Embed;
use Html\Element\Block\Form;
use Html\Element\Block\InlineFrame;
use Html\Element\Block\InsertedText;
use Html\Element\Block\Map;
use Html\Element\Block\ObjectElement;
use Html\Element\Block\Picture;
use Html\Element\Block\Summary;
use Html\Element\Block\Table;
use Html\Element\Block\Video;
use Html\Element\InlineElement;
use Html\Element\Void\Area;
use Html\Element\Void\BreakElement;
use Html\Element\Void\Parameter;
use Html\Element\Void\Source;
use Html\Element\Void\Track;
use Html\Element\Void\WordBreakOpportunity;

class MarkedText extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'mark';

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
    public static array $parentOf = [
        Area::class,
        Audio::class,
        BidirectionalIsolation::class,
        BidirectionalOverride::class,
        BreakElement::class,
        DeletedText::class,
        Embed::class,
        Form::class,
        InlineFrame::class,
        Image::class,
        InsertedText::class,
        Anchor::class,
        Button::class,
        Input::class,
        Select::class,
        Textarea::class,
        Details::class,
        Summary::class,
        Map::class,
        ObjectElement::class,
        Parameter::class,
        Picture::class,
        RubyParenthesis::class,
        RubyText::class,
        Ruby::class,
        Source::class,
        Span::class,
        Table::class,
        Track::class,
        Video::class,
        WordBreakOpportunity::class,
    ];
}
