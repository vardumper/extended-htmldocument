<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Anchor - The a element represents a hyperlink, linking to another resource.
 *
 * @generated 2025-10-19 14:41:30
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a
 */

namespace Html\Element\Inline;

use Html\Element\Block\Article;
use Html\Element\Block\Aside;
use Html\Element\Block\Body;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\Dialog;
use Html\Element\Block\Division;
use Html\Element\Block\Footer;
use Html\Element\Block\Header;
use Html\Element\Block\ListItem;
use Html\Element\Block\Main;
use Html\Element\Block\Navigation;
use Html\Element\Block\Paragraph;
use Html\Element\Block\Section;
use Html\Element\Block\Template;
use Html\Element\InlineElement;
use Html\Enum\ClassEnum;
use Html\Enum\DataThemeEnum;
use Html\Enum\RelEnum;
use Html\Enum\RoleEnum;
use Html\Enum\TargetEnum;
use Html\Mapping\Element;
use InvalidArgumentException;

#[Element('a')]
class Anchor extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'a';

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
        Dialog::class,
        Division::class,
        Footer::class,
        Header::class,
        ListItem::class,
        Main::class,
        MarkedText::class,
        Navigation::class,
        Paragraph::class,
        Section::class,
        Slot::class,
        Template::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /**
     * Indicates that the linked content should be downloaded rather than displayed.
     */
    public ?string $download = null;

    /**
     * Specifies the URL of the linked resource. Special protocols such as mailto: or tel: can be used.
     * @required
     */
    public ?string $href = null;

    /**
     * Specifies the language of the linked resource.
     */
    public ?string $hreflang = null;

    /**
     * Specifies additional information about the element, typically displayed as a tooltip.
     */
    public ?string $title = null;

    /**
     * Specifies the media type of the linked resource.
     */
    public ?string $type = null;

    /**
     * Specifies the relationship between the current document and the linked document.
     */
    protected ?RelEnum $rel = null;

    /**
     * Specifies where to open the linked document.
     * @example _self
     */
    protected null|string|TargetEnum $target = null;

    /** Choose between light and dark mode. Overrides the OS default if set. */
    protected null|string|DataThemeEnum $dataTheme = null;

    /** The role attribute is used to define the purpose of an element. */
    protected null|string|RoleEnum $role = null;

    /**
     * The class attribute is used to define equal styles for multiple elements.
     * @example

     * @required
     */
    protected null|string|ClassEnum $class = null;

    public function setDownload(string $download): static
    {
        $this->download = $download;
        $this->delegated->setAttribute('download', $download);
        return $this;
    }

    public function getDownload(): ?string
    {
        return $this->download;
    }

    public function setHref(string $href): static
    {
        $this->href = $href;
        $this->delegated->setAttribute('href', $href);
        return $this;
    }

    public function getHref(): ?string
    {
        return $this->href;
    }

    public function setHreflang(string $hreflang): static
    {
        $this->hreflang = $hreflang;
        $this->delegated->setAttribute('hreflang', $hreflang);
        return $this;
    }

    public function getHreflang(): ?string
    {
        return $this->hreflang;
    }

    public function setRel(string|RelEnum $rel): static
    {
        if (is_string($rel)) {
            $rel = RelEnum::tryFrom($rel) ?? throw new InvalidArgumentException('Invalid value for $rel.');
        }
        $this->rel = $rel;
        $this->delegated->setAttribute('rel', (string) $rel->value);

        return $this;
    }

    public function getRel(): ?RelEnum
    {
        return $this->rel;
    }

    public function setTarget(string|TargetEnum $target): static
    {
        $value = $target;
        if (is_string($target)) {
            $resolved = TargetEnum::tryFrom($target);
            if ($resolved !== null) {
                $target = $resolved;
            }
        }
        if ($target instanceof TargetEnum) {
            $value = $target->value;
        }
        $this->target = $target;
        $this->delegated->setAttribute('target', (string) $value);

        return $this;
    }

    public function getTarget(): string|TargetEnum
    {
        return $this->target;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
        $this->delegated->setAttribute('title', $title);
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setType(string $type): static
    {
        $this->type = $type;
        $this->delegated->setAttribute('type', $type);
        return $this;
    }

    public function getType(): ?string
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
        $this->dataTheme = $data - theme;
        $this->delegated->setAttribute('dataTheme', (string) $value);

        return $this;
    }

    public function getDataTheme(): string|DataThemeEnum
    {
        return $this->dataTheme;
    }

    public function setRole(string|RoleEnum $role): static
    {
        $value = $role;
        if (is_string($role)) {
            $resolved = RoleEnum::tryFrom($role);
            if ($resolved !== null) {
                $role = $resolved;
            }
        }
        if ($role instanceof RoleEnum) {
            $value = $role->value;
        }
        $this->role = $role;
        $this->delegated->setAttribute('role', (string) $value);

        return $this;
    }

    public function getRole(): string|RoleEnum
    {
        return $this->role;
    }

    public function setClass(string|ClassEnum $class): static
    {
        $value = $class;
        if (is_string($class)) {
            $resolved = ClassEnum::tryFrom($class);
            if ($resolved !== null) {
                $class = $resolved;
            }
        }
        if ($class instanceof ClassEnum) {
            $value = $class->value;
        }
        $this->class = $class;
        $this->delegated->setAttribute('class', (string) $value);

        return $this;
    }

    public function getClass(): string|ClassEnum
    {
        return $this->class;
    }
}
