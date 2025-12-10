<?php

namespace Html\TwigTwigComponentBundle\Twig\Block;

use Html\Enum\{
    DirectionEnum,
    HrAlignEnum,
};
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;

/**
 * Hr - The hr element represents a thematic break between paragraph-level elements. It is typically a horizontal rule or line.
 *
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Hr', template: '@HtmlTwigComponent/block/hr/hr.html.twig')]
class Hr
{
    public ?HrAlignEnum $align = null;

    public ?string $color = null;

    public ?bool $noshade = null;

    public ?int $size = null;

    public ?string $width = null;

    public ?DirectionEnum $dir = null;

    public null|string|bool $hidden = null;

    public ?string $lang = null;

    public ?string $style = null;

    public ?string $title = null;

    public ?string $id = null;

    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('align', ['null', 'string', HrAlignEnum::class]);
        $resolver->setNormalizer('align', function ($options, $value) {
            if (is_string($value)) {
                return HrAlignEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('color', ['string']);
        $resolver->setAllowedTypes('noshade', ['bool']);
        $resolver->setAllowedTypes('size', ['int']);
        $resolver->setAllowedTypes('width', ['string']);
        $resolver->setAllowedTypes('dir', ['null', 'string', DirectionEnum::class]);
        $resolver->setNormalizer('dir', function ($options, $value) {
            if (is_string($value)) {
                return DirectionEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('hidden', ['null', 'string', 'bool']);
        $resolver->setAllowedTypes('lang', ['string']);
        $resolver->setAllowedTypes('style', ['string']);
        $resolver->setAllowedTypes('title', ['string']);
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}
