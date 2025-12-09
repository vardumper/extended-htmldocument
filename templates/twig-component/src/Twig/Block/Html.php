<?php

namespace Html\TwigComponentBundle\Twig\Block;

use Html\Enum\{
    DirectionEnum,
};
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;

/**
 * Html - The root element of an HTML document. It represents the top-level of the HTML structure.
 *
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Html', template: '@HtmlTwigComponent/block/html/html.html.twig')]
class Html
{
    public ?string $manifest = null;

    public ?string $lang = null;

    public ?DirectionEnum $dir = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('manifest', ['string']);
        $resolver->setAllowedTypes('lang', ['string']);
        $resolver->setAllowedTypes('dir', ['null', 'string', DirectionEnum::class]);
        $resolver->setNormalizer('dir', function ($options, $value) {
            if (is_string($value)) {
                return DirectionEnum::tryFrom($value);
            }
            return $value;
        });

        return $resolver->resolve($data) + $data;
    }
}
