<?php

namespace Html\TwigComponentBundle\Twig\Void;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;

/**
 * Col - The col element represents a column in a table.
 *
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Col', template: '@HtmlTwigComponent/void/col/col.html.twig')]
class Col
{
    public ?int $span = null;

    public ?string $width = null;

    public ?string $style = null;

    public ?string $id = null;

    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('span', ['int']);
        $resolver->setAllowedTypes('width', ['string']);
        $resolver->setAllowedTypes('style', ['string']);
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}
