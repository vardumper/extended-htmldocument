<?php

namespace Html\TwigComponentBundle\Twig\Void;

use Html\Enum\{
    CrossoriginEnum,
    DirectionEnum,
    LinkRelEnum,
    ReferrerpolicyEnum,
};
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;

/**
 * Link - The link element defines a link between a document and an external resource. It is used to link to external stylesheets.
 *
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Link', template: '@HtmlTwigComponent/void/link/link.html.twig')]
class Link
{
    public ?CrossoriginEnum $crossorigin = null;

    public ?string $href = null;

    public ?string $hreflang = null;

    public ?string $integrity = null;

    public ?string $media = null;

    public ?ReferrerpolicyEnum $referrerpolicy = null;

    public ?LinkRelEnum $rel = null;

    public ?string $sizes = null;

    public ?string $type = null;

    public ?DirectionEnum $dir = null;

    public null|string|bool $hidden = null;

    public ?string $lang = null;

    public ?string $style = null;

    public ?string $title = null;

    public ?string $id = null;

    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('crossorigin', ['null', 'string', CrossoriginEnum::class]);
        $resolver->setNormalizer('crossorigin', function ($options, $value) {
            if (is_string($value)) {
                return CrossoriginEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('href', ['string']);
        $resolver->setAllowedTypes('hreflang', ['string']);
        $resolver->setAllowedTypes('integrity', ['string']);
        $resolver->setAllowedTypes('media', ['string']);
        $resolver->setAllowedTypes('referrerpolicy', ['null', 'string', ReferrerpolicyEnum::class]);
        $resolver->setNormalizer('referrerpolicy', function ($options, $value) {
            if (is_string($value)) {
                return ReferrerpolicyEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('rel', ['null', 'string', LinkRelEnum::class]);
        $resolver->setNormalizer('rel', function ($options, $value) {
            if (is_string($value)) {
                return LinkRelEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('sizes', ['string']);
        $resolver->setAllowedTypes('type', ['string']);
        $resolver->setAllowedTypes('dir', ['null', 'string', DirectionEnum::class]);
        $resolver->setNormalizer('dir', function ($options, $value) {
            if (is_string($value)) {
                return DirectionEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('hidden', ['null', 'string', 'bool']);
        $resolver->setAllowedTypes('lang', ['string']);
        $resolver->setAllowedTypes('style', ['string']);
        $resolver->setAllowedTypes('title', ['string']);
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}
