<?php

namespace Html\TwigComponentBundle\Twig\Void;

use Html\Enum\{
    AutoCapitalizeEnum,
    ContentEditableEnum,
    DirectionEnum,
    InputModeEnum,
    RelEnum,
    ShapeEnum,
    SpellCheckEnum,
    TargetEnum,
    TranslateEnum,
};
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;

/**
 * Area - The area element represents either a hyperlink with some text and a corresponding area on an image map, or a dead area on an image map.
 *
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Area', template: '@HtmlTwigComponent/void/area/area.html.twig')]
class Area
{
    public ?string $alt = null;

    public ?string $coords = null;

    public ?string $download = null;

    public ?string $href = null;

    public ?string $hreflang = null;

    public ?RelEnum $rel = null;

    public ?ShapeEnum $shape = null;

    public ?TargetEnum $target = null;

    public ?string $type = null;

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

        $resolver->setAllowedTypes('alt', ['string']);
        $resolver->setAllowedTypes('coords', ['string']);
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
        $resolver->setAllowedTypes('shape', ['null', 'string', ShapeEnum::class]);
        $resolver->setNormalizer('shape', function ($options, $value) {
            if (is_string($value)) {
                return ShapeEnum::tryFrom($value);
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
