<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Area - The area element represents either a hyperlink with some text and a corresponding area on an image map, or a dead area on an image map.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/area
 */
namespace Html\Element\Void;

use Html\Element\VoidElement;
use Html\Enum\RelEnum;
use Html\Enum\ShapeEnum;
use Html\Enum\TargetEnum;
use Html\Enum\TypeEnum;

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
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $parentOf = [
    ];

    /** 
     * Specifies alternative text to be displayed when the image cannot be rendered.
     * @category HTML attribute
     * @required
     */
    public ?string $alt = null;

    /** Specifies the coordinates of the shape in a rectangular area or a polygonal area on an image map. */
    public ?string $coords = null;

    /** Indicates that the linked content should be downloaded rather than displayed. */
    public ?string $download = null;

    /** 
     * Specifies the URL of the linked resource. Special protocols such as mailto: or tel: can be used.
     * @category HTML attribute
     * @required
     */
    public ?string $href = null;

    /** Specifies the language of the linked resource. */
    public ?string $hreflang = null;

    /** Specifies the relationship between the current document and the linked document. */
    protected ?RelEnum $rel = null;

    /**  */
    protected ?ShapeEnum $shape = null;

    /** 
     * Specifies where to open the linked document.
     * @category HTML attribute
     * @example _self
     */
    protected ?TargetEnum $target = null;

    /** Specifies the media type of the linked resource. */
    protected ?TypeEnum $type = null;


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
        $this->htmlElement->setAttribute('rel', $rel->value);
        return $this;
    }

    public function getRel(): ?RelEnum
    {
        return $this->rel;
    }

    public function setShape(ShapeEnum $shape): self
    {
        $this->shape = $shape;
        $this->htmlElement->setAttribute('shape', $shape->value);
        return $this;
    }

    public function getShape(): ?ShapeEnum
    {
        return $this->shape;
    }

    public function setTarget(TargetEnum $target): self
    {
        $this->target = $target;
        $this->htmlElement->setAttribute('target', $target->value);
        return $this;
    }

    public function getTarget(): ?TargetEnum
    {
        return $this->target;
    }

    public function setType(TypeEnum $type): self
    {
        $this->type = $type;
        $this->htmlElement->setAttribute('type', $type->value);
        return $this;
    }

    public function getType(): ?TypeEnum
    {
        return $this->type;
    }

}
