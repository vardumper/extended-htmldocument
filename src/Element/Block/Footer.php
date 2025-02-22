<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Footer - The footer element represents a container for the bottom section of a document or a section, typically containing information about the author, copyright information, and links to related documents.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/footer
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

final class Footer extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'footer';

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
}
