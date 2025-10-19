<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Map - The map element, in conjunction with an img element and any area element descendants, defines an image map. The element represents a related collection of map areas.
 *
 * @generated 2025-10-19 21:39:12
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/map
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\MarkedText;
use Html\Element\Void\Area;
use Html\Enum\DataPlacementEnum;
use Html\Enum\DataThemeEnum;
use Html\Mapping\Element;

#[Element('map')]
class Map extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'map';

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
        MarkedText::class,
        Paragraph::class,
        Section::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [Area::class];

    /**
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     */
    public ?string $name = null;

    /**
     * Give extra context and information by adding tooltips.
     */
    public ?string $dataTooltip = null;

    /** Choose between light and dark mode. Overrides the OS default if set. */
    protected null|string|DataThemeEnum $dataTheme = null;

    /**
     * Choose the position of a tooltip. Depends on data-tooltip attribute.
     * @example top
     */
    protected null|string|DataPlacementEnum $dataPlacement = null;

    public function setName(string $name): static
    {
        $this->name = $name;
        $this->delegated->setAttribute('name', (string) $name);
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
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
