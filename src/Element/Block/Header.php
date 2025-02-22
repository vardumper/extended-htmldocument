<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Header - The header element represents a container for introductory content or a set of navigational links. It typically contains the section's heading (an h1–h6 element or an hgroup element), but can also contain other content such as a table of contents, a search form, or any relevant logos.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/header
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

class Header extends BlockElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'header';

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

}
