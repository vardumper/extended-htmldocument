<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Head - The head element contains meta-information about the HTML document, including its title and links to its scripts and stylesheets.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/head
 */
namespace Html\Element\Void;

use Html\Element\Block\HTML;
use Html\Model\VoidElement;

class Head extends VoidElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'head';

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
     * The allowed parent classes. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    /** Allowed parent elements of Head */
    public static array $childOf = [
        HTML::class,
    ];

}
