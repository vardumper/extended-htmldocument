<?php

namespace Html\TwigComponentBundle\Twig\Void;

use Html\Enum\{
    CrossoriginEnum,
    ReferrerpolicyEnum,
    ScriptTypeEnum,
};
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;

/**
 * Script - The script element is used to embed or reference an executable script within an HTML document. Scripts without async or defer attributes, as well as inline scripts, are fetched and executed immediately, before the browser continues to parse the page.
 *
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Script', template: '@HtmlTwigComponent/void/script/script.html.twig')]
class Script
{
    public ?bool $async = null;

    public ?string $charset = null;

    public ?CrossoriginEnum $crossorigin = null;

    public ?bool $defer = null;

    public ?string $integrity = null;

    public ?string $nonce = null;

    public ?ReferrerpolicyEnum $referrerpolicy = null;

    public ?string $src = null;

    public ?ScriptTypeEnum $type = null;

    public null|string|bool $hidden = null;

    public ?string $title = null;

    public ?string $lang = null;

    public ?string $id = null;

    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('async', ['bool']);
        $resolver->setAllowedTypes('charset', ['string']);
        $resolver->setAllowedTypes('crossorigin', ['null', 'string', CrossoriginEnum::class]);
        $resolver->setNormalizer('crossorigin', function ($options, $value) {
            if (is_string($value)) {
                return CrossoriginEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('defer', ['bool']);
        $resolver->setAllowedTypes('integrity', ['string']);
        $resolver->setAllowedTypes('nonce', ['string']);
        $resolver->setAllowedTypes('referrerpolicy', ['null', 'string', ReferrerpolicyEnum::class]);
        $resolver->setNormalizer('referrerpolicy', function ($options, $value) {
            if (is_string($value)) {
                return ReferrerpolicyEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('src', ['string']);
        $resolver->setAllowedTypes('type', ['null', 'string', ScriptTypeEnum::class]);
        $resolver->setNormalizer('type', function ($options, $value) {
            if (is_string($value)) {
                return ScriptTypeEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('hidden', ['null', 'string', 'bool']);
        $resolver->setAllowedTypes('title', ['string']);
        $resolver->setAllowedTypes('lang', ['string']);
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}
