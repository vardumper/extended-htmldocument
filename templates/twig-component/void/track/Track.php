<?php

namespace App\Twig\Components;

use Html\Enum\KindEnum;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Track - The track element is used as a child of the media elements—audio and video. It lets you specify timed text tracks (or time-based data), for example to automatically handle subtitles. The tracks are formatted in WebVTT format (.vtt files) — Web Video Text Tracks.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package vardumper/extended-htmldocument
 * @see src/TemplateGenerator/TwigComponentsGenerator.php
 */
#[AsTwigComponent('Track')]
class Track
{
    public ?bool $default = null;
    public ?Html\Enum\KindEnum $kind = null;
    public ?string $label = null;
    public ?string $src = null;
    public ?string $srclang = null;
    public ?bool $hidden = null;
    public ?string $lang = null;
    public ?string $style = null;
    public ?string $id = null;
    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('default', ['null', 'string']);
        $resolver->setAllowedTypes('kind', ['null', 'string', KindEnum::class]);
        $resolver->setNormalizer('kind', function ($options, $value) {
            if (is_string($value)) {
                return KindEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('label', ['null', 'string']);
        $resolver->setAllowedTypes('src', ['null', 'string']);
        $resolver->setAllowedTypes('srclang', ['null', 'string']);
        $resolver->setAllowedTypes('hidden', ['null', 'string']);
        $resolver->setAllowedTypes('lang', ['null', 'string']);
        $resolver->setAllowedTypes('style', ['null', 'string']);
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}
