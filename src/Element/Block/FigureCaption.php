<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * FigureCaption - The figcaption element represents a caption or a legend associated with a figure or an illustration described by the rest of the data of the figure element. The figcaption element can be placed as the first or the last child of a parent figure element.
 *
 * @generated 2025-10-19 14:41:30
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figcaption
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Enum\DataThemeEnum;
use Html\Mapping\Element;

#[Element('figcaption')]
class FigureCaption extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'figcaption';

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
    public static array $childOf = [Figure::class, Aside::class, Footer::class, Header::class, Section::class];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [];

    /** Choose between light and dark mode. Overrides the OS default if set. */
    protected null|string|DataThemeEnum $dataTheme = null;

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
        $this->dataTheme = $data - theme;
        $this->delegated->setAttribute('dataTheme', (string) $value);

        return $this;
    }

    public function getDataTheme(): string|DataThemeEnum
    {
        return $this->dataTheme;
    }
}
