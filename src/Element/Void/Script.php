<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Script - The script element is used to embed or reference an executable script within an HTML or XHTML document. Scripts without async or defer attributes, as well as inline scripts, are fetched and executed immediately, before the browser continues to parse the page.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script
 */
namespace Html\Element\Void;

use Html\Element\VoidElement;
use Html\Enum\CrossoriginEnum;
use Html\Enum\ReferrerpolicyEnum;
use Html\Enum\TypeEnum;

class Script extends VoidElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'script';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = false;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $parentOf = [
    ];

    /** When present, it specifies that the script will be executed asynchronously as soon as it is available. */
    public ?bool $async = null;

    /** Specifies the character encoding for the resource. */
    public ?string $charset = null;

    /**  */
    public ?CrossoriginEnum $crossorigin = null;

    /** When present, it specifies that the script should be executed after the page has been parsed. */
    public ?bool $defer = null;

    /** Specifies the integrity value of a resource. */
    public ?string $integrity = null;

    /** Specifies a cryptographic nonce that can be used in Content Security Policy (CSP) checks. */
    public ?string $nonce = null;

    /** Specifies the referrer policy for fetches initiated by the element. */
    public ?ReferrerpolicyEnum $referrerpolicy = null;

    /** 
     * Specifies the URL of the external resource to be embedded or referenced.
     * @category HTML attribute
     * @required
     */
    public string $src;

    /** Specifies the media type of the linked resource. */
    public ?TypeEnum $type = null;

}
