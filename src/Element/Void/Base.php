<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Base - The base element specifies the base URL to use for all relative URLs in a document. There can be at maximum one <base> element in a document, and it must be inside the <head> element.
 *
 * @generated 2025-10-19 21:39:12
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/base
 */

namespace Html\Element\Void;

use Html\Element\VoidElement;
use Html\Enum\DataPlacementEnum;
use Html\Enum\DataThemeEnum;
use Html\Enum\TargetEnum;
use Html\Mapping\Element;
use InvalidArgumentException;

#[Element('base')]
class Base extends VoidElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'base';

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
    public static bool $uniquePerParent = true;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [Head::class];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * Specifies the URL of the linked resource. Special protocols such as mailto: or tel: can be used.
     * @required
     */
    public ?string $href = null;

    /**
     * Give extra context and information by adding tooltips.
     */
    public ?string $dataTooltip = null;

    /**
     * Specifies where to open the linked document.
     * @example _self
     */
    protected ?TargetEnum $target = null;

    /** Choose between light and dark mode. Overrides the OS default if set. */
    protected null|string|DataThemeEnum $dataTheme = null;

    /**
     * Choose the position of a tooltip. Depends on data-tooltip attribute.
     * @example top
     */
    protected null|string|DataPlacementEnum $dataPlacement = null;

    public function setHref(string $href): static
    {
        $this->href = $href;
        $this->delegated->setAttribute('href', (string) $href);
        return $this;
    }

    public function getHref(): ?string
    {
        return $this->href;
    }

    public function setTarget(string|TargetEnum $target): static
    {
        if (is_string($target)) {
            $target = TargetEnum::tryFrom($target) ?? throw new InvalidArgumentException('Invalid value for $target.');
        }
        $this->target = $target;
        $this->delegated->setAttribute('target', (string) $target->value);

        return $this;
    }

    public function getTarget(): ?TargetEnum
    {
        return $this->target;
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
