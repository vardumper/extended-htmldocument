<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Heading4 - The h4 element represents a section heading. It has the fourth highest rank among the six levels of section headings.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/h4
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Article;
use Html\Element\Block\Aside;
use Html\Element\Block\Body;
use Html\Element\Block\Dialog;
use Html\Element\Block\Division;
use Html\Element\Block\Footer;
use Html\Element\Block\Header;
use Html\Element\Block\HeadingsGroup;
use Html\Element\Block\Main;
use Html\Element\Block\Section;
use Html\Element\Block\Template;
use Html\Element\Inline\Slot;

class Heading4 extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'h4';

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
        Dialog::class,
        Division::class,
        Footer::class,
        Header::class,
        HeadingsGroup::class,
        Main::class,
        Section::class,
        Slot::class,
        Template::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
    ];




}
