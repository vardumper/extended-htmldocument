<?php

namespace App\Twig\Components;

use Html\Enum\AutocompleteEnum;
use Html\Enum\AutocorrectEnum;
use Html\Enum\WrapEnum;
use Html\Enum\RoleEnum;
use Html\Enum\AriaInvalidEnum;
use Html\Enum\AriaDisabledEnum;
use Html\Enum\AriaLiveEnum;
use Html\Enum\AriaRelevantEnum;
use Html\Enum\AriaAtomicEnum;
use Html\Enum\AriaExpandedEnum;
use Html\Enum\AriaHaspopupEnum;
use Html\Enum\AriaPressedEnum;
use Html\Enum\AriaAutocompleteEnum;
use Html\Enum\AriaReadonlyEnum;
use Html\Enum\AriaRequiredEnum;
use Html\Enum\AriaMultilineEnum;
use Html\Enum\AutoCapitalizeEnum;
use Html\Enum\ContentEditableEnum;
use Html\Enum\DirectionEnum;
use Html\Enum\InputModeEnum;
use Html\Enum\SpellCheckEnum;
use Html\Enum\TranslateEnum;
use Html\Enum\PopoverEnum;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Textarea - The textarea element represents a multiline plain text edit control for the element's raw value.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package vardumper/extended-htmldocument
 * @see src/TemplateGenerator/TwigComponentsGenerator.php
 */
#[AsTwigComponent('Textarea')]
class Textarea
{
    public ?Html\Enum\AutocompleteEnum $autocomplete = null;
    public ?Html\Enum\AutocorrectEnum $autocorrect = null;
    public ?int $cols = null;
    public ?string $dirname = null;
    public ?bool $disabled = null;
    public ?string $form = null;
    public ?int $maxlength = null;
    public ?int $minlength = null;
    public ?string $name = null;
    public ?string $placeholder = null;
    public ?bool $readonly = null;
    public ?bool $required = null;
    public ?int $rows = null;
    public ?Html\Enum\WrapEnum $wrap = null;
    public ?Html\Enum\RoleEnum $role = null;
    public ?string $ariaControls = null;
    public ?string $ariaDescribedby = null;
    public ?string $ariaLabelledby = null;
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
    public ?Html\Enum\AriaAutocompleteEnum $ariaAutocomplete = null;
    public ?string $ariaPlaceholder = null;
    public ?Html\Enum\AriaReadonlyEnum $ariaReadonly = null;
    public ?Html\Enum\AriaRequiredEnum $ariaRequired = null;
    public ?Html\Enum\AriaMultilineEnum $ariaMultiline = null;
    public ?string $accesskey = null;
    public ?Html\Enum\AutoCapitalizeEnum $autocapitalize = null;
    public ?bool $autofocus = null;
    public ?Html\Enum\ContentEditableEnum $contenteditable = null;
    public ?Html\Enum\DirectionEnum $dir = null;
    public ?bool $draggable = null;
    public ?bool $hidden = null;
    public ?Html\Enum\InputModeEnum $inputmode = null;
    public ?string $lang = null;
    public ?string $slot = null;
    public ?Html\Enum\SpellCheckEnum $spellcheck = null;
    public ?string $style = null;
    public ?int $tabindex = null;
    public ?string $title = null;
    public ?Html\Enum\TranslateEnum $translate = null;
    public ?Html\Enum\PopoverEnum $popover = null;
    public ?string $id = null;
    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('autocomplete', ['null', 'string', AutocompleteEnum::class]);
        $resolver->setNormalizer('autocomplete', function ($options, $value) {
            if (is_string($value)) {
                return AutocompleteEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('autocorrect', ['null', 'string', AutocorrectEnum::class]);
        $resolver->setNormalizer('autocorrect', function ($options, $value) {
            if (is_string($value)) {
                return AutocorrectEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('cols', ['null', 'string']);
        $resolver->setAllowedTypes('dirname', ['null', 'string']);
        $resolver->setAllowedTypes('disabled', ['null', 'string']);
        $resolver->setAllowedTypes('form', ['null', 'string']);
        $resolver->setAllowedTypes('maxlength', ['null', 'string']);
        $resolver->setAllowedTypes('minlength', ['null', 'string']);
        $resolver->setAllowedTypes('name', ['null', 'string']);
        $resolver->setAllowedTypes('placeholder', ['null', 'string']);
        $resolver->setAllowedTypes('readonly', ['null', 'string']);
        $resolver->setAllowedTypes('required', ['null', 'string']);
        $resolver->setAllowedTypes('rows', ['null', 'string']);
        $resolver->setAllowedTypes('wrap', ['null', 'string', WrapEnum::class]);
        $resolver->setNormalizer('wrap', function ($options, $value) {
            if (is_string($value)) {
                return WrapEnum::tryFrom($value);
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
        $resolver->setAllowedTypes('ariaMultiline', ['null', 'string', AriaMultilineEnum::class]);
        $resolver->setNormalizer('ariaMultiline', function ($options, $value) {
            if (is_string($value)) {
                return AriaMultilineEnum::tryFrom($value);
            }
            return $value;
        });
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
        $resolver->setAllowedTypes('slot', ['null', 'string']);
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
        $resolver->setAllowedTypes('popover', ['null', 'string', PopoverEnum::class]);
        $resolver->setNormalizer('popover', function ($options, $value) {
            if (is_string($value)) {
                return PopoverEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}
