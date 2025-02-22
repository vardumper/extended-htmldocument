<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Base - The base element specifies the base URL to use for all relative URLs in a document. There can be at maximum one <base> element in a document, and it must be inside the <head> element.
 *
 * @subpackage Html\Element\Void
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/base
 */

namespace Html\Element\Void;

use Html\Enum\TargetEnum;
use Html\Model\VoidElement;

class Base extends VoidElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'base';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = true;

    /**
     * The allowed parent classes. Any if empty.
     * @var array<string>
     */
    /**
     * Allowed parent elements of Base
     */
    public static array $childOf = [Head::class];

    /**
     * Specifies the URL of the linked resource. Special protocols such as mailto: or tel: can be used.
     * @required
     */
    public string $href;

    /**
     * Specifies where to open the linked document.
     * @example _self
     */
    public ?TargetEnum $target;
}
