<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Template - The template element is a mechanism for holding client-side content that is not to be rendered when a page is loaded but may subsequently be instantiated during runtime using JavaScript.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/template
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

class Template extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'template';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = false;

    /**
     * The allowed parent element classes. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [];
}
