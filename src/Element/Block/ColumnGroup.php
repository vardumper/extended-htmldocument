<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * ColumnGroup - The colgroup element represents a group of one or more columns in the table that is its parent, if it has a parent and that is a table element.
 * 
 * @generated 2025-03-08 16:37:58
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/colgroup
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Table;
use Html\Element\Void\Column;

class ColumnGroup extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'colgroup';

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
        Table::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        Column::class,
    ];




}
