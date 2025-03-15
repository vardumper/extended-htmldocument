<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * DeletedText - The del element represents a deletion from the document.
 *
 * @generated 2025-03-15 11:37:47
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/del
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\MarkedText;

class DeletedText extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'del';

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
    public static array $childOf = [
        Article::class,
        Aside::class,
        Body::class,
        DefinitionDescription::class,
        Division::class,
        Footer::class,
        Header::class,
        Main::class,
        MarkedText::class,
        Paragraph::class,
        Section::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * Specifies the URL of the cited work or the name of the cited creative work.
     */
    public ?string $cite = null;

    /**
     * Specifies the date and time of the change in the format 'YYYY-MM-DDThh:mm:ss' or a subset of it.
     */
    public ?string $datetime = null;

    public function setCite(string $cite): self
    {
        $this->cite = $cite;
        return $this;
    }

    public function getCite(): ?string
    {
        return $this->cite;
    }

    public function setDatetime(string $datetime): self
    {
        $this->datetime = $datetime;
        return $this;
    }

    public function getDatetime(): ?string
    {
        return $this->datetime;
    }
}
