<?php

namespace Html\TwigComponentBundle\Twig\Inline;

use Html\Enum\{
    AutocorrectEnum,
    AutocompleteEnum,
    InputTypeEnum,
    FormenctypeEnum,
    FormmethodEnum,
    FormtargetEnum,
    PopovertargetactionEnum,
    RoleEnum,
    AriaCurrentEnum,
    AriaInvalidEnum,
    AriaDisabledEnum,
    AriaLiveEnum,
    AriaRelevantEnum,
    AriaAtomicEnum,
    AriaExpandedEnum,
    AriaHaspopupEnum,
    AriaPressedEnum,
    AriaCheckedEnum,
    AriaAutocompleteEnum,
    AriaReadonlyEnum,
    AriaRequiredEnum,
    AutoCapitalizeEnum,
    ContentEditableEnum,
    DirectionEnum,
    InputModeEnum,
    SpellCheckEnum,
    TranslateEnum,
};
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Input - 
 *
 * @author vardumper <info@erikpoehler.com>
 * @package Html\TwigComponentBundle
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Input', template: '@HtmlTwigComponent/inline/input/input.html.twig')]
class Input
{
    public ?string $accept = null;
    public ?AutocorrectEnum $autocorrect = null;
    public ?string $alt = null;
    public ?AutocompleteEnum $autocomplete = null;
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
    public ?InputTypeEnum $type = null;
    public ?string $value = null;
    public ?string $width = null;
    public ?string $form = null;
    public ?string $formaction = null;
    public ?FormenctypeEnum $formenctype = null;
    public ?FormmethodEnum $formmethod = null;
    public ?bool $formnovalidate = null;
    public ?FormtargetEnum $formtarget = null;
    public ?string $popovertarget = null;
    public ?PopovertargetactionEnum $popovertargetaction = null;
    public ?RoleEnum $role = null;
    public ?string $ariaControls = null;
    public ?string $ariaDescribedby = null;
    public ?string $ariaLabelledby = null;
    public ?AriaCurrentEnum $ariaCurrent = null;
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
    public ?AriaCheckedEnum $ariaChecked = null;
    public ?AriaAutocompleteEnum $ariaAutocomplete = null;
    public ?string $ariaPlaceholder = null;
    public ?AriaReadonlyEnum $ariaReadonly = null;
    public ?AriaRequiredEnum $ariaRequired = null;
    public ?int $ariaValuemax = null;
    public ?int $ariaValuemin = null;
    public ?int $ariaValuenow = null;
    public ?string $ariaValuetext = null;
    public ?string $accesskey = null;
    public ?AutoCapitalizeEnum $autocapitalize = null;
    public null|string|bool $autofocus = null;
    public ?ContentEditableEnum $contenteditable = null;
    public ?DirectionEnum $dir = null;
    public null|string|bool $draggable = null;
    public null|string|bool $hidden = null;
    public ?InputModeEnum $inputmode = null;
    public ?string $lang = null;
    public ?SpellCheckEnum $spellcheck = null;
    public ?string $style = null;
    public ?int $tabindex = null;
    public ?string $title = null;
    public ?TranslateEnum $translate = null;
    public ?string $id = null;
    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('accept', ['string']);
        $resolver->setAllowedTypes('autocorrect', ['null', 'string', AutocorrectEnum::class]);
        $resolver->setNormalizer('autocorrect', function ($options, $value) {
            if (is_string($value)) {
                return AutocorrectEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('alt', ['string']);
        $resolver->setAllowedTypes('autocomplete', ['null', 'string', AutocompleteEnum::class]);
        $resolver->setNormalizer('autocomplete', function ($options, $value) {
            if (is_string($value)) {
                return AutocompleteEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('checked', ['bool']);
        $resolver->setAllowedTypes('dirname', ['string']);
        $resolver->setAllowedTypes('disabled', ['bool']);
        $resolver->setAllowedTypes('height', ['string']);
        $resolver->setAllowedTypes('list', ['string']);
        $resolver->setAllowedTypes('max', ['int']);
        $resolver->setAllowedTypes('maxlength', ['int']);
        $resolver->setAllowedTypes('min', ['string']);
        $resolver->setAllowedTypes('minlength', ['int']);
        $resolver->setAllowedTypes('multiple', ['bool']);
        $resolver->setAllowedTypes('name', ['string']);
        $resolver->setAllowedTypes('pattern', ['string']);
        $resolver->setAllowedTypes('placeholder', ['string']);
        $resolver->setAllowedTypes('readonly', ['bool']);
        $resolver->setAllowedTypes('required', ['bool']);
        $resolver->setAllowedTypes('size', ['int']);
        $resolver->setAllowedTypes('src', ['string']);
        $resolver->setAllowedTypes('step', ['string']);
        $resolver->setAllowedTypes('type', ['null', 'string', InputTypeEnum::class]);
        $resolver->setNormalizer('type', function ($options, $value) {
            if (is_string($value)) {
                return InputTypeEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('value', ['string']);
        $resolver->setAllowedTypes('width', ['string']);
        $resolver->setAllowedTypes('form', ['string']);
        $resolver->setAllowedTypes('formaction', ['string']);
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
        $resolver->setAllowedTypes('formnovalidate', ['bool']);
        $resolver->setAllowedTypes('formtarget', ['null', 'string', FormtargetEnum::class]);
        $resolver->setNormalizer('formtarget', function ($options, $value) {
            if (is_string($value)) {
                return FormtargetEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('popovertarget', ['string']);
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
        $resolver->setAllowedTypes('ariaControls', ['string']);
        $resolver->setAllowedTypes('ariaDescribedby', ['string']);
        $resolver->setAllowedTypes('ariaLabelledby', ['string']);
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
        $resolver->setAllowedTypes('ariaValuemax', ['int']);
        $resolver->setAllowedTypes('ariaValuemin', ['int']);
        $resolver->setAllowedTypes('ariaValuenow', ['int']);
        $resolver->setAllowedTypes('ariaValuetext', ['string']);
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
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}
