<?php

namespace Html\TwigComponentBundle\Twig\Void;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;

/**
 * Param - The param element defines parameters for an object element.
 *
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Param', template: '@HtmlTwigComponent/void/param/param.html.twig')]
class Param
{
    public ?string $name = null;

    public ?string $value = null;

    public ?string $style = null;

    public null|string|bool $hidden = null;

    public ?string $id = null;

    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('name', ['string']);
        $resolver->setAllowedTypes('value', ['string']);
        $resolver->setAllowedTypes('style', ['string']);
        $resolver->setAllowedTypes('hidden', ['null', 'string', 'bool']);
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}
