<?php

namespace App\Twig\Components;

use Html\Enum\DirectionEnum;
use Html\Enum\TranslateEnum;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Body - The body element represents the content of an HTML document. All the contents such as text, images, headings, links, tables, etc. are placed between the body tags.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package vardumper/extended-htmldocument
 * @see src/TemplateGenerator/TwigComponentsGenerator.php
 */
#[AsTwigComponent('Body')]
class Body
{
    public ?string $onafterprint = null;
    public ?string $onbeforeprint = null;
    public ?string $onbeforeunload = null;
    public ?string $onhashchange = null;
    public ?string $onlanguagechange = null;
    public ?string $onmessage = null;
    public ?string $onmessageerror = null;
    public ?string $onoffline = null;
    public ?string $ononline = null;
    public ?string $onpagehide = null;
    public ?string $onpageshow = null;
    public ?string $onpopstate = null;
    public ?string $onrejectionhandled = null;
    public ?string $onstorage = null;
    public ?string $onunhandledrejection = null;
    public ?string $onunload = null;
    public ?string $accesskey = null;
    public ?Html\Enum\DirectionEnum $dir = null;
    public ?bool $draggable = null;
    public ?bool $hidden = null;
    public ?string $lang = null;
    public ?string $style = null;
    public ?int $tabindex = null;
    public ?string $title = null;
    public ?Html\Enum\TranslateEnum $translate = null;
    public ?string $id = null;
    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('onafterprint', ['null', 'string']);
        $resolver->setAllowedTypes('onbeforeprint', ['null', 'string']);
        $resolver->setAllowedTypes('onbeforeunload', ['null', 'string']);
        $resolver->setAllowedTypes('onhashchange', ['null', 'string']);
        $resolver->setAllowedTypes('onlanguagechange', ['null', 'string']);
        $resolver->setAllowedTypes('onmessage', ['null', 'string']);
        $resolver->setAllowedTypes('onmessageerror', ['null', 'string']);
        $resolver->setAllowedTypes('onoffline', ['null', 'string']);
        $resolver->setAllowedTypes('ononline', ['null', 'string']);
        $resolver->setAllowedTypes('onpagehide', ['null', 'string']);
        $resolver->setAllowedTypes('onpageshow', ['null', 'string']);
        $resolver->setAllowedTypes('onpopstate', ['null', 'string']);
        $resolver->setAllowedTypes('onrejectionhandled', ['null', 'string']);
        $resolver->setAllowedTypes('onstorage', ['null', 'string']);
        $resolver->setAllowedTypes('onunhandledrejection', ['null', 'string']);
        $resolver->setAllowedTypes('onunload', ['null', 'string']);
        $resolver->setAllowedTypes('accesskey', ['null', 'string']);
        $resolver->setAllowedTypes('dir', ['null', 'string', DirectionEnum::class]);
        $resolver->setNormalizer('dir', function ($options, $value) {
            if (is_string($value)) {
                return DirectionEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('draggable', ['null', 'string']);
        $resolver->setAllowedTypes('hidden', ['null', 'string']);
        $resolver->setAllowedTypes('lang', ['null', 'string']);
        $resolver->setAllowedTypes('style', ['null', 'string']);
        $resolver->setAllowedTypes('tabindex', ['null', 'string']);
        $resolver->setAllowedTypes('title', ['null', 'string']);
        $resolver->setAllowedTypes('translate', ['null', 'string', TranslateEnum::class]);
        $resolver->setNormalizer('translate', function ($options, $value) {
            if (is_string($value)) {
                return TranslateEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}
