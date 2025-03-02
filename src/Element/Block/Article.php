<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Article - The article element represents a self-contained composition in a document, page, application, or site, which is intended to be independently distributable or reusable.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/article
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Article;
use Html\Element\Block\Aside;
use Html\Element\Block\Audio;
use Html\Element\Block\Blockquote;
use Html\Element\Block\Body;
use Html\Element\Block\DefinitionList;
use Html\Element\Block\DeletedText;
use Html\Element\Block\Division;
use Html\Element\Block\Embed;
use Html\Element\Block\Figure;
use Html\Element\Block\Form;
use Html\Element\Block\Heading1;
use Html\Element\Block\Heading2;
use Html\Element\Block\Heading3;
use Html\Element\Block\Heading4;
use Html\Element\Block\Heading5;
use Html\Element\Block\Heading6;
use Html\Element\Block\InlineFrame;
use Html\Element\Block\InsertedText;
use Html\Element\Block\Main;
use Html\Element\Block\Map;
use Html\Element\Block\Navigation;
use Html\Element\Block\ObjectElement;
use Html\Element\Block\OrderedList;
use Html\Element\Block\Paragraph;
use Html\Element\Block\Picture;
use Html\Element\Block\PreformattedText;
use Html\Element\Block\Section;
use Html\Element\Block\Table;
use Html\Element\Block\UnorderedList;
use Html\Element\Block\Video;
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
use Html\Element\Void\Area;
use Html\Element\Void\BreakElement;
use Html\Element\Void\WordBreakOpportunity;

class Article extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'article';

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
        Division::class,
        Main::class,
        Navigation::class,
        Paragraph::class,
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
        Article::class,
        Audio::class,
        Bold::class,
        BidirectionalIsolation::class,
        BidirectionalOverride::class,
        BreakElement::class,
        Citation::class,
        Code::class,
        Data::class,
        DeletedText::class,
        Definition::class,
        Division::class,
        DefinitionList::class,
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
        KeyboardInput::class,
        Map::class,
        MarkedText::class,
        ObjectElement::class,
        OrderedList::class,
        Paragraph::class,
        Picture::class,
        PreformattedText::class,
        Quotation::class,
        Ruby::class,
        Strikethrough::class,
        SampleOutput::class,
        Small::class,
        Span::class,
        Strong::class,
        Subscript::class,
        Superscript::class,
        Table::class,
        Time::class,
        Underline::class,
        UnorderedList::class,
        Variable::class,
        Video::class,
        WordBreakOpportunity::class,
    ];




}
