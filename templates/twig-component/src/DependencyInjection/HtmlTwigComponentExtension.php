<?php

namespace Html\TwigComponentBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;

/**
 * HtmlTwigComponentExtension - Auto-registers Twig Components
 *
 * Automatically discovers and registers all Twig Component classes from the bundle,
 * enabling auto-configuration of components with #[AsTwigComponent] attribute.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package Html\TwigComponentBundle\DependencyInjection
 */
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
        $bundlePath = dirname(__DIR__); // Gets the bundle's root directory
    
        $container->prependExtensionConfig('twig', [
            'paths' => [
                $bundlePath . '/Resources' => 'HtmlTwigComponent'
            ]
        ]);
    }
}
