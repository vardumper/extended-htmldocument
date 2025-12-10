<?php

namespace Html\TwigTwigComponentBundle\Twig\Void;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;

/**
 * Title - The title element defines the title of the document, shown in a browser's title bar or a page's tab. It is only text, not meant to be displayed.
 *
 * @see https://github.com/vardumper/extended-htmldocument
 */
#[AsTwigComponent('Title', template: '@HtmlTwigComponent/void/title/title.html.twig')]
class Title
{
    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $resolver->setIgnoreUndefined(true);


        return $resolver->resolve($data) + $data;
    }
}
