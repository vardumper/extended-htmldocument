<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * OrderedList - The ol element represents an ordered list of items. The order of the list is meaningful.
 *
 * @generated 2025-07-12 09:31:57
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ol
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\Slot;
use Html\Enum\TypeOlEnum;
use Html\Mapping\Element;
use InvalidArgumentException;

#[Element('ol')]
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
    public static array $childOf = [
        Article::class,
        Aside::class,
        Body::class,
        DefinitionDescription::class,
        Details::class,
        Dialog::class,
        Division::class,
        Footer::class,
        Header::class,
        ListItem::class,
        Main::class,
        Paragraph::class,
        Section::class,
        Slot::class,
        Template::class,
    ];

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
     * @example 1
     */
    protected ?TypeOlEnum $type = null;

    public function setReversed(bool $reversed): static
    {
        $this->reversed = $reversed;
        $this->delegated->setAttribute('reversed', $reversed);
        return $this;
    }

    public function getReversed(): ?bool
    {
        return $this->reversed;
    }

    public function setStart(int $start): static
    {
        $this->start = $start;
        $this->delegated->setAttribute('start', $start);
        return $this;
    }

    public function getStart(): ?int
    {
        return $this->start;
    }

    public function setType(string|TypeOlEnum $type): static
    {
        if (is_string($type)) {
            $type = TypeOlEnum::tryFrom($type) ?? throw new InvalidArgumentException('Invalid value for $type.');
        }
        $this->type = $type;
        $this->delegated->setAttribute('type', (string) $type->value);

        return $this;
    }

    public function getType(): ?TypeOlEnum
    {
        return $this->type;
    }
}
