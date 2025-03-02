<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * TableRow - The tr element represents a row of cells in a table.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tr
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Table;
use Html\Element\Block\TableBody;
use Html\Element\Block\TableData;
use Html\Element\Block\TableFoot;
use Html\Element\Block\TableHead;
use Html\Element\Block\TableHeader;
use Html\Enum\AlignEnum;
use Html\Enum\ValignEnum;

class TableRow extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'tr';

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
        Table::class,
        TableHead::class,
        TableBody::class,
        TableFoot::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        TableData::class,
        TableHeader::class,
    ];


    /** 
     * Specifies the horizontal alignment of each row cell. The possible enumerated values are left, center, right, justify, and char. When supported, the char value aligns the textual content on the character defined in the char attribute and on offset defined by the charoff attribute. Use the text-align CSS property instead, as this attribute is deprecated.
     * @category HTML attribute
     * @deprecated
     */
    protected ?AlignEnum $align = null;

    /** 
     * Defines the background color of each row cell. The value is an HTML color; either a 6-digit hexadecimal RGB code, prefixed by a #, or a color keyword. Other CSS <color> values are not supported. Use the background-color CSS property instead, as this attribute is deprecated.
     * @category HTML attribute
     * @deprecated
     */
    public ?string $bgcolor = null;

    /** 
     * Specifies the alignment of the content to a character of each row cell. Typical values for this include a period (.) when attempting to align numbers or monetary values. If align is not set to char, this attribute is ignored.
     * @category HTML attribute
     * @deprecated
     */
    public ?string $char = null;

    /** 
     * Specifies the number of characters to offset the row cell content from the alignment character specified by the char attribute.
     * @category HTML attribute
     * @deprecated
     */
    public ?string $charoff = null;

    /** 
     * Specifies the vertical alignment of each row cell. The possible enumerated values are baseline, bottom, middle, and top. Use the vertical-align CSS property instead, as this attribute is deprecated.
     * @category HTML attribute
     * @deprecated
     */
    protected ?ValignEnum $valign = null;


    public function setAlign(AlignEnum $align): self
    {
        $this->align = $align;
        $this->htmlElement->setAttribute('align', $align->value);
        return $this;
    }

    public function getAlign(): ?AlignEnum
    {
        return $this->align;
    }

    public function setBgcolor(string $bgcolor): self
    {
        $this->bgcolor = $bgcolor;
        return $this;
    }

    public function getBgcolor(): ?string
    {
        return $this->bgcolor;
    }

    public function setChar(string $char): self
    {
        $this->char = $char;
        return $this;
    }

    public function getChar(): ?string
    {
        return $this->char;
    }

    public function setCharoff(string $charoff): self
    {
        $this->charoff = $charoff;
        return $this;
    }

    public function getCharoff(): ?string
    {
        return $this->charoff;
    }

    public function setValign(ValignEnum $valign): self
    {
        $this->valign = $valign;
        $this->htmlElement->setAttribute('valign', $valign->value);
        return $this;
    }

    public function getValign(): ?ValignEnum
    {
        return $this->valign;
    }


}
