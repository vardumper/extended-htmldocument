<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Title - The title element defines the title of the document, shown in a browser's title bar or a page's tab. It is only text, not meant to be displayed.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package vardumper/extended-htmldocument
 * @see src/TemplateGenerator/TwigComponentsGenerator.php
 */
#[AsTwigComponent('Title')]
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
