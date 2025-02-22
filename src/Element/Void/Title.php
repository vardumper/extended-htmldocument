<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Title - The title element defines the title of the document, shown in a browser's title bar or a page's tab. It is only text, not meant to be displayed.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/title
 */
namespace Html\Element\Void;

use Html\Element\Void\Head;
use Html\Model\VoidElement;

class Title extends VoidElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'title';

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
    /** Allowed parent elements of Title */
    public static array $childOf = [
        Head::class,
    ];

}
