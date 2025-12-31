<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated 2025-12-31 00:08:53
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/col
 */
namespace Html\Element\Void;

use Html\Element\VoidElement;
use Html\Element\Block\ColumnGroup;
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

/**
 * The col element represents a column in a table.
 */
#[Element('col')]
class Column extends VoidElement
{
    use GlobalAttribute\ClassTrait;
    use GlobalAttribute\DataTrait;
    use GlobalAttribute\IdTrait;
    use GlobalAttribute\StyleTrait;
    use GlobalAttribute\AlpineJsTrait;
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'col';

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
        ColumnGroup::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $parentOf = [
    ];

    /** 
     * Specifies the number of columns the <col> element should span in a table.
     * @category HTML attribute */
    protected ?int $span = null;

    /** 
     * Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%).
     * @category HTML attribute */
    protected ?string $width = null;


    public function setSpan(int $span): static
    {
        $this->span = $span;
        $this->delegated->setAttribute('span', (string) $span);
        return $this;
    }

    public function getSpan(): ?int
    {
        return $this->span;
    }

    public function setWidth(string $width): static
    {
        $this->width = $width;
        $this->delegated->setAttribute('width', (string) $width);
        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }

}
