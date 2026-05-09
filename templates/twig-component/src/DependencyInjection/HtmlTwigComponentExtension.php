<?php

declare(strict_types=1);

namespace Html\TwigComponentBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\{
    ContainerBuilder,
    Extension\Extension,
};

class HtmlTwigComponentExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
    }

    public function getAlias(): string
    {
        return 'html_twig_component';
    }

    public function prepend(ContainerBuilder $container): void
    {
        $bundlePath = \dirname(__DIR__);

        $container->prependExtensionConfig('twig', [
            'paths' => [
                $bundlePath . '/Resources' => 'HtmlTwigComponent',
            ],
        ]);
    }
}
