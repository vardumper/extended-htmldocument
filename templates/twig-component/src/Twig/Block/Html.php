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

    public ?DirectionEnum $dir = null;

    public ?string $lang = null;

    public ?array $dataAttributes = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setDefined('manifest');
        $resolver->setAllowedTypes('manifest', ['string']);
        $resolver->setDefaults([
            'dir' => null,
        ]);
        $resolver->setAllowedTypes('dir', ['null', 'string', DirectionEnum::class]);
        $resolver->setNormalizer('dir', function ($options, $value) {
            if (is_string($value)) {
                return DirectionEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setDefined('lang');
        $resolver->setAllowedTypes('lang', ['string']);
        $resolver->setDefined('dataAttributes');
        $resolver->setAllowedTypes('dataAttributes', ['array']);

        $resolved = $resolver->resolve($data);
        if (isset($data['blocks'])) {
            $resolved['blocks'] = $data['blocks'];
        }
        return $resolved;
    }
}
