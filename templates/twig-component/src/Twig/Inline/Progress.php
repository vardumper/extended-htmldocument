<?php

namespace Html\TwigComponentBundle\Twig\Inline;

use Html\Enum\{
    AriaAtomicEnum,
    AriaLiveEnum,
    AriaRelevantEnum,
    AutoCapitalizeEnum,
    ContentEditableEnum,
    DirectionEnum,
    InputModeEnum,
    SpellCheckEnum,
    TranslateEnum,
};
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;

/**
 * Progress - The progress element represents the completion progress of a task.
 *
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Progress', template: '@HtmlTwigComponent/inline/progress/progress.html.twig')]
class Progress
{
    public ?int $max = null;

    public ?string $value = null;

    public ?string $ariaDetails = null;

    public ?string $ariaKeyshortcuts = null;

    public ?string $ariaRoledescription = null;

    public ?AriaLiveEnum $ariaLive = null;

    public ?AriaRelevantEnum $ariaRelevant = null;

    public ?AriaAtomicEnum $ariaAtomic = null;

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

    public ?string $slot = null;

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

        $resolver->setAllowedTypes('max', ['int']);
        $resolver->setAllowedTypes('value', ['string']);
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
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}
