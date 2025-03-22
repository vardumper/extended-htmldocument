<?php

namespace Html\Trait;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RuntimeException;

trait ClassResolverTrait
{
    /**
     * Recursively scan a directory for PHP files and require them.
     */
    public function loadAllPhpFiles(string $directory): void
    {
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

        foreach ($files as $file) {
            if ($file->isFile() && $file->getExtension() === 'php') {
                if (str_ends_with($file->getFilename(), '.tpl.php')) {
                    continue;
                }

                require_once $file->getPathname();
            }
        }
    }

    /**
     * Get all classes implementing a specific interface.
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

    public function getProjectRoot(): string
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
