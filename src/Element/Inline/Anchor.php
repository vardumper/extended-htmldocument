<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Anchor - The a element represents a hyperlink, linking to another resource.
 *
 * @generated 2025-03-08 18:09:25
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a
 */

namespace Html\Element\Inline;

use BackedEnum;
use Html\Element\Block\Article;
use Html\Element\Block\Aside;
use Html\Element\Block\Body;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\Dialog;
use Html\Element\Block\Division;
use Html\Element\Block\Footer;
use Html\Element\Block\Header;
use Html\Element\Block\ListItem;
use Html\Element\Block\Main;
use Html\Element\Block\Navigation;
use Html\Element\Block\Paragraph;
use Html\Element\Block\Section;
use Html\Element\Block\Template;
use Html\Element\InlineElement;
use Html\Enum\RelEnum;
use Html\Enum\TargetEnum;

class Anchor extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'a';

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
        Dialog::class,
        Division::class,
        Footer::class,
        Header::class,
        ListItem::class,
        Main::class,
        MarkedText::class,
        Navigation::class,
        Paragraph::class,
        Section::class,
        Slot::class,
        Template::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * Indicates that the linked content should be downloaded rather than displayed.
     */
    public ?string $download = null;

    /**
     * Specifies the URL of the linked resource. Special protocols such as mailto: or tel: can be used.
     * @required
     */
    public ?string $href = null;

    /**
     * Specifies the language of the linked resource.
     */
    public ?string $hreflang = null;

    /**
     * Specifies additional information about the element, typically displayed as a tooltip.
     */
    public ?string $title = null;

    /**
     * Specifies the media type of the linked resource.
     */
    public ?string $type = null;

    /**
     * Specifies the relationship between the current document and the linked document.
     */
    protected ?RelEnum $rel = null;

    /**
     * Specifies where to open the linked document.
     * @example _self
     */
    protected null|string|TargetEnum $target = null;

    public function setDownload(string $download): self
    {
        $this->download = $download;
        return $this;
    }

    public function getDownload(): ?string
    {
        return $this->download;
    }

    public function setHref(string $href): self
    {
        $this->href = $href;
        return $this;
    }

    public function getHref(): ?string
    {
        return $this->href;
    }

    public function setHreflang(string $hreflang): self
    {
        $this->hreflang = $hreflang;
        return $this;
    }

    public function getHreflang(): ?string
    {
        return $this->hreflang;
    }

    public function setRel(RelEnum $rel): self
    {
        $this->rel = $rel;
        $this->htmlElement->setAttribute(
            'rel',
            \is_subclass_of($rel, BackedEnum::class) ? (string) $rel->value : $rel
        );

        return $this;
    }

    public function getRel(): ?RelEnum
    {
        return $this->rel;
    }

    public function setTarget(string|TargetEnum $target): self
    {
        $this->target = $target;
        $this->htmlElement->setAttribute(
            'target',
            \is_subclass_of($target, BackedEnum::class) ? (string) $target->value : $target
        );

        return $this;
    }

    public function getTarget(): null|string|TargetEnum
    {
        return $this->target;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }
}
