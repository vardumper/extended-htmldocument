<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * OrderedList - The ol element represents an ordered list of items. The order of the list is meaningful.
 *
 * @generated 2025-10-19 21:39:12
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ol
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\Slot;
use Html\Enum\DataPlacementEnum;
use Html\Enum\DataThemeEnum;
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
     * Give extra context and information by adding tooltips.
     */
    public ?string $dataTooltip = null;

    /**
     * Specifies the numbering type of the ordered list.
     * @example 1
     */
    protected ?TypeOlEnum $type = null;

    /** Choose between light and dark mode. Overrides the OS default if set. */
    protected null|string|DataThemeEnum $dataTheme = null;

    /**
     * Choose the position of a tooltip. Depends on data-tooltip attribute.
     * @example top
     */
    protected null|string|DataPlacementEnum $dataPlacement = null;

    public function setReversed(bool $reversed): static
    {
        $this->reversed = $reversed;
        $this->delegated->setAttribute('reversed', (string) $reversed);
        return $this;
    }

    public function getReversed(): ?bool
    {
        return $this->reversed;
    }

    public function setStart(int $start): static
    {
        $this->start = $start;
        $this->delegated->setAttribute('start', (string) $start);
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

    public function setDataTheme(string|DataThemeEnum $dataTheme): static
    {
        $value = $dataTheme;
        if (is_string($dataTheme)) {
            $resolved = DataThemeEnum::tryFrom($dataTheme);
            if ($resolved !== null) {
                $dataTheme = $resolved;
            }
        }
        if ($dataTheme instanceof DataThemeEnum) {
            $value = $dataTheme->value;
        }
        $this->dataTheme = $dataTheme;
        $this->delegated->setAttribute('dataTheme', (string) $value);

        return $this;
    }

    public function getDataTheme(): string|DataThemeEnum
    {
        return $this->dataTheme;
    }

    public function setDataTooltip(string $dataTooltip): static
    {
        $this->dataTooltip = $dataTooltip;
        $this->delegated->setAttribute('dataTooltip', (string) $dataTooltip);
        return $this;
    }

    public function getDataTooltip(): ?string
    {
        return $this->dataTooltip;
    }

    public function setDataPlacement(string|DataPlacementEnum $dataPlacement): static
    {
        $value = $dataPlacement;
        if (is_string($dataPlacement)) {
            $resolved = DataPlacementEnum::tryFrom($dataPlacement);
            if ($resolved !== null) {
                $dataPlacement = $resolved;
            }
        }
        if ($dataPlacement instanceof DataPlacementEnum) {
            $value = $dataPlacement->value;
        }
        $this->dataPlacement = $dataPlacement;
        $this->delegated->setAttribute('dataPlacement', (string) $value);

        return $this;
    }

    public function getDataPlacement(): string|DataPlacementEnum
    {
        return $this->dataPlacement;
    }
}
