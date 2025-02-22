<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Navigation - The nav element represents a section of a page whose purpose is to provide navigation links, either within the current document or to other documents.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/nav
 */

namespace Html\Element\Block;

use Html\Element\Inline\Anchor;
use Html\Element\Inline\Citation;
use Html\Element\Inline\Emphasis;
use Html\Element\Inline\Quotation;
use Html\Element\Inline\Small;
use Html\Element\Inline\Strikethrough;
use Html\Element\Inline\Strong;
use Html\Model\BlockElement;

class Navigation extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'nav';

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
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [
        Anchor::class,
        Citation::class,
        Emphasis::class,
        Quotation::class,
        Strikethrough::class,
        Small::class,
        Strong::class,
    ];
}
