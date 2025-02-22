<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * HTML - The root element of an HTML document. It represents the top-level of the HTML structure.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/html
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

class HTML extends BlockElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'html';

    /**
     * If an element is unique per HTML document
     * @category HTML element property
     */
    public static bool $unique = true;

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
     * Specifies the address of the document's cache manifest.
     * @category HTML attribute */
    public ?string $manifest;

}
