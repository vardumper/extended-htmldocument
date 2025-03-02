<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * HorizontalRule - The hr element represents a thematic break between paragraph-level elements. It is typically a horizontal rule or line.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/hr
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Enum\AlignEnum;

class HorizontalRule extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'hr';

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
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
    ];


    /** 
     * Specifies the horizontal alignment of the element.
     * @category HTML attribute
     * @deprecated
     */
    protected ?AlignEnum $align = null;

    /** 
     * 
     * @category HTML attribute
     * @deprecated
     */
    public ?string $color = null;

    /** 
     * 
     * @category HTML attribute
     * @deprecated
     */
    public ?bool $noshade = null;

    /** 
     * Specifies the height of a hr element in pixels.
     * @category HTML attribute
     * @deprecated
     */
    public ?int $size = null;

    /** Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $width = null;


    public function setAlign(AlignEnum $align): void
    {
        $this->align = $align;
        $this->htmlElement->setAttribute('align', $align->value);
    }

    public function getAlign(): ?AlignEnum
    {
        return $this->align;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setNoshade(bool $noshade): void
    {
        $this->noshade = $noshade;
    }

    public function getNoshade(): ?bool
    {
        return $this->noshade;
    }

    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setWidth(string $width): void
    {
        $this->width = $width;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }


}
