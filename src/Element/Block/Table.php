<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Table - The table element represents tabular data — that is, information presented in a two-dimensional table comprised of rows and columns of cells containing data.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/table
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Caption;
use Html\Element\Block\ColumnGroup;
use Html\Element\Block\TableBody;
use Html\Element\Block\TableFoot;
use Html\Element\Block\TableHead;
use Html\Element\Block\TableRow;

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
