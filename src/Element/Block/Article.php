<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Article - The article element represents a self-contained composition in a document, page, application, or site, which is intended to be independently distributable or reusable.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/article
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

class Article extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'article';

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
