<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Legend - The legend element represents a caption for the content of its parent fieldset.
 *
 * @generated 2025-10-19 21:39:12
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/legend
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Enum\DataPlacementEnum;
use Html\Enum\DataThemeEnum;
use Html\Mapping\Element;

#[Element('legend')]
class Legend extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'legend';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = true;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [Fieldset::class, Form::class];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        Heading1::class,
        Heading2::class,
        Heading3::class,
        Heading4::class,
        Heading5::class,
        Heading6::class,
    ];

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
