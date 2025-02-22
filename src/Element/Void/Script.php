<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Script - The script element is used to embed or reference an executable script within an HTML or XHTML document. Scripts without async or defer attributes, as well as inline scripts, are fetched and executed immediately, before the browser continues to parse the page.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script
 */
namespace Html\Element\Void;

use Html\Enum\CrossoriginEnum;
use Html\Enum\ReferrerpolicyEnum;
use Html\Enum\TypeEnum;
use Html\Model\VoidElement;

class Script extends VoidElement
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = 'script';

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
     * When present, it specifies that the script will be executed asynchronously as soon as it is available.
     * @category HTML attribute */
    public ?bool $async;

    /** 
     * Specifies the character encoding for the resource.
     * @category HTML attribute */
    public ?string $charset;

    /** 
     * 
     * @category HTML attribute */
    public ?CrossoriginEnum $crossorigin;

    /** 
     * When present, it specifies that the script should be executed after the page has been parsed.
     * @category HTML attribute */
    public ?bool $defer;

    /** 
     * Specifies the integrity value of a resource.
     * @category HTML attribute */
    public ?string $integrity;

    /** 
     * Specifies a cryptographic nonce that can be used in Content Security Policy (CSP) checks.
     * @category HTML attribute */
    public ?string $nonce;

    /** 
     * Specifies the referrer policy for fetches initiated by the element.
     * @category HTML attribute */
    public ?ReferrerpolicyEnum $referrerpolicy;

    /** 
     * Specifies the URL of the external resource to be embedded or referenced.
     * @category HTML attribute
     * @required
     */
    public string $src;

    /** 
     * Specifies the media type of the linked resource.
     * @category HTML attribute */
    public ?TypeEnum $type;

}
