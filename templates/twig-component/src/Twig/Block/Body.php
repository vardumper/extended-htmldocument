<?php

namespace Html\TwigComponentBundle\Twig\Block;

use Html\Enum\DirectionEnum;
use Html\Enum\TranslateEnum;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Body - The body element represents the content of an HTML document. All the contents such as text, images, headings, links, tables, etc. are placed between the body tags.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package Html\TwigComponentBundle
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Body', template: '@HtmlTwigComponent/block/body/body.html.twig')]
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
    public ?DirectionEnum $dir = null;
    public ?string|bool $draggable = null;
    public ?string|bool $hidden = null;
    public ?string $lang = null;
    public ?string $style = null;
    public ?int $tabindex = null;
    public ?string $title = null;
    public ?TranslateEnum $translate = null;
    public ?string $id = null;
    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('onafterprint', ['string']);
        $resolver->setAllowedTypes('onbeforeprint', ['string']);
        $resolver->setAllowedTypes('onbeforeunload', ['string']);
        $resolver->setAllowedTypes('onhashchange', ['string']);
        $resolver->setAllowedTypes('onlanguagechange', ['string']);
        $resolver->setAllowedTypes('onmessage', ['string']);
        $resolver->setAllowedTypes('onmessageerror', ['string']);
        $resolver->setAllowedTypes('onoffline', ['string']);
        $resolver->setAllowedTypes('ononline', ['string']);
        $resolver->setAllowedTypes('onpagehide', ['string']);
        $resolver->setAllowedTypes('onpageshow', ['string']);
        $resolver->setAllowedTypes('onpopstate', ['string']);
        $resolver->setAllowedTypes('onrejectionhandled', ['string']);
        $resolver->setAllowedTypes('onstorage', ['string']);
        $resolver->setAllowedTypes('onunhandledrejection', ['string']);
        $resolver->setAllowedTypes('onunload', ['string']);
        $resolver->setAllowedTypes('accesskey', ['string']);
        $resolver->setAllowedTypes('dir', ['null', 'string', DirectionEnum::class]);
        $resolver->setNormalizer('dir', function ($options, $value) {
            if (is_string($value)) {
                return DirectionEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('draggable', ['null', 'string', 'bool']);
        $resolver->setAllowedTypes('hidden', ['null', 'string', 'bool']);
        $resolver->setAllowedTypes('lang', ['string']);
        $resolver->setAllowedTypes('style', ['string']);
        $resolver->setAllowedTypes('tabindex', ['int']);
        $resolver->setAllowedTypes('title', ['string']);
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
