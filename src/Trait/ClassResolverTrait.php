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
        $this->loadAllRelevantPhpFiles();

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

        $this->loadAllRelevantPhpFiles();

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
     * Load all relevant PHP files for class scanning.
     */
    private function loadAllRelevantPhpFiles(): void
    {
        $projectRoot = $this->getProjectRoot();
        $packageRoot = $this->getPackageRoot();

        // Always load package classes
        $this->loadAllPhpFiles($packageRoot . '/src');

        // Try to load project classes if they exist
        $projectSrcPath = $projectRoot . '/src';
        if (is_dir($projectSrcPath)) {
            $this->loadAllPhpFiles($projectSrcPath);
        }
    }

    /**
     * Get the package root directory.
     */
    private function getPackageRoot(): string
    {
        // The package root is always relative to this file's location
        return dirname(__DIR__, 2);
    }

    /**
     * Recursively scan a directory for PHP files and require them.
     */
    private function loadAllPhpFiles(string $directory): void
    {
        if (! is_dir($directory)) {
            return; // Skip if directory doesn't exist
        }

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
        // Try to locate the Composer autoloader from different possible locations
        $possiblePaths = [
            // When used as a dependency in a third-party project
            __DIR__ . '/../../../../autoload.php',
            // When used in development (package root)
            __DIR__ . '/../../vendor/autoload.php',
            // Fallback: traverse up the directory tree looking for composer.json
            $this->findComposerRoot(__DIR__),
        ];

        foreach ($possiblePaths as $path) {
            if ($path !== null) {
                $composerAutoload = realpath($path);
                if ($composerAutoload !== false && file_exists($composerAutoload)) {
                    // The root directory is the parent of the vendor directory
                    return dirname($composerAutoload);
                }
            }
        }

        throw new RuntimeException('Composer autoload.php not found. Unable to determine project root.');
    }

    /**
     * Find the composer root by traversing up the directory tree.
     */
    private function findComposerRoot(string $startPath): ?string
    {
        $currentPath = $startPath;
        $maxDepth = 10; // Prevent infinite loops
        $depth = 0;

        while ($depth < $maxDepth && $currentPath !== dirname($currentPath)) {
            $composerPath = $currentPath . '/composer.json';
            $autoloadPath = $currentPath . '/vendor/autoload.php';

            if (file_exists($composerPath) && file_exists($autoloadPath)) {
                return $autoloadPath;
            }

            $currentPath = dirname($currentPath);
            $depth++;
        }

        return null;
    }
}
