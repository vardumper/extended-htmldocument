<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * TableHead - The thead element groups the header content in a table.
 * 
 * @generated 2025-10-26 23:58:50
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/thead
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Table;
use Html\Element\Block\TableRow;
use Html\Mapping\Element;

#[Element('thead')]
class TableHead extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'thead';

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
    public static bool $uniquePerParent = true;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [
        Table::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        TableRow::class,
    ];




}
