<?php

namespace Html\TwigComponentBundle\Twig\Void;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;

/**
 * Head - The head element contains meta-information about the HTML document, including its title and links to its scripts and stylesheets.
 *
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Head', template: '@HtmlTwigComponent/void/head/head.html.twig')]
class Head
{
    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);


        return $resolver->resolve($data) + $data;
    }
}
