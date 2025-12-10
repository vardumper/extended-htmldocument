<?php

namespace Html\TwigTwigComponentBundle\Twig\Inline;

use Html\Enum\{
    ARoleEnum,
    AriaAtomicEnum,
    AriaBusyEnum,
    AriaCurrentEnum,
    AriaDisabledEnum,
    AriaExpandedEnum,
    AriaHaspopupEnum,
    AriaLiveEnum,
    AriaPressedEnum,
    AriaRelevantEnum,
    AutoCapitalizeEnum,
    ContentEditableEnum,
    DirectionEnum,
    InputModeEnum,
    PopoverEnum,
    RelEnum,
    SpellCheckEnum,
    TargetEnum,
    TranslateEnum,
};
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;

/**
 * A - The a element represents a hyperlink, linking to another resource.
 *
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('A', template: '@HtmlTwigComponent/inline/a/a.html.twig')]
class A
{
    public ?string $download = null;

    public ?string $href = null;

    public ?string $hreflang = null;

    public ?RelEnum $rel = null;

    public ?TargetEnum $target = null;

    public ?string $type = null;

    public ?ARoleEnum $role = null;

    public ?string $ariaControls = null;

    public ?string $ariaDescribedby = null;

    public ?string $ariaLabelledby = null;

    public ?AriaCurrentEnum $ariaCurrent = null;

    public ?AriaBusyEnum $ariaBusy = null;

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

        $resolver->setAllowedTypes('download', ['string']);
        $resolver->setAllowedTypes('href', ['string']);
        $resolver->setAllowedTypes('hreflang', ['string']);
        $resolver->setAllowedTypes('rel', ['null', 'string', RelEnum::class]);
        $resolver->setNormalizer('rel', function ($options, $value) {
            if (is_string($value)) {
                return RelEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('target', ['null', 'string', TargetEnum::class]);
        $resolver->setNormalizer('target', function ($options, $value) {
            if (is_string($value)) {
                return TargetEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('type', ['string']);
        $resolver->setAllowedTypes('role', ['null', 'string', ARoleEnum::class]);
        $resolver->setNormalizer('role', function ($options, $value) {
            if (is_string($value)) {
                return ARoleEnum::tryFrom($value);
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
        $resolver->setAllowedTypes('ariaBusy', ['null', 'string', AriaBusyEnum::class]);
        $resolver->setNormalizer('ariaBusy', function ($options, $value) {
            if (is_string($value)) {
                return AriaBusyEnum::tryFrom($value);
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
