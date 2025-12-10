<?php

namespace Html\TwigComponentBundle\Twig\Void;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Param - The param element defines parameters for an object element.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package Html\TwigComponentBundle
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Param', template: '@HtmlTwigComponent/void/param/param.html.twig')]
class Param
{
    public ?string $name = null;
    public ?string $value = null;
    public null|string|bool $hidden = null;
    public ?string $style = null;
    public ?string $id = null;
    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('name', ['string']);
        $resolver->setAllowedTypes('value', ['string']);
        $resolver->setDefaults(['hidden' => null]);
        $resolver->setAllowedTypes('hidden', ['null', 'string', 'bool']);
        $resolver->setAllowedTypes('style', ['string']);
        $resolver->setDefaults(['id' => null]);
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setDefaults(['class' => null]);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}
