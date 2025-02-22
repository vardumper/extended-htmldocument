<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Quotation - The q element represents some phrasing content quoted from another source.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/q
 */
namespace Html\Element\Inline;

use Html\Model\InlineElement;

class Quotation extends InlineElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'q';

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
     * The allowed parent classes. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $childOf = [];

    /** 
     * Specifies the URL of the cited work or the name of the cited creative work.
     * @category HTML attribute */
    public ?string $cite;

}
