<?php

namespace Html\TwigComponentBundle\Twig\Void;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Col - The col element represents a column in a table.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package Html\TwigComponentBundle
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

        $resolver->setDefined('span');
        $resolver->setAllowedTypes('span', ['int']);
        $resolver->setDefined('width');
        $resolver->setAllowedTypes('width', ['string']);
        $resolver->setDefined('style');
        $resolver->setAllowedTypes('style', ['string']);
        $resolver->setDefaults(['id' => null]);
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setDefaults(['class' => null]);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + ['blocks' => $data['blocks'] ?? null];
    }
}
