<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * InsertedText - The ins element represents an addition to the document.
 *
 * @generated 2025-10-19 18:53:35
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ins
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\MarkedText;
use Html\Mapping\Element;

#[Element('ins')]
class InsertedText extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'ins';

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

    public function setCite(string $cite): static
    {
        $this->cite = $cite;
        $this->delegated->setAttribute('cite', (string) $cite);
        return $this;
    }

    public function getCite(): ?string
    {
        return $this->cite;
    }

    public function setDatetime(string $datetime): static
    {
        $this->datetime = $datetime;
        $this->delegated->setAttribute('datetime', (string) $datetime);
        return $this;
    }

    public function getDatetime(): ?string
    {
        return $this->datetime;
    }
}
