<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Blockquote - The blockquote element represents a section that is quoted from another source. Content inside a blockquote must be quoted from another source, whose address, if it has one, may be cited in the cite attribute.
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/blockquote
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

class Blockquote extends BlockElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'blockquote';

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

    /**
     * Specifies the URL of the cited work or the name of the cited creative work.
     */
    public ?string $cite;
}
