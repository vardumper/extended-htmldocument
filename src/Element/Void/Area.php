<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Area - The area element represents either a hyperlink with some text and a corresponding area on an image map, or a dead area on an image map.
 *
 * @generated 2025-03-15 16:30:45
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/area
 */

namespace Html\Element\Void;

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
use InvalidArgumentException;

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

    public function setRel(string|RelEnum $rel): self
    {
        if (is_string($rel)) {
            $rel = RelEnum::tryFrom($rel) ?? throw new InvalidArgumentException('Invalid value for $rel.');
        }
        $this->rel = $rel;
        $this->htmlElement->setAttribute('rel', (string) $rel->value);

        return $this;
    }

    public function getRel(): ?RelEnum
    {
        return $this->rel;
    }

    public function setShape(string|ShapeEnum $shape): self
    {
        if (is_string($shape)) {
            $shape = ShapeEnum::tryFrom($shape) ?? throw new InvalidArgumentException('Invalid value for $shape.');
        }
        $this->shape = $shape;
        $this->htmlElement->setAttribute('shape', (string) $shape->value);

        return $this;
    }

    public function getShape(): ?ShapeEnum
    {
        return $this->shape;
    }

    public function setTarget(string|TargetEnum $target): self
    {
        if (is_string($target)) {
            $target = TargetEnum::tryFrom($target) ?? throw new InvalidArgumentException('Invalid value for $target.');
        }
        $this->target = $target;
        $this->htmlElement->setAttribute('target', (string) $target->value);

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
