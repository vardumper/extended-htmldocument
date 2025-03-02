<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Table - The table element represents tabular data — that is, information presented in a two-dimensional table comprised of rows and columns of cells containing data.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/table
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Article;
use Html\Element\Block\Aside;
use Html\Element\Block\Body;
use Html\Element\Block\Caption;
use Html\Element\Block\ColumnGroup;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\Details;
use Html\Element\Block\Dialog;
use Html\Element\Block\Division;
use Html\Element\Block\Footer;
use Html\Element\Block\Header;
use Html\Element\Block\Main;
use Html\Element\Block\Paragraph;
use Html\Element\Block\Section;
use Html\Element\Block\TableBody;
use Html\Element\Block\TableFoot;
use Html\Element\Block\TableHead;
use Html\Element\Block\TableRow;
use Html\Element\Block\Template;
use Html\Element\Inline\MarkedText;
use Html\Element\Inline\Slot;

class Table extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'table';

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
        Details::class,
        Dialog::class,
        Division::class,
        Footer::class,
        Header::class,
        Main::class,
        MarkedText::class,
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
        Caption::class,
        ColumnGroup::class,
        TableBody::class,
        TableFoot::class,
        TableHead::class,
        TableRow::class,
    ];




}
