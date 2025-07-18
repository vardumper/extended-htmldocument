<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * DefinitionDescription - The dd element represents the description, definition, or value, part of a term-description group in a description list (dl element).
 *
 * @generated 2025-07-12 09:31:57
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dd
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

#[Element('dd')]
class DefinitionDescription extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'dd';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = true;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [
        DefinitionList::class,
        Aside::class,
        self::class,
        Division::class,
        Footer::class,
        Header::class,
        Main::class,
        Section::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        Anchor::class,
        Abbreviation::class,
        Area::class,
        Audio::class,
        Bold::class,
        BidirectionalIsolation::class,
        BidirectionalOverride::class,
        BreakElement::class,
        Citation::class,
        Code::class,
        Data::class,
        self::class,
        DeletedText::class,
        Definition::class,
        Division::class,
        DefinitionList::class,
        DefinitionTerm::class,
        Emphasis::class,
        Embed::class,
        Figure::class,
        Form::class,
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
