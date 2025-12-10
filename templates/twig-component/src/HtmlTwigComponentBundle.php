<?php

namespace Html\TwigComponentBundle;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * HTML Twig Component Bundle
 *
 * Provides Symfony UX Twig Components for all HTML5 elements with ARIA support.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package Html\TwigComponentBundle
 */
class HtmlTwigComponentBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

    public function build(ContainerBuilder $container): void
    {
        parent::build($container);
        
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/Resources/config'));
        $loader->load('services.yaml');
    }
}
