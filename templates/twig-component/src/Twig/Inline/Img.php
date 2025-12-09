<?php

namespace Html\TwigComponentBundle\Twig\Inline;

use Html\Enum\{
    AriaAtomicEnum,
    AriaHiddenEnum,
    AriaLiveEnum,
    AriaRelevantEnum,
    CrossoriginEnum,
    DecodingEnum,
    DirectionEnum,
    ReferrerpolicyEnum,
};
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;

/**
 * Img - The img element represents an image.
 *
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Img', template: '@HtmlTwigComponent/inline/img/img.html.twig')]
class Img
{
    public ?string $alt = null;

    public ?CrossoriginEnum $crossorigin = null;

    public ?DecodingEnum $decoding = null;

    public ?string $height = null;

    public ?bool $ismap = null;

    public ?ReferrerpolicyEnum $referrerpolicy = null;

    public ?string $sizes = null;

    public ?string $src = null;

    public ?string $srcset = null;

    public ?string $usemap = null;

    public ?string $width = null;

    public ?AriaHiddenEnum $ariaHidden = null;

    public ?string $ariaLabel = null;

    public ?string $ariaDetails = null;

    public ?string $ariaKeyshortcuts = null;

    public ?string $ariaRoledescription = null;

    public ?AriaLiveEnum $ariaLive = null;

    public ?AriaRelevantEnum $ariaRelevant = null;

    public ?AriaAtomicEnum $ariaAtomic = null;

    public ?DirectionEnum $dir = null;

    public null|string|bool $draggable = null;

    public null|string|bool $hidden = null;

    public ?string $lang = null;

    public ?string $style = null;

    public ?int $tabindex = null;

    public ?string $title = null;

    public ?string $id = null;

    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('alt', ['string']);
        $resolver->setAllowedTypes('crossorigin', ['null', 'string', CrossoriginEnum::class]);
        $resolver->setNormalizer('crossorigin', function ($options, $value) {
            if (is_string($value)) {
                return CrossoriginEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('decoding', ['null', 'string', DecodingEnum::class]);
        $resolver->setNormalizer('decoding', function ($options, $value) {
            if (is_string($value)) {
                return DecodingEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('height', ['string']);
        $resolver->setAllowedTypes('ismap', ['bool']);
        $resolver->setAllowedTypes('referrerpolicy', ['null', 'string', ReferrerpolicyEnum::class]);
        $resolver->setNormalizer('referrerpolicy', function ($options, $value) {
            if (is_string($value)) {
                return ReferrerpolicyEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('sizes', ['string']);
        $resolver->setAllowedTypes('src', ['string']);
        $resolver->setAllowedTypes('srcset', ['string']);
        $resolver->setAllowedTypes('usemap', ['string']);
        $resolver->setAllowedTypes('width', ['string']);
        $resolver->setAllowedTypes('ariaHidden', ['null', 'string', AriaHiddenEnum::class]);
        $resolver->setNormalizer('ariaHidden', function ($options, $value) {
            if (is_string($value)) {
                return AriaHiddenEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('ariaLabel', ['string']);
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
        $resolver->setAllowedTypes('dir', ['null', 'string', DirectionEnum::class]);
        $resolver->setNormalizer('dir', function ($options, $value) {
            if (is_string($value)) {
                return DirectionEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('draggable', ['null', 'string', 'bool']);
        $resolver->setAllowedTypes('hidden', ['null', 'string', 'bool']);
        $resolver->setAllowedTypes('lang', ['string']);
        $resolver->setAllowedTypes('style', ['string']);
        $resolver->setAllowedTypes('tabindex', ['int']);
        $resolver->setAllowedTypes('title', ['string']);
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}
