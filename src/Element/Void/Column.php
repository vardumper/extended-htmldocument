<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Column - The col element represents a column in a table.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/col
 */
namespace Html\Element\Void;

use Html\Element\Block\ColumnGroup;
use Html\Model\VoidElement;

class Column extends VoidElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'col';

    /**
     * If an element is unique per HTML document
     * @category HTML element property
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     * @category HTML element property
     */
    public static bool $uniquePerParent = false;

    /**
     * The allowed parent classes. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    /** Allowed parent elements of Column */
    public static array $childOf = [
        ColumnGroup::class,
    ];

    /** 
     * Specifies the number of columns the <col> element should span in a table.
     * @category HTML attribute */
    public ?int $span;

    /** 
     * Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     * @category HTML attribute */
    public ?string $width;

}
