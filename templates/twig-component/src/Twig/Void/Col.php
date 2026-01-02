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

    public ?array $alpineAttributes = null;

    public ?string $id = null;

    public ?string $class = null;

    public ?array $dataAttributes = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setDefined('span');
        $resolver->setAllowedTypes('span', ['int']);
        $resolver->setDefined('width');
        $resolver->setAllowedTypes('width', ['string']);
        $resolver->setDefined('style');
        $resolver->setAllowedTypes('style', ['string']);
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
