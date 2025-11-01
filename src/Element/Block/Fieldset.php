<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Fieldset - The fieldset element represents a set of form controls optionally grouped under a common name.
 * 
 * @generated 2025-11-01 20:20:24
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/fieldset
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Body;
use Html\Element\Block\DataList;
use Html\Element\Block\Form;
use Html\Element\Block\Legend;
use Html\Element\Block\Paragraph;
use Html\Element\Inline\Button;
use Html\Element\Inline\Input;
use Html\Element\Inline\Label;
use Html\Element\Inline\Meter;
use Html\Element\Inline\Output;
use Html\Element\Inline\Progress;
use Html\Element\Inline\Select;
use Html\Element\Inline\Textarea;
use Html\Enum\AriaBusyEnum;
use Html\Enum\AriaDisabledEnum;
use Html\Enum\AriaHiddenEnum;
use Html\Enum\AriaInvalidEnum;
use Html\Enum\AutocorrectEnum;
use Html\Enum\RoleEnum;
use Html\Trait\GlobalAttribute;
use Html\Mapping\Element;

#[Element('fieldset')]
class Fieldset extends BlockElement
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
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'fieldset';

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
        Body::class,
        Form::class,
        Paragraph::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
        Button::class,
        DataList::class,
        Input::class,
        Label::class,
        Legend::class,
        Meter::class,
        Output::class,
        Progress::class,
        Select::class,
        Textarea::class,
    ];


    /** 
     * Specifies controls whether autocorrection of editable text is enabled for spelling and/or punctuation errors. Default is on.
     * @category HTML attribute
     * @example on
     */
    public ?AutocorrectEnum $autocorrect = null;

    /** Array */
    public ?RoleEnum $role = null;

    /** Identifies the element(s) whose contents or presence are controlled by this element. Value is a list of IDs separated by a space */
    public ?string $ariaControls = null;

    /** Identifies the element(s) that describes the object. Value is a list of IDs separated by a space */
    public ?string $ariaDescribedby = null;

    /** Identifies the element(s) that labels the current element. Value is a list of IDs separated by a space */
    public ?string $ariaLabelledby = null;

    /** 
     * The aria-busy attribute is used to indicate whether an element is currently busy or not.
     * @category HTML attribute
     * @example false
     */
    public ?AriaBusyEnum $ariaBusy = null;

    /** 
     * Indicates whether the element is exposed to an accessibility API. Use with caution on interactive elements. Set to true only on decorative elements such as icons, or when nav isnt visible
     * @category HTML attribute
     * @example false
     */
    public ?AriaHiddenEnum $ariaHidden = null;

    /** 
     * Indicates that the value entered does not conform to the expected format.
     * @category HTML attribute
     * @example false
     */
    public ?AriaInvalidEnum $ariaInvalid = null;

    /** 
     * Indicates that the element is perceivable but disabled, so it is not editable or otherwise operable.
     * @category HTML attribute
     * @example false
     */
    public ?AriaDisabledEnum $ariaDisabled = null;


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

    public function setRole(string|RoleEnum $role): static
    {
        if (is_string($role)) {
            $role = RoleEnum::tryFrom($role) ?? throw new \InvalidArgumentException("Invalid value for \$role.");
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

    public function setAriaBusy(string|AriaBusyEnum $ariaBusy): static
    {
        if (is_string($ariaBusy)) {
            $ariaBusy = AriaBusyEnum::tryFrom($ariaBusy) ?? throw new \InvalidArgumentException("Invalid value for \$ariaBusy.");
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
            $ariaHidden = AriaHiddenEnum::tryFrom($ariaHidden) ?? throw new \InvalidArgumentException("Invalid value for \$ariaHidden.");
        }
        $this->ariaHidden = $ariaHidden;
        $this->delegated->setAttribute('aria-hidden', (string) $ariaHidden->value);

        return $this;
    }

    public function getAriaHidden(): ?AriaHiddenEnum
    {
        return $this->ariaHidden;
    }

    public function setAriaInvalid(string|AriaInvalidEnum $ariaInvalid): static
    {
        if (is_string($ariaInvalid)) {
            $ariaInvalid = AriaInvalidEnum::tryFrom($ariaInvalid) ?? throw new \InvalidArgumentException("Invalid value for \$ariaInvalid.");
        }
        $this->ariaInvalid = $ariaInvalid;
        $this->delegated->setAttribute('aria-invalid', (string) $ariaInvalid->value);

        return $this;
    }

    public function getAriaInvalid(): ?AriaInvalidEnum
    {
        return $this->ariaInvalid;
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
