<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Main - The main element represents the dominant content of the body of a document. The main content area consists of content that is directly related to or expands upon the central topic of a document, or the central functionality of an application.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/main
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

final class Main extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'main';

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
}
