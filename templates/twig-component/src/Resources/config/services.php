<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return static function (ContainerConfigurator $configurator): void {
    $services = $configurator->services()
        ->defaults()
            ->autowire()
            ->autoconfigure();

    // Auto-register all Twig Component classes
    $services->load('Html\\TwigComponentBundle\\Twig\\', '../../../Twig')
        ->tag('controller.service_arguments');
};
