<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Quotation - The q element represents some phrasing content quoted from another source.
 *
 * @generated 2025-07-12 09:31:57
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/q
 */

namespace Html\Element\Inline;

use Html\Element\Block\Article;
use Html\Element\Block\Aside;
use Html\Element\Block\Body;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\Division;
use Html\Element\Block\Footer;
use Html\Element\Block\Header;
use Html\Element\Block\ListItem;
use Html\Element\Block\Main;
use Html\Element\Block\Navigation;
use Html\Element\Block\Paragraph;
use Html\Element\Block\Section;
use Html\Element\InlineElement;
use Html\Mapping\Element;

#[Element('q')]
class Quotation extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'q';

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
        ListItem::class,
        Main::class,
        Navigation::class,
        Paragraph::class,
        Section::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * Specifies the URL of the cited work or the name of the cited creative work.
     */
    public ?string $cite = null;

    public function setCite(string $cite): static
    {
        $this->cite = $cite;
        $this->delegated->setAttribute('cite', $cite);
        return $this;
    }

    public function getCite(): ?string
    {
        return $this->cite;
    }
}
