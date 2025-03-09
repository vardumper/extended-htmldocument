<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Blockquote - The blockquote element represents a section that is quoted from another source. Content inside a blockquote must be quoted from another source, whose address, if it has one, may be cited in the cite attribute.
 *
 * @generated 2025-03-09 20:34:45
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/blockquote
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;

class Blockquote extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'blockquote';

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
    public static array $childOf = [Body::class, Paragraph::class];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [Article::class, Paragraph::class];

    /**
     * Specifies the URL of the cited work or the name of the cited creative work.
     */
    public ?string $cite = null;

    public function setCite(string $cite): self
    {
        $this->cite = $cite;
        return $this;
    }

    public function getCite(): ?string
    {
        return $this->cite;
    }
}
