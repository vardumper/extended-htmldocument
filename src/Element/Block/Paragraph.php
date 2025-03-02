<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Paragraph - The p element represents a paragraph.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/p
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Article;
use Html\Element\Block\Aside;
use Html\Element\Block\Audio;
use Html\Element\Block\Blockquote;
use Html\Element\Block\Body;
use Html\Element\Block\Canvas;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\DefinitionList;
use Html\Element\Block\DeletedText;
use Html\Element\Block\Details;
use Html\Element\Block\Dialog;
use Html\Element\Block\Division;
use Html\Element\Block\Embed;
use Html\Element\Block\Fieldset;
use Html\Element\Block\Figure;
use Html\Element\Block\Footer;
use Html\Element\Block\Form;
use Html\Element\Block\Header;
use Html\Element\Block\Heading1;
use Html\Element\Block\Heading2;
use Html\Element\Block\Heading3;
use Html\Element\Block\Heading4;
use Html\Element\Block\Heading5;
use Html\Element\Block\Heading6;
use Html\Element\Block\HorizontalRule;
use Html\Element\Block\InlineFrame;
use Html\Element\Block\InsertedText;
use Html\Element\Block\ListItem;
use Html\Element\Block\Main;
use Html\Element\Block\Map;
use Html\Element\Block\Navigation;
use Html\Element\Block\ObjectElement;
use Html\Element\Block\OrderedList;
use Html\Element\Block\Paragraph;
use Html\Element\Block\PreformattedText;
use Html\Element\Block\Section;
use Html\Element\Block\Summary;
use Html\Element\Block\Table;
use Html\Element\Block\Template;
use Html\Element\Block\UnorderedList;
use Html\Element\Block\Video;
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
use Html\Element\Inline\Label;
use Html\Element\Inline\MarkedText;
use Html\Element\Inline\Meter;
use Html\Element\Inline\Output;
use Html\Element\Inline\Progress;
use Html\Element\Inline\Quotation;
use Html\Element\Inline\Ruby;
use Html\Element\Inline\SampleOutput;
use Html\Element\Inline\Select;
use Html\Element\Inline\Slot;
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
use Html\Element\Void\WordBreakOpportunity;

class Paragraph extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'p';

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
        Aside::class,
        Blockquote::class,
        Body::class,
        DefinitionDescription::class,
        Details::class,
        Dialog::class,
        Division::class,
        Footer::class,
        Header::class,
        ListItem::class,
        Main::class,
        Paragraph::class,
        Section::class,
        Slot::class,
        Template::class,
    ];

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
        Blockquote::class,
        BreakElement::class,
        Button::class,
        Canvas::class,
        Citation::class,
        Code::class,
        Data::class,
        DeletedText::class,
        Details::class,
        Definition::class,
        Division::class,
        DefinitionList::class,
        Emphasis::class,
        Embed::class,
        Fieldset::class,
        Figure::class,
        Footer::class,
        Form::class,
        Heading1::class,
        Heading2::class,
        Heading3::class,
        Heading4::class,
        Heading5::class,
        Heading6::class,
        Header::class,
        HorizontalRule::class,
        Italic::class,
        InlineFrame::class,
        Image::class,
        Input::class,
        InsertedText::class,
        KeyboardInput::class,
        Label::class,
        Map::class,
        MarkedText::class,
        Meter::class,
        Navigation::class,
        ObjectElement::class,
        OrderedList::class,
        Output::class,
        Paragraph::class,
        PreformattedText::class,
        Progress::class,
        Quotation::class,
        Ruby::class,
        Strikethrough::class,
        SampleOutput::class,
        Section::class,
        Select::class,
        Small::class,
        Span::class,
        Strong::class,
        Subscript::class,
        Summary::class,
        Superscript::class,
        Table::class,
        Textarea::class,
        Time::class,
        Underline::class,
        UnorderedList::class,
        Variable::class,
        Video::class,
        WordBreakOpportunity::class,
    ];




}
