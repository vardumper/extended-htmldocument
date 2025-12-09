<?php

namespace Html\TwigComponentBundle\Twig\Void;

use Html\Enum\HttpEquivEnum;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Meta - The meta element provides metadata about the HTML document. Metadata will not be displayed on the page, but is machine-readable. Mainly used in the head but allowed inside the body if itemprop attribute is set.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package Html\TwigComponentBundle
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Meta', template: '@HtmlTwigComponent/void/meta/meta.html.twig')]
class Meta
{
    public ?string $charset = null;
    public ?string $content = null;
    public ?HttpEquivEnum $httpEquiv = null;
    public ?string $name = null;
    public ?string $scheme = null;
    public ?string|bool $hidden = null;
    public ?string $lang = null;
    public ?string $title = null;
    public ?string $id = null;
    public ?string $class = null;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);

        $resolver->setAllowedTypes('charset', ['string']);
        $resolver->setAllowedTypes('content', ['string']);
        $resolver->setAllowedTypes('httpEquiv', ['null', 'string', HttpEquivEnum::class]);
        $resolver->setNormalizer('httpEquiv', function ($options, $value) {
            if (is_string($value)) {
                return HttpEquivEnum::tryFrom($value);
            }
            return $value;
        });
        $resolver->setAllowedTypes('name', ['string']);
        $resolver->setAllowedTypes('scheme', ['string']);
        $resolver->setAllowedTypes('hidden', ['null', 'string', 'bool']);
        $resolver->setAllowedTypes('lang', ['string']);
        $resolver->setAllowedTypes('title', ['string']);
        $resolver->setAllowedTypes('id', ['null', 'string']);
        $resolver->setAllowedTypes('class', ['null', 'string']);

        return $resolver->resolve($data) + $data;
    }
}
