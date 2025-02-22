<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * HTML - The root element of an HTML document. It represents the top-level of the HTML structure.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/html
 */

namespace Html\Element\Block;

use Html\Element\Void\Head;
use Html\Model\BlockElement;

class HTML extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'html';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = true;

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
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [Body::class, Head::class];

    /**
     * Specifies the address of the document's cache manifest.
     */
    public ?string $manifest;
}
