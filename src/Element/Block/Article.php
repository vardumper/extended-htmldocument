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
use Html\Element\Block\Blockquote;
use Html\Element\Block\Body;
use Html\Element\Block\DefinitionList;
use Html\Element\Block\Division;
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
use Html\Element\Block\Main;
use Html\Element\Block\Navigation;
use Html\Element\Block\OrderedList;
use Html\Element\Block\Paragraph;
use Html\Element\Block\PreformattedText;
use Html\Element\Block\Section;
use Html\Element\Block\Table;
use Html\Element\Block\UnorderedList;
use Html\Element\Inline\Address;

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
        Section::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        Header::class,
        Footer::class,
        Address::class,
        Paragraph::class,
        HorizontalRule::class,
        PreformattedText::class,
        Blockquote::class,
        OrderedList::class,
        UnorderedList::class,
        DefinitionList::class,
        Figure::class,
        Table::class,
        Form::class,
        Fieldset::class,
        Division::class,
        Main::class,
        Section::class,
        Navigation::class,
        Article::class,
        Aside::class,
        Heading1::class,
        Heading2::class,
        Heading3::class,
        Heading4::class,
        Heading5::class,
        Heading6::class,
    ];




}
