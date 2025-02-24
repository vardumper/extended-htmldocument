<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * DefinitionTerm - The dt element represents the term, or name, part of a term-description group in a description list (dl element).
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dt
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\DefinitionList;

class DefinitionTerm extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'dt';

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
        DefinitionList::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
    ];


}
