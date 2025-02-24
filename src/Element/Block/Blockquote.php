<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Blockquote - The blockquote element represents a section that is quoted from another source. Content inside a blockquote must be quoted from another source, whose address, if it has one, may be cited in the cite attribute.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/blockquote
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Paragraph;

class Blockquote extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'blockquote';

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
        Paragraph::class,
    ];


    /** Specifies the URL of the cited work or the name of the cited creative work. */
    public ?string $cite;

}
