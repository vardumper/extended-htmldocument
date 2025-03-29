<?php

namespace Html\Trait;

use Html\Delegator\HTMLElementDelegator;
use Html\Interface\HTMLElementDelegatorInterface;
use Html\Mapping\Element;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ReflectionClass;
use RuntimeException;

trait ClassResolverTrait
{
    /**
     * Get all classes implementing a specific interface.
     *
     * @param string $interface The interface to check for implementations.
     * @return array An array of class names implementing the specified interface.
     */
    public function getClassesImplementingInterface(string $interface): array
    {
        // Ensure all classes are loaded before scanning
        $projectRoot = $this->getProjectRoot();
        $this->loadAllPhpFiles($projectRoot . '/src');

        $classes = get_declared_classes();
        $implementingClasses = [];

        foreach ($classes as $class) {
            if (in_array($interface, class_implements($class))) {
                $implementingClasses[] = $class;
            }
        }

        return $implementingClasses;
    }

    /**
     * Resolves an Html\Element class by its qualified name
     *
     * @param string $qualifiedName The qualified name of the element.
     * @return string|null The class name of the element or null if not found.
     */
    public function getElementByQualifiedName(string $qualifiedName): ?string
    {
        $elementClasses = [];

        $projectRoot = $this->getProjectRoot();

        $this->loadAllPhpFiles($projectRoot . '/src/Element');
        foreach (get_declared_classes() as $class) {
            if (is_subclass_of($class, HTMLElementDelegator::class) || \is_subclass_of(
                $class,
                HTMLElementDelegatorInterface::class
            )) {
                $elementClasses[] = $class;
            }
        }

        foreach ($elementClasses as $className) {
            $reflectionClass = new ReflectionClass($className);
            $attributes = $reflectionClass->getAttributes(Element::class);
            foreach ($attributes as $attribute) {
                $args = $attribute->getArguments();
                if (! array_key_exists('qualifiedName', $args) && ! isset($args[0])) {
                    continue;
                }
                if (isset($args['qualifiedName']) && $args['qualifiedName'] === $qualifiedName) {
                    return $className;
                }
                if (isset($args[0]) && $args[0] === $qualifiedName) {
                    return $className;
                }
            }
        }
        return null;
    }

    /**
     * Recursively scan a directory for PHP files and require them.
     */
    private function loadAllPhpFiles(string $directory): void
    {
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

        foreach ($files as $file) {
            // echo $file->getPathname() . PHP_EOL;
            if ($file->isFile() && $file->getExtension() === 'php') {
                if (str_ends_with($file->getFilename(), '.tpl.php')) {
                    continue;
                }

                require_once $file->getPathname();
            }
        }
    }

    /**
     * Get the project root directory.
     */
    private function getProjectRoot(): string
    {
        // Locate the Composer autoloader
        $composerAutoload = realpath(__DIR__ . '/../../vendor/autoload.php');

        if ($composerAutoload === false) {
            throw new RuntimeException('Composer autoload.php not found.');
        }

        // The root directory is two levels up from the autoloader
        return dirname($composerAutoload, 2);
    }
}
