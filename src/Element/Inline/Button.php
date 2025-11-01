<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Button - The button element represents a clickable button, used to submit forms or anywhere in a document for accessible, standard button functionality.
 * 
 * @generated 2025-11-01 20:20:24
 * @category HTML
 * @package vardumper/extended-htmldocument
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
use Html\Element\Inline\MarkedText;
use Html\Element\Inline\Slot;
use Html\Enum\AriaBusyEnum;
use Html\Enum\AriaCurrentEnum;
use Html\Enum\AriaDisabledEnum;
use Html\Enum\AriaLabelEnum;
use Html\Enum\AutocorrectEnum;
use Html\Enum\ButtonTypeEnum;
use Html\Enum\RoleEnum;
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

#[Element('button')]
class Button extends InlineElement
{
    use GlobalAttribute\AutofocusTrait;
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
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'button';

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
    public static array $parentOf = [
    ];


    /** When present, it specifies that an element should automatically get focus when the page loads. */
    public ?bool $autofocus = null;

    /** 
     * Specifies controls whether autocorrection of editable text is enabled for spelling and/or punctuation errors. Default is on.
     * @category HTML attribute
     * @example on
     */
    public ?AutocorrectEnum $autocorrect = null;

    /** When present, it specifies that an input element should be disabled. */
    public ?bool $disabled = null;

    /** Specifies the name associated with the element. The meaning may vary depending on the context. */
    public ?string $name = null;

    /** Specifies the type of the button. */
    public ?ButtonTypeEnum $type = null;

    /** Specifies the value associated with the element. The meaning and usage may vary depending on the element type. */
    public ?string $value = null;

    /** Defines the semantic purpose of an element for assistive technologies. */
    public null|string|RoleEnum $role = null;

    /** Identifies the element(s) whose contents or presence are controlled by this element. Value is a list of IDs separated by a space */
    public ?string $ariaControls = null;

    /** Identifies the element(s) that describes the object. Value is a list of IDs separated by a space */
    public ?string $ariaDescribedby = null;

    /** Identifies the element(s) that labels the current element. Value is a list of IDs separated by a space */
    public ?string $ariaLabelledby = null;

    /** 
     * Indicates the current item within a container or set of related elements.
     * @category HTML attribute
     * @example false
     */
    public null|string|AriaCurrentEnum $ariaCurrent = null;

    /** 
     * The aria-busy attribute is used to indicate whether an element is currently busy or not.
     * @category HTML attribute
     * @example false
     */
    public null|string|AriaBusyEnum $ariaBusy = null;

    /** Defines a string value that labels the current element for assistive technologies. */
    public null|string|AriaLabelEnum $ariaLabel = null;

    /** 
     * Indicates that the element is perceivable but disabled, so it is not editable or otherwise operable.
     * @category HTML attribute
     * @example false
     */
    public ?AriaDisabledEnum $ariaDisabled = null;


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

    public function setAutocorrect(string|AutocorrectEnum $autocorrect): static
    {
        if (is_string($autocorrect)) {
            $autocorrect = AutocorrectEnum::tryFrom($autocorrect) ?? throw new \InvalidArgumentException("Invalid value for \$autocorrect.");
        }
        $this->autocorrect = $autocorrect;
        $this->delegated->setAttribute('autocorrect', (string) $autocorrect->value);

        return $this;
    }

    public function getAutocorrect(): ?AutocorrectEnum
    {
        return $this->autocorrect;
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

    public function setType(string|ButtonTypeEnum $type): static
    {
        if (is_string($type)) {
            $type = ButtonTypeEnum::tryFrom($type) ?? throw new \InvalidArgumentException("Invalid value for \$type.");
        }
        $this->type = $type;
        $this->delegated->setAttribute('type', (string) $type->value);

        return $this;
    }

    public function getType(): ?ButtonTypeEnum
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

    public function setRole(string|RoleEnum $role): static
    {
        $value = $role;
        if (is_string($role)) {
            $resolved = RoleEnum::tryFrom($role);
            if (!is_null($resolved)) {
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

    public function getRole(): null|string|RoleEnum
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
        $value = $ariaCurrent;
        if (is_string($ariaCurrent)) {
            $resolved = AriaCurrentEnum::tryFrom($ariaCurrent);
            if (!is_null($resolved)) {
                $ariaCurrent = $resolved;
            }
        }
        if ($ariaCurrent instanceof AriaCurrentEnum) {
            $value = $ariaCurrent->value;
        }
        $this->ariaCurrent = $ariaCurrent;
        $this->delegated->setAttribute('aria-current', (string) $value);

        return $this;
    }

    public function getAriaCurrent(): null|string|AriaCurrentEnum
    {
        return $this->ariaCurrent;
    }

    public function setAriaBusy(string|AriaBusyEnum $ariaBusy): static
    {
        $value = $ariaBusy;
        if (is_string($ariaBusy)) {
            $resolved = AriaBusyEnum::tryFrom($ariaBusy);
            if (!is_null($resolved)) {
                $ariaBusy = $resolved;
            }
        }
        if ($ariaBusy instanceof AriaBusyEnum) {
            $value = $ariaBusy->value;
        }
        $this->ariaBusy = $ariaBusy;
        $this->delegated->setAttribute('aria-busy', (string) $value);

        return $this;
    }

    public function getAriaBusy(): null|string|AriaBusyEnum
    {
        return $this->ariaBusy;
    }

    public function setAriaLabel(string|AriaLabelEnum $ariaLabel): static
    {
        $value = $ariaLabel;
        if (is_string($ariaLabel)) {
            $resolved = AriaLabelEnum::tryFrom($ariaLabel);
            if (!is_null($resolved)) {
                $ariaLabel = $resolved;
            }
        }
        if ($ariaLabel instanceof AriaLabelEnum) {
            $value = $ariaLabel->value;
        }
        $this->ariaLabel = $ariaLabel;
        $this->delegated->setAttribute('aria-label', (string) $value);

        return $this;
    }

    public function getAriaLabel(): null|string|AriaLabelEnum
    {
        return $this->ariaLabel;
    }

    public function setAriaDisabled(string|AriaDisabledEnum $ariaDisabled): static
    {
        if (is_string($ariaDisabled)) {
            $ariaDisabled = AriaDisabledEnum::tryFrom($ariaDisabled) ?? throw new \InvalidArgumentException("Invalid value for \$ariaDisabled.");
        }
        $this->ariaDisabled = $ariaDisabled;
        $this->delegated->setAttribute('aria-disabled', (string) $ariaDisabled->value);

        return $this;
    }

    public function getAriaDisabled(): ?AriaDisabledEnum
    {
        return $this->ariaDisabled;
    }

}
