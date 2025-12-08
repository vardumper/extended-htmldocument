<?php

namespace App\Twig\Components;

use Html\Enum\StyleTypeEnum;
use Html\Enum\DirectionEnum;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Style - The style element is used to embed CSS styles directly into an HTML document.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package vardumper/extended-htmldocument
 * @see src/TemplateGenerator/TwigComponentsGenerator.php
 */
#[AsTwigComponent('Style')]
class Style
{
    public ?string $media = null;
    public ?string $nonce = null;
    public ?Html\Enum\StyleTypeEnum $type = null;
    public ?string $title = null;
    public ?string $lang = null;
    public ?Html\Enum\DirectionEnum $dir = null;
    public ?string $id = null;
    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('media', ['null', 'string']);
        $resolver->setAllowedTypes('nonce', ['null', 'string']);
        $resolver->setAllowedTypes('type', ['null', 'string', StyleTypeEnum::class]);
        $resolver->setNormalizer('type', function ($options, $value) {
            if (is_string($value)) {
                return StyleTypeEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('title', ['null', 'string']);
        $resolver->setAllowedTypes('lang', ['null', 'string']);
        $resolver->setAllowedTypes('dir', ['null', 'string', DirectionEnum::class]);
        $resolver->setNormalizer('dir', function ($options, $value) {
            if (is_string($value)) {
                return DirectionEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}
