<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Head - The head element contains meta-information about the HTML document, including its title and links to its scripts and stylesheets.
 *
 * @subpackage Html\Element\Void
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/head
 */

namespace Html\Element\Void;

use Html\Element\Block\HTML;
use Html\Model\VoidElement;

final class Head extends VoidElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'head';

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
    public static array $childOf = [HTML::class];
}
