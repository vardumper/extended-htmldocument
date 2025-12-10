<?php

namespace Html\TwigTwigComponentBundle\Twig\Void;

use Html\Enum\{
    DirectionEnum,
    StyleTypeEnum,
};
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;

/**
 * Style - The style element is used to embed CSS styles directly into an HTML document.
 *
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Style', template: '@HtmlTwigComponent/void/style/style.html.twig')]
class Style
{
    public ?string $media = null;

    public ?string $nonce = null;

    public ?StyleTypeEnum $type = null;

    public ?string $title = null;

    public ?string $lang = null;

    public ?DirectionEnum $dir = null;

    public ?string $id = null;

    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('media', ['string']);
        $resolver->setAllowedTypes('nonce', ['string']);
        $resolver->setAllowedTypes('type', ['null', 'string', StyleTypeEnum::class]);
        $resolver->setNormalizer('type', function ($options, $value) {
            if (is_string($value)) {
                return StyleTypeEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('title', ['string']);
        $resolver->setAllowedTypes('lang', ['string']);
        $resolver->setAllowedTypes('dir', ['null', 'string', DirectionEnum::class]);
        $resolver->setNormalizer('dir', function ($options, $value) {
            if (is_string($value)) {
                return DirectionEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}
