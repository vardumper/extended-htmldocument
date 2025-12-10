<?php

namespace Html\TwigTwigComponentBundle\Twig\Block;

use Html\Enum\{
    AriaAtomicEnum,
    AriaBusyEnum,
    AriaLiveEnum,
    AriaRelevantEnum,
    CrossoriginEnum,
    PopoverEnum,
    PreloadEnum,
    RoleEnum,
    TranslateEnum,
};
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;

/**
 * Audio - The audio element is used to embed sound content in documents. It may contain one or more audio sources, represented using the src attribute or the source element.
 *
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Audio', template: '@HtmlTwigComponent/block/audio/audio.html.twig')]
class Audio
{
    public ?bool $autoplay = null;

    public ?bool $controls = null;

    public ?CrossoriginEnum $crossorigin = null;

    public ?bool $loop = null;

    public ?bool $muted = null;

    public ?PreloadEnum $preload = null;

    public ?string $src = null;

    public ?RoleEnum $role = null;

    public ?string $ariaControls = null;

    public ?string $ariaDescribedby = null;

    public ?string $ariaLabelledby = null;

    public ?AriaBusyEnum $ariaBusy = null;

    public ?string $ariaDetails = null;

    public ?string $ariaKeyshortcuts = null;

    public ?string $ariaRoledescription = null;

    public ?AriaLiveEnum $ariaLive = null;

    public ?AriaRelevantEnum $ariaRelevant = null;

    public ?AriaAtomicEnum $ariaAtomic = null;

    public ?string $accesskey = null;

    public null|string|bool $draggable = null;

    public null|string|bool $hidden = null;

    public ?string $lang = null;

    public ?string $slot = null;

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

        $resolver->setAllowedTypes('autoplay', ['bool']);
        $resolver->setAllowedTypes('controls', ['bool']);
        $resolver->setAllowedTypes('crossorigin', ['null', 'string', CrossoriginEnum::class]);
        $resolver->setNormalizer('crossorigin', function ($options, $value) {
            if (is_string($value)) {
                return CrossoriginEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('loop', ['bool']);
        $resolver->setAllowedTypes('muted', ['bool']);
        $resolver->setAllowedTypes('preload', ['null', 'string', PreloadEnum::class]);
        $resolver->setNormalizer('preload', function ($options, $value) {
            if (is_string($value)) {
                return PreloadEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('src', ['string']);
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
        $resolver->setAllowedTypes('ariaBusy', ['null', 'string', AriaBusyEnum::class]);
        $resolver->setNormalizer('ariaBusy', function ($options, $value) {
            if (is_string($value)) {
                return AriaBusyEnum::tryFrom($value);
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
        $resolver->setAllowedTypes('accesskey', ['string']);
        $resolver->setAllowedTypes('draggable', ['null', 'string', 'bool']);
        $resolver->setAllowedTypes('hidden', ['null', 'string', 'bool']);
        $resolver->setAllowedTypes('lang', ['string']);
        $resolver->setAllowedTypes('slot', ['string']);
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
