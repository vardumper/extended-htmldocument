<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * OrderedList - The ol element represents an ordered list of items. The order of the list is meaningful.
 *
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ol
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Enum\TypeEnum;

class OrderedList extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'ol';

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
    public static array $childOf = [];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [ListItem::class];

    /**
     * When present, it specifies that the list order should be descending (9,8,7...).
     */
    public ?bool $reversed = null;

    /**
     * Specifies the starting value of an ordered list.
     */
    public ?int $start = null;

    /**
     * Specifies the numbering type of the ordered list.
     */
    protected ?TypeEnum $type = null;

    public function setReversed(bool $reversed): self
    {
        $this->reversed = $reversed;
        return $this;
    }

    public function getReversed(): ?bool
    {
        return $this->reversed;
    }

    public function setStart(int $start): self
    {
        $this->start = $start;
        return $this;
    }

    public function getStart(): ?int
    {
        return $this->start;
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
