<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Table - The table element represents tabular data — that is, information presented in a two-dimensional table comprised of rows and columns of cells containing data.
 *
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/table
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
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
