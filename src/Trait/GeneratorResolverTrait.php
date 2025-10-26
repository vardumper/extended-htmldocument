<?php

declare(strict_types=1);

namespace Html\Trait;

use Html\Interface\TemplateGeneratorInterface;
use Html\Mapping\TemplateGenerator;
use ReflectionClass;

trait GeneratorResolverTrait
{
    /**
     * Resolves generator classes by name(s).
     * @return array<string, TemplateGeneratorInterface>
     */
    private function getGenerators(array $generatorNames): array
    {
        $result = [];
        $interface = TemplateGeneratorInterface::class;
        $classes = $this->getClassesImplementingInterface($interface);

        if (empty($classes)) {
            return $result;
        }

        foreach ($classes as $className) {
            $reflectionClass = new ReflectionClass($className);
            foreach ($reflectionClass->getAttributes(TemplateGenerator::class) as $attribute) {
                $args = $attribute->getArguments();
                $name = $args[0] ?? null;
                if (in_array($name, $generatorNames, true)) {
                    $result[$name] = new $className();
                }
            }
        }

        return $result;
    }
}
