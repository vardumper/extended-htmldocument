<?php

namespace App\Twig\Components;

use Html\Enum\HrAlignEnum;
use Html\Enum\DirectionEnum;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Horizontal Rule - The hr element represents a thematic break between paragraph-level elements. It is typically a horizontal rule or line.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package vardumper/extended-htmldocument
 * @see src/TemplateGenerator/TwigComponentsGenerator.php
 */
#[AsTwigComponent('Hr')]
class Hr
{
    public ?Html\Enum\HrAlignEnum $align = null;
    public ?string $color = null;
    public ?bool $noshade = null;
    public ?int $size = null;
    public ?string $width = null;
    public ?Html\Enum\DirectionEnum $dir = null;
    public ?bool $hidden = null;
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
        $resolver->setAllowedTypes('color', ['null', 'string']);
        $resolver->setAllowedTypes('noshade', ['null', 'string']);
        $resolver->setAllowedTypes('size', ['null', 'string']);
        $resolver->setAllowedTypes('width', ['null', 'string']);
        $resolver->setAllowedTypes('dir', ['null', 'string', DirectionEnum::class]);
        $resolver->setNormalizer('dir', function ($options, $value) {
            if (is_string($value)) {
                return DirectionEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('hidden', ['null', 'string']);
        $resolver->setAllowedTypes('lang', ['null', 'string']);
        $resolver->setAllowedTypes('style', ['null', 'string']);
        $resolver->setAllowedTypes('title', ['null', 'string']);
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}
