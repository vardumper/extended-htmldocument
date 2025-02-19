<?php
/**
 * Meta - The meta element provides metadata about the HTML document. Metadata will not be displayed on the page, but is machine-readable.
 * 
 * @package Html\Element\Void
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meta
 */
namespace Html\Element\Void;

use Html\Enum\HttpEquivEnum;
use Html\Model\VoidElement;

final class Meta extends VoidElement
{
    public static string $qualifiedName = 'meta';

    /* Specifies the character encoding for the resource. */
    public ?string $charset;

    /* Specifies the value associated with the http-equiv or name attribute. */
    public ?string $content;

    /* Provides an HTTP header for the information/value of the content attribute. */
    public ?HttpEquivEnum $httpEquiv;

    /* Specifies the name associated with the element. The meaning may vary depending on the context. */
    public ?string $name;

    /* Specifies the content type of the value attribute when the http-equiv attribute is used. */
    public ?string $scheme;


    public function __construct()
    {

    }


}