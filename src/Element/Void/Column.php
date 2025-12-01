<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Column - The col element represents a column in a table.
 * 
 * @generated 2025-12-01 08:37:28
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/col
 */
namespace Html\Element\Void;

use Html\Element\Block\ColumnGroup;
use Html\Element\VoidElement;
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

#[Element('col')]
class Column extends VoidElement
{
    use GlobalAttribute\ClassTrait;
    use GlobalAttribute\DataTrait;
    use GlobalAttribute\IdTrait;
    use GlobalAttribute\StyleTrait;
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

    /** Specifies the number of columns the <col> element should span in a table. */
    protected ?int $span = null;

    /** Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
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
