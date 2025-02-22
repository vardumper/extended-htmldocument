<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Title - The title element defines the title of the document, shown in a browser's title bar or a page's tab. It is only text, not meant to be displayed.
 *
 * @subpackage Html\Element\Void
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/title
 */

namespace Html\Element\Void;

use Html\Model\VoidElement;

final class Title extends VoidElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'title';

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
}
