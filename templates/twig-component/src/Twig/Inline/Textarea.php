<?php

namespace Html\TwigComponentBundle\Twig\Inline;

use Html\Enum\{
    AutocompleteEnum,
    AutocorrectEnum,
    WrapEnum,
    RoleEnum,
    AriaInvalidEnum,
    AriaDisabledEnum,
    AriaLiveEnum,
    AriaRelevantEnum,
    AriaAtomicEnum,
    AriaExpandedEnum,
    AriaHaspopupEnum,
    AriaPressedEnum,
    AriaAutocompleteEnum,
    AriaReadonlyEnum,
    AriaRequiredEnum,
    AriaMultilineEnum,
    AutoCapitalizeEnum,
    ContentEditableEnum,
    DirectionEnum,
    InputModeEnum,
    SpellCheckEnum,
    TranslateEnum,
    PopoverEnum,
};
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Textarea - 
 *
 * @author vardumper <info@erikpoehler.com>
 * @package Html\TwigComponentBundle
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Textarea', template: '@HtmlTwigComponent/inline/textarea/textarea.html.twig')]
class Textarea
{
    public ?AutocompleteEnum $autocomplete = null;
    public ?AutocorrectEnum $autocorrect = null;
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
    public ?WrapEnum $wrap = null;
    public ?RoleEnum $role = null;
    public ?string $ariaControls = null;
    public ?string $ariaDescribedby = null;
    public ?string $ariaLabelledby = null;
    public ?AriaInvalidEnum $ariaInvalid = null;
    public ?string $ariaLabel = null;
    public ?AriaDisabledEnum $ariaDisabled = null;
    public ?string $ariaDetails = null;
    public ?string $ariaKeyshortcuts = null;
    public ?string $ariaRoledescription = null;
    public ?AriaLiveEnum $ariaLive = null;
    public ?AriaRelevantEnum $ariaRelevant = null;
    public ?AriaAtomicEnum $ariaAtomic = null;
    public ?AriaExpandedEnum $ariaExpanded = null;
    public ?AriaHaspopupEnum $ariaHaspopup = null;
    public ?AriaPressedEnum $ariaPressed = null;
    public ?AriaAutocompleteEnum $ariaAutocomplete = null;
    public ?string $ariaPlaceholder = null;
    public ?AriaReadonlyEnum $ariaReadonly = null;
    public ?AriaRequiredEnum $ariaRequired = null;
    public ?AriaMultilineEnum $ariaMultiline = null;
    public ?string $accesskey = null;
    public ?AutoCapitalizeEnum $autocapitalize = null;
    public null|string|bool $autofocus = null;
    public ?ContentEditableEnum $contenteditable = null;
    public ?DirectionEnum $dir = null;
    public null|string|bool $draggable = null;
    public null|string|bool $hidden = null;
    public ?InputModeEnum $inputmode = null;
    public ?string $lang = null;
    public ?string $slot = null;
    public ?SpellCheckEnum $spellcheck = null;
    public ?string $style = null;
    public ?int $tabindex = null;
    public ?string $title = null;
    public ?TranslateEnum $translate = null;
    public ?PopoverEnum $popover = null;
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
        $resolver->setAllowedTypes('cols', ['int']);
        $resolver->setAllowedTypes('dirname', ['string']);
        $resolver->setAllowedTypes('disabled', ['bool']);
        $resolver->setAllowedTypes('form', ['string']);
        $resolver->setAllowedTypes('maxlength', ['int']);
        $resolver->setAllowedTypes('minlength', ['int']);
        $resolver->setAllowedTypes('name', ['string']);
        $resolver->setAllowedTypes('placeholder', ['string']);
        $resolver->setAllowedTypes('readonly', ['bool']);
        $resolver->setAllowedTypes('required', ['bool']);
        $resolver->setAllowedTypes('rows', ['int']);
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
        $resolver->setAllowedTypes('ariaControls', ['string']);
        $resolver->setAllowedTypes('ariaDescribedby', ['string']);
        $resolver->setAllowedTypes('ariaLabelledby', ['string']);
        $resolver->setAllowedTypes('ariaInvalid', ['null', 'string', AriaInvalidEnum::class]);
        $resolver->setNormalizer('ariaInvalid', function ($options, $value) {
            if (is_string($value)) {
                return AriaInvalidEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaLabel', ['string']);
        $resolver->setAllowedTypes('ariaDisabled', ['null', 'string', AriaDisabledEnum::class]);
        $resolver->setNormalizer('ariaDisabled', function ($options, $value) {
            if (is_string($value)) {
                return AriaDisabledEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaDetails', ['string']);
        $resolver->setAllowedTypes('ariaKeyshortcuts', ['string']);
        $resolver->setAllowedTypes('ariaRoledescription', ['string']);
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
        $resolver->setAllowedTypes('ariaPlaceholder', ['string']);
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
        $resolver->setAllowedTypes('accesskey', ['string']);
        $resolver->setAllowedTypes('autocapitalize', ['null', 'string', AutoCapitalizeEnum::class]);
        $resolver->setNormalizer('autocapitalize', function ($options, $value) {
            if (is_string($value)) {
                return AutoCapitalizeEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('autofocus', ['null', 'string', 'bool']);
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
        $resolver->setAllowedTypes('draggable', ['null', 'string', 'bool']);
        $resolver->setAllowedTypes('hidden', ['null', 'string', 'bool']);
        $resolver->setAllowedTypes('inputmode', ['null', 'string', InputModeEnum::class]);
        $resolver->setNormalizer('inputmode', function ($options, $value) {
            if (is_string($value)) {
                return InputModeEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('lang', ['string']);
        $resolver->setAllowedTypes('slot', ['string']);
        $resolver->setAllowedTypes('spellcheck', ['null', 'string', SpellCheckEnum::class]);
        $resolver->setNormalizer('spellcheck', function ($options, $value) {
            if (is_string($value)) {
                return SpellCheckEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('style', ['string']);
        $resolver->setAllowedTypes('tabindex', ['int']);
        $resolver->setAllowedTypes('title', ['string']);
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
