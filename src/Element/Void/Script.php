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
    public static string $qualifiedName = 'script';

    /* When present, it specifies that the script will be executed asynchronously as soon as it is available. */
    public ?bool $async;

    /* Specifies the character encoding for the resource. */
    public ?string $charset;

    /*  */
    public ?CrossoriginEnum $crossorigin;

    /* When present, it specifies that the script should be executed after the page has been parsed. */
    public ?bool $defer;

    /* Specifies the integrity value of a resource. */
    public ?string $integrity;

    /* Specifies a cryptographic nonce that can be used in Content Security Policy (CSP) checks. */
    public ?string $nonce;

    /* Specifies the referrer policy for fetches initiated by the element. */
    public ?ReferrerpolicyEnum $referrerpolicy;

    /* 
     * Specifies the URL of the external resource to be embedded or referenced.
     * @required
     */
    public string $src;

    /* Specifies the media type of the linked resource. */
    public ?TypeEnum $type;



}
