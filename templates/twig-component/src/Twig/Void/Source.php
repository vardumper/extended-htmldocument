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

    public ?array $alpineAttributes = null;

    public ?string $id = null;

    public ?string $class = null;

    public ?array $dataAttributes = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setDefined('media');
        $resolver->setAllowedTypes('media', ['string']);
        $resolver->setDefined('sizes');
        $resolver->setAllowedTypes('sizes', ['string']);
        $resolver->setDefined('src');
        $resolver->setAllowedTypes('src', ['string']);
        $resolver->setDefined('srcset');
        $resolver->setAllowedTypes('srcset', ['string']);
        $resolver->setDefined('type');
        $resolver->setAllowedTypes('type', ['string']);
        $resolver->setDefaults([
            'hidden' => null,
        ]);
        $resolver->setAllowedTypes('hidden', ['null', 'string', 'bool']);
        $resolver->setDefined('alpineAttributes');
        $resolver->setAllowedTypes('alpineAttributes', ['array']);
        $resolver->setDefaults([
            'id' => null,
        ]);
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setDefaults([
            'class' => null,
        ]);
        $resolver->setAllowedTypes('class', ['null', 'string']);
        $resolver->setDefined('dataAttributes');
        $resolver->setAllowedTypes('dataAttributes', ['array']);

        $resolved = $resolver->resolve($data);
        if (isset($data['blocks'])) {
            $resolved['blocks'] = $data['blocks'];
        }
        return $resolved;
    }
}
