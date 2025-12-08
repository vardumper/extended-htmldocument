<?php

namespace App\Twig\Components;

use Html\Enum\AutocorrectEnum;
use Html\Enum\AutocompleteEnum;
use Html\Enum\InputTypeEnum;
use Html\Enum\FormenctypeEnum;
use Html\Enum\FormmethodEnum;
use Html\Enum\FormtargetEnum;
use Html\Enum\PopovertargetactionEnum;
use Html\Enum\RoleEnum;
use Html\Enum\AriaCurrentEnum;
use Html\Enum\AriaInvalidEnum;
use Html\Enum\AriaDisabledEnum;
use Html\Enum\AriaLiveEnum;
use Html\Enum\AriaRelevantEnum;
use Html\Enum\AriaAtomicEnum;
use Html\Enum\AriaExpandedEnum;
use Html\Enum\AriaHaspopupEnum;
use Html\Enum\AriaPressedEnum;
use Html\Enum\AriaCheckedEnum;
use Html\Enum\AriaAutocompleteEnum;
use Html\Enum\AriaReadonlyEnum;
use Html\Enum\AriaRequiredEnum;
use Html\Enum\AutoCapitalizeEnum;
use Html\Enum\ContentEditableEnum;
use Html\Enum\DirectionEnum;
use Html\Enum\InputModeEnum;
use Html\Enum\SpellCheckEnum;
use Html\Enum\TranslateEnum;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Input - The input element represents a typed data field, usually with a form control to allow user input.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package vardumper/extended-htmldocument
 * @see src/TemplateGenerator/TwigComponentsGenerator.php
 */
#[AsTwigComponent('Input')]
class Input
{
    public ?string $accept = null;
    public ?Html\Enum\AutocorrectEnum $autocorrect = null;
    public ?string $alt = null;
    public ?Html\Enum\AutocompleteEnum $autocomplete = null;
    public ?bool $checked = null;
    public ?string $dirname = null;
    public ?bool $disabled = null;
    public ?string $height = null;
    public ?string $list = null;
    public ?int $max = null;
    public ?int $maxlength = null;
    public ?string $min = null;
    public ?int $minlength = null;
    public ?bool $multiple = null;
    public ?string $name = null;
    public ?string $pattern = null;
    public ?string $placeholder = null;
    public ?bool $readonly = null;
    public ?bool $required = null;
    public ?int $size = null;
    public ?string $src = null;
    public ?string $step = null;
    public ?Html\Enum\InputTypeEnum $type = null;
    public ?string $value = null;
    public ?string $width = null;
    public ?string $form = null;
    public ?string $formaction = null;
    public ?Html\Enum\FormenctypeEnum $formenctype = null;
    public ?Html\Enum\FormmethodEnum $formmethod = null;
    public ?bool $formnovalidate = null;
    public ?Html\Enum\FormtargetEnum $formtarget = null;
    public ?string $popovertarget = null;
    public ?Html\Enum\PopovertargetactionEnum $popovertargetaction = null;
    public ?Html\Enum\RoleEnum $role = null;
    public ?string $ariaControls = null;
    public ?string $ariaDescribedby = null;
    public ?string $ariaLabelledby = null;
    public ?Html\Enum\AriaCurrentEnum $ariaCurrent = null;
    public ?Html\Enum\AriaInvalidEnum $ariaInvalid = null;
    public ?string $ariaLabel = null;
    public ?Html\Enum\AriaDisabledEnum $ariaDisabled = null;
    public ?string $ariaDetails = null;
    public ?string $ariaKeyshortcuts = null;
    public ?string $ariaRoledescription = null;
    public ?Html\Enum\AriaLiveEnum $ariaLive = null;
    public ?Html\Enum\AriaRelevantEnum $ariaRelevant = null;
    public ?Html\Enum\AriaAtomicEnum $ariaAtomic = null;
    public ?Html\Enum\AriaExpandedEnum $ariaExpanded = null;
    public ?Html\Enum\AriaHaspopupEnum $ariaHaspopup = null;
    public ?Html\Enum\AriaPressedEnum $ariaPressed = null;
    public ?Html\Enum\AriaCheckedEnum $ariaChecked = null;
    public ?Html\Enum\AriaAutocompleteEnum $ariaAutocomplete = null;
    public ?string $ariaPlaceholder = null;
    public ?Html\Enum\AriaReadonlyEnum $ariaReadonly = null;
    public ?Html\Enum\AriaRequiredEnum $ariaRequired = null;
    public ?int $ariaValuemax = null;
    public ?int $ariaValuemin = null;
    public ?int $ariaValuenow = null;
    public ?string $ariaValuetext = null;
    public ?string $accesskey = null;
    public ?Html\Enum\AutoCapitalizeEnum $autocapitalize = null;
    public ?bool $autofocus = null;
    public ?Html\Enum\ContentEditableEnum $contenteditable = null;
    public ?Html\Enum\DirectionEnum $dir = null;
    public ?bool $draggable = null;
    public ?bool $hidden = null;
    public ?Html\Enum\InputModeEnum $inputmode = null;
    public ?string $lang = null;
    public ?Html\Enum\SpellCheckEnum $spellcheck = null;
    public ?string $style = null;
    public ?int $tabindex = null;
    public ?string $title = null;
    public ?Html\Enum\TranslateEnum $translate = null;
    public ?string $id = null;
    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('accept', ['null', 'string']);
        $resolver->setAllowedTypes('autocorrect', ['null', 'string', AutocorrectEnum::class]);
        $resolver->setNormalizer('autocorrect', function ($options, $value) {
            if (is_string($value)) {
                return AutocorrectEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('alt', ['null', 'string']);
        $resolver->setAllowedTypes('autocomplete', ['null', 'string', AutocompleteEnum::class]);
        $resolver->setNormalizer('autocomplete', function ($options, $value) {
            if (is_string($value)) {
                return AutocompleteEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('checked', ['null', 'string']);
        $resolver->setAllowedTypes('dirname', ['null', 'string']);
        $resolver->setAllowedTypes('disabled', ['null', 'string']);
        $resolver->setAllowedTypes('height', ['null', 'string']);
        $resolver->setAllowedTypes('list', ['null', 'string']);
        $resolver->setAllowedTypes('max', ['null', 'string']);
        $resolver->setAllowedTypes('maxlength', ['null', 'string']);
        $resolver->setAllowedTypes('min', ['null', 'string']);
        $resolver->setAllowedTypes('minlength', ['null', 'string']);
        $resolver->setAllowedTypes('multiple', ['null', 'string']);
        $resolver->setAllowedTypes('name', ['null', 'string']);
        $resolver->setAllowedTypes('pattern', ['null', 'string']);
        $resolver->setAllowedTypes('placeholder', ['null', 'string']);
        $resolver->setAllowedTypes('readonly', ['null', 'string']);
        $resolver->setAllowedTypes('required', ['null', 'string']);
        $resolver->setAllowedTypes('size', ['null', 'string']);
        $resolver->setAllowedTypes('src', ['null', 'string']);
        $resolver->setAllowedTypes('step', ['null', 'string']);
        $resolver->setAllowedTypes('type', ['null', 'string', InputTypeEnum::class]);
        $resolver->setNormalizer('type', function ($options, $value) {
            if (is_string($value)) {
                return InputTypeEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('value', ['null', 'string']);
        $resolver->setAllowedTypes('width', ['null', 'string']);
        $resolver->setAllowedTypes('form', ['null', 'string']);
        $resolver->setAllowedTypes('formaction', ['null', 'string']);
        $resolver->setAllowedTypes('formenctype', ['null', 'string', FormenctypeEnum::class]);
        $resolver->setNormalizer('formenctype', function ($options, $value) {
            if (is_string($value)) {
                return FormenctypeEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('formmethod', ['null', 'string', FormmethodEnum::class]);
        $resolver->setNormalizer('formmethod', function ($options, $value) {
            if (is_string($value)) {
                return FormmethodEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('formnovalidate', ['null', 'string']);
        $resolver->setAllowedTypes('formtarget', ['null', 'string', FormtargetEnum::class]);
        $resolver->setNormalizer('formtarget', function ($options, $value) {
            if (is_string($value)) {
                return FormtargetEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('popovertarget', ['null', 'string']);
        $resolver->setAllowedTypes('popovertargetaction', ['null', 'string', PopovertargetactionEnum::class]);
        $resolver->setNormalizer('popovertargetaction', function ($options, $value) {
            if (is_string($value)) {
                return PopovertargetactionEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('role', ['null', 'string', RoleEnum::class]);
        $resolver->setNormalizer('role', function ($options, $value) {
            if (is_string($value)) {
                return RoleEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaControls', ['null', 'string']);
        $resolver->setAllowedTypes('ariaDescribedby', ['null', 'string']);
        $resolver->setAllowedTypes('ariaLabelledby', ['null', 'string']);
        $resolver->setAllowedTypes('ariaCurrent', ['null', 'string', AriaCurrentEnum::class]);
        $resolver->setNormalizer('ariaCurrent', function ($options, $value) {
            if (is_string($value)) {
                return AriaCurrentEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaInvalid', ['null', 'string', AriaInvalidEnum::class]);
        $resolver->setNormalizer('ariaInvalid', function ($options, $value) {
            if (is_string($value)) {
                return AriaInvalidEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaLabel', ['null', 'string']);
        $resolver->setAllowedTypes('ariaDisabled', ['null', 'string', AriaDisabledEnum::class]);
        $resolver->setNormalizer('ariaDisabled', function ($options, $value) {
            if (is_string($value)) {
                return AriaDisabledEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaDetails', ['null', 'string']);
        $resolver->setAllowedTypes('ariaKeyshortcuts', ['null', 'string']);
        $resolver->setAllowedTypes('ariaRoledescription', ['null', 'string']);
        $resolver->setAllowedTypes('ariaLive', ['null', 'string', AriaLiveEnum::class]);
        $resolver->setNormalizer('ariaLive', function ($options, $value) {
            if (is_string($value)) {
                return AriaLiveEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaRelevant', ['null', 'string', AriaRelevantEnum::class]);
        $resolver->setNormalizer('ariaRelevant', function ($options, $value) {
            if (is_string($value)) {
                return AriaRelevantEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaAtomic', ['null', 'string', AriaAtomicEnum::class]);
        $resolver->setNormalizer('ariaAtomic', function ($options, $value) {
            if (is_string($value)) {
                return AriaAtomicEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaExpanded', ['null', 'string', AriaExpandedEnum::class]);
        $resolver->setNormalizer('ariaExpanded', function ($options, $value) {
            if (is_string($value)) {
                return AriaExpandedEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaHaspopup', ['null', 'string', AriaHaspopupEnum::class]);
        $resolver->setNormalizer('ariaHaspopup', function ($options, $value) {
            if (is_string($value)) {
                return AriaHaspopupEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaPressed', ['null', 'string', AriaPressedEnum::class]);
        $resolver->setNormalizer('ariaPressed', function ($options, $value) {
            if (is_string($value)) {
                return AriaPressedEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaChecked', ['null', 'string', AriaCheckedEnum::class]);
        $resolver->setNormalizer('ariaChecked', function ($options, $value) {
            if (is_string($value)) {
                return AriaCheckedEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaAutocomplete', ['null', 'string', AriaAutocompleteEnum::class]);
        $resolver->setNormalizer('ariaAutocomplete', function ($options, $value) {
            if (is_string($value)) {
                return AriaAutocompleteEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaPlaceholder', ['null', 'string']);
        $resolver->setAllowedTypes('ariaReadonly', ['null', 'string', AriaReadonlyEnum::class]);
        $resolver->setNormalizer('ariaReadonly', function ($options, $value) {
            if (is_string($value)) {
                return AriaReadonlyEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaRequired', ['null', 'string', AriaRequiredEnum::class]);
        $resolver->setNormalizer('ariaRequired', function ($options, $value) {
            if (is_string($value)) {
                return AriaRequiredEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaValuemax', ['null', 'string']);
        $resolver->setAllowedTypes('ariaValuemin', ['null', 'string']);
        $resolver->setAllowedTypes('ariaValuenow', ['null', 'string']);
        $resolver->setAllowedTypes('ariaValuetext', ['null', 'string']);
        $resolver->setAllowedTypes('accesskey', ['null', 'string']);
        $resolver->setAllowedTypes('autocapitalize', ['null', 'string', AutoCapitalizeEnum::class]);
        $resolver->setNormalizer('autocapitalize', function ($options, $value) {
            if (is_string($value)) {
                return AutoCapitalizeEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('autofocus', ['null', 'string']);
        $resolver->setAllowedTypes('contenteditable', ['null', 'string', ContentEditableEnum::class]);
        $resolver->setNormalizer('contenteditable', function ($options, $value) {
            if (is_string($value)) {
                return ContentEditableEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('dir', ['null', 'string', DirectionEnum::class]);
        $resolver->setNormalizer('dir', function ($options, $value) {
            if (is_string($value)) {
                return DirectionEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('draggable', ['null', 'string']);
        $resolver->setAllowedTypes('hidden', ['null', 'string']);
        $resolver->setAllowedTypes('inputmode', ['null', 'string', InputModeEnum::class]);
        $resolver->setNormalizer('inputmode', function ($options, $value) {
            if (is_string($value)) {
                return InputModeEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('lang', ['null', 'string']);
        $resolver->setAllowedTypes('spellcheck', ['null', 'string', SpellCheckEnum::class]);
        $resolver->setNormalizer('spellcheck', function ($options, $value) {
            if (is_string($value)) {
                return SpellCheckEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('style', ['null', 'string']);
        $resolver->setAllowedTypes('tabindex', ['null', 'string']);
        $resolver->setAllowedTypes('title', ['null', 'string']);
        $resolver->setAllowedTypes('translate', ['null', 'string', TranslateEnum::class]);
        $resolver->setNormalizer('translate', function ($options, $value) {
            if (is_string($value)) {
                return TranslateEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}
