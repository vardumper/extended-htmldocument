<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Address - The address element represents the contact information for its nearest article or body ancestor. If that is the body element, then the contact information applies to the document as a whole.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/address
 */
namespace Html\Element\Inline;

use Html\Element\Block\Article;
use Html\Element\InlineElement;

class Address extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'address';

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
        Article::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [
    ];


}
