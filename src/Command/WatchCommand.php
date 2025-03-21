<?php

namespace Html\Command;

use Html\Delegator\HTMLDocumentDelegator;
use Html\Interface\TemplateGeneratorInterface;
use Html\Mapping\TemplateGenerator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ReflectionClass;
use Revolt\EventLoop;
use RuntimeException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Yaml\Yaml;

class WatchCommand extends Command
{
    private const int INTERVAL = 2;

    private bool $isFirstRun = true;

    private ?array $data = null;

    /**
     * @param string $generator The generator to use
     * @param string $source The source directory or file to watch
     * @param string $dest  The destination directory to write to
     * @param bool $overwriteExisting Whether to overwrite existing files
     */
    public function __invoke(
        string $generator,
        string $source,
        string $dest,
        bool $overwriteExisting = false,
        InputInterface $input,
        OutputInterface $output
    ): void {
        $io = new SymfonyStyle($input, $output);

        if ($source === $dest) {
            $io->error(sprintf('Source and destination directories cannot be the same (%s).', $dest));
            exit;
        }

        $sourceType = $this->classifyPathString($source);
        $sourceFiles = match ($sourceType) {
            'file' => [$source],
            'directory' => glob($source . '/*'),
            'glob' => glob($source),
            'unknown' => [],
            default => [],
        };

        $destType = $this->classifyPathString($dest);

        if ($destType === 'directory' && \is_dir($dest)) {
            $io->info(sprintf('Destination directory (%s) exists.', $dest));
        }

        if ($destType === 'directory' && ! \is_dir($dest)) {
            $createDir = $io->confirm(
                sprintf('Destination directory (%s) does not exist. Would you like to create it now?', $dest),
                false
            );
            if ($createDir) {
                $this->createDirectory($dest, $io);
            }
        }

        if ($destType === 'file' && \is_file($dest) && ! $overwriteExisting) {
            $io->error(sprintf('Destination file (%s) already exists and overwrite is not allowed.', $dest));
        }

        if ($destType === 'file' && ! \is_dir(\dirname($dest))) {
            $createDir = $io->confirm(
                sprintf('Destination directory (%s) does not exist. Would you like to create it now?', dirname($dest)),
                false
            );
            if ($createDir) {
                $this->createDirectory(\dirname($dest), $io);
            }
        }

        $io->info(sprintf('Starting to watch: %s', $source));

        // Let's tick off output once per second, so we can see activity.
        EventLoop::repeat(self::INTERVAL, function () use ($generator, $sourceFiles, $dest, $io): void {
            $this->processFiles($generator, $sourceFiles, $dest, $io);
        });

        EventLoop::onSignal(\SIGINT, function (): void {
            echo "Caught SIGINT! exiting ...\n";
            exit;
        });

        EventLoop::run();
    }

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

    /**
     * on first iteration, all source files will be processed (since they will be older than our interval
     */
    private function processFiles(string $generator, array $sourceFiles, string $dest, SymfonyStyle $io): void
    {
        $yaml = new Yaml();
        foreach ($sourceFiles as $sourceFile) {
            $lastMod = \filemtime($sourceFile);
            $diff = time() - $lastMod;
            $io->info(
                sprintf('File: %s, Last Modified: %s, Current Time: %s, Diff: %s', $sourceFile, date(
                    'Y-m-d H:i:s',
                    $lastMod
                ), date('Y-m-d H:i:s', time()), $diff)
            );
            if ($this->isFirstRun || $diff <= self::INTERVAL) {
                $io->info(sprintf('Processing file: %s', $sourceFile));
                try {
                    $data = $yaml->parseFile($sourceFile);
                    $templateGenerator = $this->getGenerator($generator);
                    if ($templateGenerator === null) {
                        $io->error(sprintf('Failed to find generator for %s.', $generator));
                        exit;
                    }

                    $dom = HTMLDocumentDelegator::createEmpty();
                    $dom->setRenderer($templateGenerator);
                } catch (\Symfony\Component\Yaml\Exception\ParseException $e) {
                    $io->error('Failed to parse component description file. ' . $e->getMessage());
                    exit;
                }
            }
        }
        $this->isFirstRun = false;
    }

    private function getGenerator(string $generator): ?TemplateGeneratorInterface
    {
        $generators = [];
        // check all php files in src/ for TemplateGeneratorInterfaces
        $interface = TemplateGeneratorInterface::class;
        $generators = $this->getClassesImplementingInterface($interface);

        if (empty($generators)) {
            return null;
        }

        foreach ($generators as $className) {
            $reflectionClass = new ReflectionClass($className);
            foreach ($reflectionClass->getAttributes(TemplateGenerator::class) as $attribute) {
                $args = $attribute->getArguments();
                $name = $args[0] ?? null; // first argument
                if ($name === $generator) {
                    return new $className();
                }
            }
        }

        return null;
    }

    private function parseFile(string $generator, string $sourceFile, string $dest, SymfonyStyle $io): void
    {
        // @todo
    }

    private function createDirectory(string $dest, SymfonyStyle $io): void
    {
        if (mkdir($dest, 0777, true)) {
            $io->success(sprintf('Directory created successfully (%s).', $dest));
        } else {
            $io->error(sprintf('Failed to create directory (%s).', $dest));
            exit;
        }
    }

    private function classifyPathString(string $input): string
    {
        // 1) Check for wildcard characters
        if (preg_match('/[\*\?\[]/', $input)) {
            return 'glob';
        }

        $info = pathinfo($input);

        // 2) If there’s an extension, likely a filename
        if (! empty($info['extension'])) {
            return 'file';
        }

        // Otherwise, treat as path/directory
        if (is_dir($input)) {
            return 'directory';
        }

        return 'unknown';
    }
}
