<?php

namespace Html\TwigComponentBundle\Twig\Void;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;

/**
 * Source - The source element allows authors to specify multiple media resources for media elements. It is an empty element. It is commonly used within the picture element.
 *
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Source', template: '@HtmlTwigComponent/void/source/source.html.twig')]
class Source
{
    public ?string $media = null;

    public ?string $sizes = null;

    public ?string $src = null;

    public ?string $srcset = null;

    public ?string $type = null;

    public null|string|bool $hidden = null;

    public ?string $id = null;

    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('media', ['string']);
        $resolver->setAllowedTypes('sizes', ['string']);
        $resolver->setAllowedTypes('src', ['string']);
        $resolver->setAllowedTypes('srcset', ['string']);
        $resolver->setAllowedTypes('type', ['string']);
        $resolver->setAllowedTypes('hidden', ['null', 'string', 'bool']);
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}
