<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * ListItem - The li element represents a list item. If its parent element is an ol, ul, or menu, then the element is an item of the parent element's list, as defined for those elements. Otherwise, the list item has no defined list-related semantics.
 *
 * @generated 2025-11-02 22:39:29
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/li
 */

namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Inline\Abbreviation;
use Html\Element\Inline\Anchor;
use Html\Element\Inline\Citation;
use Html\Element\Inline\Code;
use Html\Element\Inline\Data;
use Html\Element\Inline\Definition;
use Html\Element\Inline\Emphasis;
use Html\Element\Inline\Italic;
use Html\Element\Inline\KeyboardInput;
use Html\Element\Inline\Quotation;
use Html\Element\Inline\SampleOutput;
use Html\Element\Inline\Slot;
use Html\Element\Inline\Small;
use Html\Element\Inline\Strikethrough;
use Html\Element\Inline\Strong;
use Html\Element\Inline\Subscript;
use Html\Element\Inline\Superscript;
use Html\Element\Inline\Time;
use Html\Element\Inline\Underline;
use Html\Element\Inline\Variable;
use Html\Enum\AriaBusyEnum;
use Html\Enum\AriaCurrentEnum;
use Html\Enum\AriaHiddenEnum;
use Html\Enum\RoleEnum;
use Html\Mapping\Element;
use Html\Trait\GlobalAttribute;
use InvalidArgumentException;

#[Element('li')]
class ListItem extends BlockElement
{
    use GlobalAttribute\AccesskeyTrait;
    use GlobalAttribute\AutocapitalizeTrait;
    use GlobalAttribute\AutofocusTrait;
    use GlobalAttribute\ClassTrait;
    use GlobalAttribute\ContenteditableTrait;
    use GlobalAttribute\DataTrait;
    use GlobalAttribute\DirTrait;
    use GlobalAttribute\DraggableTrait;
    use GlobalAttribute\HiddenTrait;
    use GlobalAttribute\IdTrait;
    use GlobalAttribute\InputmodeTrait;
    use GlobalAttribute\LangTrait;
    use GlobalAttribute\SpellcheckTrait;
    use GlobalAttribute\StyleTrait;
    use GlobalAttribute\TabindexTrait;
    use GlobalAttribute\TitleTrait;
    use GlobalAttribute\TranslateTrait;
    use GlobalAttribute\PopoverTrait;

    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'li';

    /**
     * If an element is self closing
     */
    public const bool SELF_CLOSING = false;

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
        Details::class,
        Dialog::class,
        Division::class,
        Footer::class,
        Header::class,
        Main::class,
        Menu::class,
        OrderedList::class,
        Section::class,
        Slot::class,
        Template::class,
        UnorderedList::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        Anchor::class,
        Abbreviation::class,
        Citation::class,
        Code::class,
        Data::class,
        Definition::class,
        Division::class,
        DefinitionList::class,
        Emphasis::class,
        Figure::class,
        Italic::class,
        KeyboardInput::class,
        OrderedList::class,
        Paragraph::class,
        PreformattedText::class,
        Quotation::class,
        Strikethrough::class,
        SampleOutput::class,
        Small::class,
        Strong::class,
        Subscript::class,
        Superscript::class,
        Time::class,
        Underline::class,
        UnorderedList::class,
        Variable::class,
    ];

    /**
     * Specifies the value associated with the element. The meaning and usage may vary depending on the element type.
     */
    public ?string $value = null;

    /**
     * Defines the semantic purpose of an element for assistive technologies.
     */
    public ?RoleEnum $role = null;

    /**
     * Identifies the element(s) whose contents or presence are controlled by this element. Value is a list of IDs separated by a space
     */
    public ?string $ariaControls = null;

    /**
     * Identifies the element(s) that describes the object. Value is a list of IDs separated by a space
     */
    public ?string $ariaDescribedby = null;

    /**
     * Identifies the element(s) that labels the current element. Value is a list of IDs separated by a space
     */
    public ?string $ariaLabelledby = null;

    /**
     * Indicates the current item within a container or set of related elements.
     * @example false
     */
    public ?AriaCurrentEnum $ariaCurrent = null;

    /**
     * The aria-busy attribute is used to indicate whether an element is currently busy or not.
     * @example false
     */
    public ?AriaBusyEnum $ariaBusy = null;

    /**
     * Indicates whether the element is exposed to an accessibility API. Use with caution on interactive elements. Set to true only on decorative elements such as icons, or when nav isnt visible
     * @example false
     */
    public ?AriaHiddenEnum $ariaHidden = null;

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

    public function setRole(string|RoleEnum $role): static
    {
        if (is_string($role)) {
            $role = RoleEnum::tryFrom($role) ?? throw new InvalidArgumentException('Invalid value for $role.');
        }
        $this->role = $role;
        $this->delegated->setAttribute('role', (string) $role->value);

        return $this;
    }

    public function getRole(): ?RoleEnum
    {
        return $this->role;
    }

    public function setAriaControls(string $ariaControls): static
    {
        $this->ariaControls = $ariaControls;
        $this->delegated->setAttribute('aria-controls', (string) $ariaControls);
        return $this;
    }

    public function getAriaControls(): ?string
    {
        return $this->ariaControls;
    }

    public function setAriaDescribedby(string $ariaDescribedby): static
    {
        $this->ariaDescribedby = $ariaDescribedby;
        $this->delegated->setAttribute('aria-describedby', (string) $ariaDescribedby);
        return $this;
    }

    public function getAriaDescribedby(): ?string
    {
        return $this->ariaDescribedby;
    }

    public function setAriaLabelledby(string $ariaLabelledby): static
    {
        $this->ariaLabelledby = $ariaLabelledby;
        $this->delegated->setAttribute('aria-labelledby', (string) $ariaLabelledby);
        return $this;
    }

    public function getAriaLabelledby(): ?string
    {
        return $this->ariaLabelledby;
    }

    public function setAriaCurrent(string|AriaCurrentEnum $ariaCurrent): static
    {
        if (is_string($ariaCurrent)) {
            $ariaCurrent = AriaCurrentEnum::tryFrom($ariaCurrent) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaCurrent.'
            );
        }
        $this->ariaCurrent = $ariaCurrent;
        $this->delegated->setAttribute('aria-current', (string) $ariaCurrent->value);

        return $this;
    }

    public function getAriaCurrent(): ?AriaCurrentEnum
    {
        return $this->ariaCurrent;
    }

    public function setAriaBusy(string|AriaBusyEnum $ariaBusy): static
    {
        if (is_string($ariaBusy)) {
            $ariaBusy = AriaBusyEnum::tryFrom($ariaBusy) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaBusy.'
            );
        }
        $this->ariaBusy = $ariaBusy;
        $this->delegated->setAttribute('aria-busy', (string) $ariaBusy->value);

        return $this;
    }

    public function getAriaBusy(): ?AriaBusyEnum
    {
        return $this->ariaBusy;
    }

    public function setAriaHidden(string|AriaHiddenEnum $ariaHidden): static
    {
        if (is_string($ariaHidden)) {
            $ariaHidden = AriaHiddenEnum::tryFrom($ariaHidden) ?? throw new InvalidArgumentException(
                'Invalid value for $ariaHidden.'
            );
        }
        $this->ariaHidden = $ariaHidden;
        $this->delegated->setAttribute('aria-hidden', (string) $ariaHidden->value);

        return $this;
    }

    public function getAriaHidden(): ?AriaHiddenEnum
    {
        return $this->ariaHidden;
    }
}
