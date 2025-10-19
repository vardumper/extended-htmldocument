<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Main - The main element represents the dominant content of the body of a document. The main content area consists of content that is directly related to or expands upon the central topic of a document, or the central functionality of an application.
 *
 * @generated 2025-10-19 20:20:48
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/main
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\Abbreviation;
use Html\Element\Inline\Anchor;
use Html\Element\Inline\BidirectionalIsolation;
use Html\Element\Inline\BidirectionalOverride;
use Html\Element\Inline\Bold;
use Html\Element\Inline\Button;
use Html\Element\Inline\Citation;
use Html\Element\Inline\Code;
use Html\Element\Inline\Data;
use Html\Element\Inline\Definition;
use Html\Element\Inline\Emphasis;
use Html\Element\Inline\Image;
use Html\Element\Inline\Input;
use Html\Element\Inline\Italic;
use Html\Element\Inline\KeyboardInput;
use Html\Element\Inline\MarkedText;
use Html\Element\Inline\Quotation;
use Html\Element\Inline\Ruby;
use Html\Element\Inline\RubyParenthesis;
use Html\Element\Inline\RubyText;
use Html\Element\Inline\SampleOutput;
use Html\Element\Inline\Select;
use Html\Element\Inline\Small;
use Html\Element\Inline\Span;
use Html\Element\Inline\Strikethrough;
use Html\Element\Inline\Strong;
use Html\Element\Inline\Subscript;
use Html\Element\Inline\Superscript;
use Html\Element\Inline\Textarea;
use Html\Element\Inline\Time;
use Html\Element\Inline\Underline;
use Html\Element\Inline\Variable;
use Html\Element\Void\Area;
use Html\Element\Void\BreakElement;
use Html\Element\Void\Parameter;
use Html\Element\Void\Source;
use Html\Element\Void\Track;
use Html\Element\Void\WordBreakOpportunity;
use Html\Mapping\Element;

#[Element('main')]
class Main extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'main';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = true;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = true;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [Body::class];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        Anchor::class,
        Abbreviation::class,
        Area::class,
        Article::class,
        Aside::class,
        Audio::class,
        Bold::class,
        BidirectionalIsolation::class,
        BidirectionalOverride::class,
        BreakElement::class,
        Citation::class,
        Code::class,
        Data::class,
        DefinitionDescription::class,
        DeletedText::class,
        Definition::class,
        Division::class,
        DefinitionList::class,
        DefinitionTerm::class,
        Emphasis::class,
        Embed::class,
        Figure::class,
        Form::class,
        Heading1::class,
        Heading2::class,
        Heading3::class,
        Heading4::class,
        Heading5::class,
        Heading6::class,
        Italic::class,
        InlineFrame::class,
        Image::class,
        InsertedText::class,
        Button::class,
        Input::class,
        Select::class,
        Textarea::class,
        Details::class,
        Summary::class,
        KeyboardInput::class,
        ListItem::class,
        Map::class,
        MarkedText::class,
        ObjectElement::class,
        OrderedList::class,
        Paragraph::class,
        Parameter::class,
        Picture::class,
        PreformattedText::class,
        Quotation::class,
        RubyParenthesis::class,
        RubyText::class,
        Ruby::class,
        Strikethrough::class,
        SampleOutput::class,
        Section::class,
        Small::class,
        Source::class,
        Span::class,
        Strong::class,
        Subscript::class,
        Superscript::class,
        Table::class,
        Time::class,
        Track::class,
        Underline::class,
        UnorderedList::class,
        Variable::class,
        Video::class,
        WordBreakOpportunity::class,
    ];
}
