<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Area - The area element represents either a hyperlink with some text and a corresponding area on an image map, or a dead area on an image map.
 *
 * @generated 2025-03-08 17:22:28
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/area
 */

namespace Html\Element\Void;

use BackedEnum;
use Html\Element\Block\Article;
use Html\Element\Block\Aside;
use Html\Element\Block\Body;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\Division;
use Html\Element\Block\Footer;
use Html\Element\Block\Header;
use Html\Element\Block\Main;
use Html\Element\Block\Map;
use Html\Element\Block\Paragraph;
use Html\Element\Block\Section;
use Html\Element\Inline\MarkedText;
use Html\Element\VoidElement;
use Html\Enum\RelEnum;
use Html\Enum\ShapeEnum;
use Html\Enum\TargetEnum;

class Area extends VoidElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'area';

    /**
     * If an element is self closing
     */
    public const bool SELF_CLOSING = true;

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
        Map::class,
        MarkedText::class,
        Paragraph::class,
        Section::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * Specifies alternative text to be displayed when the image cannot be rendered.
     * @required
     */
    public ?string $alt = null;

    /**
     * Specifies the coordinates of the shape in a rectangular area or a polygonal area on an image map.
     */
    public ?string $coords = null;

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
     * Specifies the media type of the linked resource.
     */
    public ?string $type = null;

    /**
     * Specifies the relationship between the current document and the linked document.
     */
    protected ?RelEnum $rel = null;

    protected ?ShapeEnum $shape = null;

    /**
     * Specifies where to open the linked document.
     * @example _self
     */
    protected ?TargetEnum $target = null;

    public function setAlt(string $alt): self
    {
        $this->alt = $alt;
        return $this;
    }

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setCoords(string $coords): self
    {
        $this->coords = $coords;
        return $this;
    }

    public function getCoords(): ?string
    {
        return $this->coords;
    }

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

    public function setShape(ShapeEnum $shape): self
    {
        $this->shape = $shape;
        $this->htmlElement->setAttribute(
            'shape',
            \is_subclass_of($shape, BackedEnum::class) ? (string) $shape->value : $shape
        );

        return $this;
    }

    public function getShape(): ?ShapeEnum
    {
        return $this->shape;
    }

    public function setTarget(TargetEnum $target): self
    {
        $this->target = $target;
        $this->htmlElement->setAttribute(
            'target',
            \is_subclass_of($target, BackedEnum::class) ? (string) $target->value : $target
        );

        return $this;
    }

    public function getTarget(): ?TargetEnum
    {
        return $this->target;
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
