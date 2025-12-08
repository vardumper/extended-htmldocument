<?php

namespace App\Twig\Components;

use Html\Enum\CrossoriginEnum;
use Html\Enum\ReferrerpolicyEnum;
use Html\Enum\ScriptTypeEnum;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Script - The script element is used to embed or reference an executable script within an HTML document. Scripts without async or defer attributes, as well as inline scripts, are fetched and executed immediately, before the browser continues to parse the page.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package vardumper/extended-htmldocument
 * @see src/TemplateGenerator/TwigComponentsGenerator.php
 */
#[AsTwigComponent('Script')]
class Script
{
    public ?bool $async = null;
    public ?string $charset = null;
    public ?Html\Enum\CrossoriginEnum $crossorigin = null;
    public ?bool $defer = null;
    public ?string $integrity = null;
    public ?string $nonce = null;
    public ?Html\Enum\ReferrerpolicyEnum $referrerpolicy = null;
    public ?string $src = null;
    public ?Html\Enum\ScriptTypeEnum $type = null;
    public ?bool $hidden = null;
    public ?string $title = null;
    public ?string $lang = null;
    public ?string $id = null;
    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('async', ['null', 'string']);
        $resolver->setAllowedTypes('charset', ['null', 'string']);
        $resolver->setAllowedTypes('crossorigin', ['null', 'string', CrossoriginEnum::class]);
        $resolver->setNormalizer('crossorigin', function ($options, $value) {
            if (is_string($value)) {
                return CrossoriginEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('defer', ['null', 'string']);
        $resolver->setAllowedTypes('integrity', ['null', 'string']);
        $resolver->setAllowedTypes('nonce', ['null', 'string']);
        $resolver->setAllowedTypes('referrerpolicy', ['null', 'string', ReferrerpolicyEnum::class]);
        $resolver->setNormalizer('referrerpolicy', function ($options, $value) {
            if (is_string($value)) {
                return ReferrerpolicyEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('src', ['null', 'string']);
        $resolver->setAllowedTypes('type', ['null', 'string', ScriptTypeEnum::class]);
        $resolver->setNormalizer('type', function ($options, $value) {
            if (is_string($value)) {
                return ScriptTypeEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('hidden', ['null', 'string']);
        $resolver->setAllowedTypes('title', ['null', 'string']);
        $resolver->setAllowedTypes('lang', ['null', 'string']);
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}
