<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Details - The details element represents a disclosure widget from which the user can obtain additional information or controls.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/details
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

class Details extends BlockElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'details';

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
     * The allowed parent element classes. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $childOf = [];

    /** 
     * When present, it specifies that the details should be visible (open) to the user.
     * @category HTML attribute */
    public ?bool $open;

}
