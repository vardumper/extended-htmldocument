<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Button - The button element represents a clickable button, used to submit forms or anywhere in a document for accessible, standard button functionality.
 *
 * @generated 2025-10-19 21:39:12
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/button
 */

namespace Html\Element\Inline;

use Html\Element\Block\Aside;
use Html\Element\Block\Body;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\Dialog;
use Html\Element\Block\Division;
use Html\Element\Block\Fieldset;
use Html\Element\Block\Footer;
use Html\Element\Block\Form;
use Html\Element\Block\Header;
use Html\Element\Block\Main;
use Html\Element\Block\Menu;
use Html\Element\Block\Paragraph;
use Html\Element\Block\Section;
use Html\Element\Block\Template;
use Html\Element\InlineElement;
use Html\Enum\ClassEnum;
use Html\Enum\DataPlacementEnum;
use Html\Enum\DataThemeEnum;
use Html\Enum\RoleEnum;
use Html\Enum\TypeButtonEnum;
use Html\Mapping\Element;
use InvalidArgumentException;

#[Element('button')]
class Button extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'button';

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
        Body::class,
        DefinitionDescription::class,
        Dialog::class,
        Division::class,
        Fieldset::class,
        Footer::class,
        Form::class,
        Header::class,
        Main::class,
        MarkedText::class,
        Menu::class,
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
     * When present, it specifies that an element should automatically get focus when the page loads.
     */
    public ?bool $autofocus = null;

    /**
     * When present, it specifies that an input element should be disabled.
     */
    public ?bool $disabled = null;

    /**
     * Specifies the name associated with the element. The meaning may vary depending on the context.
     */
    public ?string $name = null;

    /**
     * Specifies the value associated with the element. The meaning and usage may vary depending on the element type.
     */
    public ?string $value = null;

    /**
     * Give extra context and information by adding tooltips.
     */
    public ?string $dataTooltip = null;

    /**
     * Specifies the type of the button.
     */
    protected ?TypeButtonEnum $type = null;

    /** Choose between light and dark mode. Overrides the OS default if set. */
    protected null|string|DataThemeEnum $dataTheme = null;

    /**
     * Choose the position of a tooltip. Depends on data-tooltip attribute.
     * @example top
     */
    protected null|string|DataPlacementEnum $dataPlacement = null;

    /** The role attribute is used to define the purpose of an element. */
    protected null|string|RoleEnum $role = null;

    /**
     * The class attribute is used to define equal styles for multiple elements.
     * @example

     * @required
     */
    protected null|string|ClassEnum $class = null;

    public function setAutofocus(bool $autofocus): static
    {
        $this->autofocus = $autofocus;
        $this->delegated->setAttribute('autofocus', (string) $autofocus);
        return $this;
    }

    public function getAutofocus(): ?bool
    {
        return $this->autofocus;
    }

    public function setDisabled(bool $disabled): static
    {
        $this->disabled = $disabled;
        $this->delegated->setAttribute('disabled', (string) $disabled);
        return $this;
    }

    public function getDisabled(): ?bool
    {
        return $this->disabled;
    }

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

    public function setType(string|TypeButtonEnum $type): static
    {
        if (is_string($type)) {
            $type = TypeButtonEnum::tryFrom($type) ?? throw new InvalidArgumentException('Invalid value for $type.');
        }
        $this->type = $type;
        $this->delegated->setAttribute('type', (string) $type->value);

        return $this;
    }

    public function getType(): ?TypeButtonEnum
    {
        return $this->type;
    }

    public function setValue(string $value): static
    {
        $this->value = $value;
        $this->delegated->setAttribute('value', (string) $value);
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
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
