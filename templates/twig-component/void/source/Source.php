<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Source - The source element allows authors to specify multiple media resources for media elements. It is an empty element. It is commonly used within the picture element.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package vardumper/extended-htmldocument
 * @see src/TemplateGenerator/TwigComponentsGenerator.php
 */
#[AsTwigComponent('Source')]
class Source
{
    public ?string $media = null;
    public ?string $sizes = null;
    public ?string $src = null;
    public ?string $srcset = null;
    public ?string $type = null;
    public ?bool $hidden = null;
    public ?string $id = null;
    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('media', ['null', 'string']);
        $resolver->setAllowedTypes('sizes', ['null', 'string']);
        $resolver->setAllowedTypes('src', ['null', 'string']);
        $resolver->setAllowedTypes('srcset', ['null', 'string']);
        $resolver->setAllowedTypes('type', ['null', 'string']);
        $resolver->setAllowedTypes('hidden', ['null', 'string']);
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}
