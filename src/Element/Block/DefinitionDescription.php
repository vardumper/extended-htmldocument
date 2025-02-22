<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * DefinitionDescription - The dd element represents the description, definition, or value, part of a term-description group in a description list (dl element).
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dd
 */
namespace Html\Element\Block;

use Html\Element\Block\DefinitionList;
use Html\Model\BlockElement;

class DefinitionDescription extends BlockElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'dd';

    /**
     * If an element is unique per HTML document
     * @category HTML element property
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     * @category HTML element property
     */
    public static bool $uniquePerParent = true;

    /**
     * The allowed parent element classes. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $childOf = [
        DefinitionList::class,
    ];

}
