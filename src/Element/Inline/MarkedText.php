<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * MarkedText - The mark element represents a run of text in one document marked or highlighted for reference or notation purposes, due to the marked passage's relevance or importance in the enclosing context.
 * 
 * @generated 2025-11-01 15:04:49
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/mark
 */
namespace Html\Element\Inline;

use Html\Element\Block\Article;
use Html\Element\Block\Aside;
use Html\Element\Block\Audio;
use Html\Element\Block\Body;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\DeletedText;
use Html\Element\Block\Details;
use Html\Element\Block\Division;
use Html\Element\Block\Embed;
use Html\Element\Block\Footer;
use Html\Element\Block\Form;
use Html\Element\Block\Header;
use Html\Element\Block\InlineFrame;
use Html\Element\Block\InsertedText;
use Html\Element\Block\Main;
use Html\Element\Block\Map;
use Html\Element\Block\ObjectElement;
use Html\Element\Block\Paragraph;
use Html\Element\Block\Picture;
use Html\Element\Block\Section;
use Html\Element\Block\Summary;
use Html\Element\Block\Table;
use Html\Element\Block\Video;
use Html\Element\InlineElement;
use Html\Element\Inline\Anchor;
use Html\Element\Inline\BidirectionalIsolation;
use Html\Element\Inline\BidirectionalOverride;
use Html\Element\Inline\Button;
use Html\Element\Inline\Image;
use Html\Element\Inline\Input;
use Html\Element\Inline\Ruby;
use Html\Element\Inline\RubyParenthesis;
use Html\Element\Inline\RubyText;
use Html\Element\Inline\Select;
use Html\Element\Inline\Span;
use Html\Element\Inline\Textarea;
use Html\Element\Void\Area;
use Html\Element\Void\BreakElement;
use Html\Element\Void\Parameter;
use Html\Element\Void\Source;
use Html\Element\Void\Track;
use Html\Element\Void\WordBreakOpportunity;
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

#[Element('mark')]
class MarkedText extends InlineElement
{
    use GlobalAttribute\AccesskeyTrait;
    use GlobalAttribute\AutocapitalizeTrait;
    use GlobalAttribute\AutofocusTrait;
    use GlobalAttribute\ClassTrait;
    use GlobalAttribute\ContenteditableTrait;
    use GlobalAttribute\DataTrait;
    use GlobalAttribute\DirTrait;
    use GlobalAttribute\DraggableTrait;
    use GlobalAttribute\HiddenTrait;
    use GlobalAttribute\IdTrait;
    use GlobalAttribute\InputmodeTrait;
    use GlobalAttribute\LangTrait;
    use GlobalAttribute\SpellcheckTrait;
    use GlobalAttribute\StyleTrait;
    use GlobalAttribute\TabindexTrait;
    use GlobalAttribute\TitleTrait;
    use GlobalAttribute\TranslateTrait;
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'mark';

    /**
     * If an element is self closing
     */
    public const bool SELF_CLOSING = false;

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
        Body::class,
        DefinitionDescription::class,
        Division::class,
        Footer::class,
        Header::class,
        Main::class,
        Paragraph::class,
        Section::class,
    ];

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
