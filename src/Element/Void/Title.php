<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Title - The title element defines the title of the document, shown in a browser's title bar or a page's tab. It is only text, not meant to be displayed.
 *
 * @generated 2025-10-19 20:20:48
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/title
 */

namespace Html\Element\Void;

use Html\Element\VoidElement;
use Html\Mapping\Element;

#[Element('title')]
class Title extends VoidElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'title';

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
    public static array $childOf = [Head::class];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];
}
