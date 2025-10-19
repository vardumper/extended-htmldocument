<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Head - The head element contains meta-information about the HTML document, including its title and links to its scripts and stylesheets.
 *
 * @generated 2025-10-19 14:41:30
 * @subpackage Html\Element\Void
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/head
 */

namespace Html\Element\Void;

use Html\Element\Block\HTML;
use Html\Element\Block\NoScript;
use Html\Element\VoidElement;
use Html\Enum\DataThemeEnum;
use Html\Mapping\Element;

#[Element('head')]
class Head extends VoidElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'head';

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
    public static array $childOf = [HTML::class];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [
        Base::class,
        Link::class,
        Meta::class,
        NoScript::class,
        Script::class,
        Style::class,
        Title::class,
    ];

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
