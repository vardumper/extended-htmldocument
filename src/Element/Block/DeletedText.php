<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * DeletedText - The del element represents a deletion from the document.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/del
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;

class DeletedText extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'del';

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
    ];


    /** Specifies the URL of the cited work or the name of the cited creative work. */
    public ?string $cite;

    /** Specifies the date and time of the change in the format 'YYYY-MM-DDThh:mm:ss' or a subset of it. */
    public ?string $datetime;

}
