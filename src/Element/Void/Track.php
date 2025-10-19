<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Track - The track element is used as a child of the media elements—audio and video. It lets you specify timed text tracks (or time-based data), for example to automatically handle subtitles. The tracks are formatted in WebVTT format (.vtt files) — Web Video Text Tracks.
 *
 * @generated 2025-10-19 21:39:12
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/track
 */

namespace Html\Element\Void;

use Html\Element\Block\Aside;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\Division;
use Html\Element\Block\Footer;
use Html\Element\Block\Header;
use Html\Element\Block\Main;
use Html\Element\Block\Section;
use Html\Element\Inline\MarkedText;
use Html\Element\VoidElement;
use Html\Enum\DataPlacementEnum;
use Html\Enum\DataThemeEnum;
use Html\Enum\KindEnum;
use Html\Mapping\Element;
use InvalidArgumentException;

#[Element('track')]
class Track extends VoidElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'track';

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
        Aside::class,
        DefinitionDescription::class,
        Division::class,
        Footer::class,
        Header::class,
        Main::class,
        MarkedText::class,
        Section::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * Specifies that the track should be enabled by default when the page loads.
     */
    public ?bool $default = null;

    /**
     * Specifies a label for the associated form control, option group, or option.
     */
    public ?string $label = null;

    /**
     * Specifies the URL of the external resource to be embedded or referenced.
     * @required
     */
    public ?string $src = null;

    /**
     * Specifies the language of the track text data.
     */
    public ?string $srclang = null;

    /**
     * Give extra context and information by adding tooltips.
     */
    public ?string $dataTooltip = null;

    /**
     * @example subtitles
     */
    protected ?KindEnum $kind = null;

    /** Choose between light and dark mode. Overrides the OS default if set. */
    protected null|string|DataThemeEnum $dataTheme = null;

    /**
     * Choose the position of a tooltip. Depends on data-tooltip attribute.
     * @example top
     */
    protected null|string|DataPlacementEnum $dataPlacement = null;

    public function setDefault(bool $default): static
    {
        $this->default = $default;
        $this->delegated->setAttribute('default', (string) $default);
        return $this;
    }

    public function getDefault(): ?bool
    {
        return $this->default;
    }

    public function setKind(string|KindEnum $kind): static
    {
        if (is_string($kind)) {
            $kind = KindEnum::tryFrom($kind) ?? throw new InvalidArgumentException('Invalid value for $kind.');
        }
        $this->kind = $kind;
        $this->delegated->setAttribute('kind', (string) $kind->value);

        return $this;
    }

    public function getKind(): ?KindEnum
    {
        return $this->kind;
    }

    public function setLabel(string $label): static
    {
        $this->label = $label;
        $this->delegated->setAttribute('label', (string) $label);
        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setSrc(string $src): static
    {
        $this->src = $src;
        $this->delegated->setAttribute('src', (string) $src);
        return $this;
    }

    public function getSrc(): ?string
    {
        return $this->src;
    }

    public function setSrclang(string $srclang): static
    {
        $this->srclang = $srclang;
        $this->delegated->setAttribute('srclang', (string) $srclang);
        return $this;
    }

    public function getSrclang(): ?string
    {
        return $this->srclang;
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
