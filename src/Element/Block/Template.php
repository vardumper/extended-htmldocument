<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Template - The template element is a mechanism for holding client-side content that is not to be rendered when a page is loaded but may subsequently be instantiated during runtime using JavaScript.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/template
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\DefinitionList;
use Html\Element\Block\Details;
use Html\Element\Block\Division;
use Html\Element\Block\Form;
use Html\Element\Block\Heading1;
use Html\Element\Block\Heading2;
use Html\Element\Block\Heading3;
use Html\Element\Block\Heading4;
use Html\Element\Block\Heading5;
use Html\Element\Block\Heading6;
use Html\Element\Block\InlineFrame;
use Html\Element\Block\ListItem;
use Html\Element\Block\OrderedList;
use Html\Element\Block\Paragraph;
use Html\Element\Block\PreformattedText;
use Html\Element\Block\Summary;
use Html\Element\Block\Table;
use Html\Element\Block\UnorderedList;
use Html\Element\Inline\Anchor;
use Html\Element\Inline\Button;
use Html\Element\Inline\Input;
use Html\Element\Inline\Select;
use Html\Element\Inline\Textarea;

class Template extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'template';

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
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        Division::class,
        DefinitionList::class,
        Form::class,
        Heading1::class,
        Heading2::class,
        Heading3::class,
        Heading4::class,
        Heading5::class,
        Heading6::class,
        Anchor::class,
        Button::class,
        Input::class,
        Select::class,
        Textarea::class,
        Details::class,
        Summary::class,
        InlineFrame::class,
        ListItem::class,
        OrderedList::class,
        Paragraph::class,
        PreformattedText::class,
        Table::class,
        UnorderedList::class,
    ];




}
