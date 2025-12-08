<?php

namespace App\Twig\Components;

use Html\Enum\CrossoriginEnum;
use Html\Enum\ReferrerpolicyEnum;
use Html\Enum\LinkRelEnum;
use Html\Enum\DirectionEnum;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Link - The link element defines a link between a document and an external resource. It is used to link to external stylesheets.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package vardumper/extended-htmldocument
 * @see src/TemplateGenerator/TwigComponentsGenerator.php
 */
#[AsTwigComponent('Link')]
class Link
{
    public ?Html\Enum\CrossoriginEnum $crossorigin = null;
    public ?string $href = null;
    public ?string $hreflang = null;
    public ?string $integrity = null;
    public ?string $media = null;
    public ?Html\Enum\ReferrerpolicyEnum $referrerpolicy = null;
    public ?Html\Enum\LinkRelEnum $rel = null;
    public ?string $sizes = null;
    public ?string $type = null;
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

        $resolver->setAllowedTypes('crossorigin', ['null', 'string', CrossoriginEnum::class]);
        $resolver->setNormalizer('crossorigin', function ($options, $value) {
            if (is_string($value)) {
                return CrossoriginEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('href', ['null', 'string']);
        $resolver->setAllowedTypes('hreflang', ['null', 'string']);
        $resolver->setAllowedTypes('integrity', ['null', 'string']);
        $resolver->setAllowedTypes('media', ['null', 'string']);
        $resolver->setAllowedTypes('referrerpolicy', ['null', 'string', ReferrerpolicyEnum::class]);
        $resolver->setNormalizer('referrerpolicy', function ($options, $value) {
            if (is_string($value)) {
                return ReferrerpolicyEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('rel', ['null', 'string', LinkRelEnum::class]);
        $resolver->setNormalizer('rel', function ($options, $value) {
            if (is_string($value)) {
                return LinkRelEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('sizes', ['null', 'string']);
        $resolver->setAllowedTypes('type', ['null', 'string']);
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
