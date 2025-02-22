<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Meta - The meta element provides metadata about the HTML document. Metadata will not be displayed on the page, but is machine-readable. Mainly used in the head but allowed inside the body if itemprop attribute is set.
 *
 * @subpackage Html\Element\Void
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meta
 */

namespace Html\Element\Void;

use Html\Enum\HttpEquivEnum;
use Html\Model\VoidElement;

final class Meta extends VoidElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'meta';

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
    public static array $childOf = [];

    /**
     * Specifies the character encoding for the resource.
     */
    public ?string $charset;

    /**
     * Specifies the value associated with the http-equiv or name attribute.
     */
    public ?string $content;

    /**
     * Provides an HTTP header for the information/value of the content attribute.
     */
    public ?HttpEquivEnum $httpEquiv;

    /**
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     */
    public ?string $name;

    /**
     * Specifies the content type of the value attribute when the http-equiv attribute is used.
     */
    public ?string $scheme;
}
