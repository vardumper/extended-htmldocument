<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Meta - The meta element provides metadata about the HTML document. Metadata will not be displayed on the page, but is machine-readable. Mainly used in the head but allowed inside the body if itemprop attribute is set.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meta
 */
namespace Html\Element\Void;

use Html\Enum\HttpEquivEnum;
use Html\Model\VoidElement;

class Meta extends VoidElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'meta';

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
     * Specifies the character encoding for the resource.
     * @category HTML attribute */
    public ?string $charset;

    /** 
     * Specifies the value associated with the http-equiv or name attribute.
     * @category HTML attribute */
    public ?string $content;

    /** 
     * Provides an HTTP header for the information/value of the content attribute.
     * @category HTML attribute */
    public ?HttpEquivEnum $httpEquiv;

    /** 
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     * @category HTML attribute */
    public ?string $name;

    /** 
     * Specifies the content type of the value attribute when the http-equiv attribute is used.
     * @category HTML attribute */
    public ?string $scheme;

}
