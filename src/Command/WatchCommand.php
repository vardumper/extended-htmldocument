<?php

namespace Html\Command;

use Html\Interface\TemplateGeneratorInterface;
use Html\Mapping\TemplateGenerator;
use ReflectionClass;
use Revolt\EventLoop;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Yaml\Yaml;

class WatchCommand extends Command
{
    private const int INTERVAL = 2;

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
     * on first iteration, all source files will be processed (since they will be older than our interval
     */
    private function processFiles(string $generator, array $sourceFiles, string $dest, SymfonyStyle $io): void
    {
        $yaml = new Yaml();
        foreach ($sourceFiles as $sourceFile) {
            $lastMod = \filemtime($sourceFile);
            $diff = time() - $lastMod;

            if ($diff > self::INTERVAL) {
                $io->info(sprintf('Processing file: %s', $sourceFile));
                try {
                    $data = $yaml->parseFile($sourceFile);
                    $templateGenerator = $this->getGenerator($generator);
                    if ($templateGenerator === null) {
                        $io->error(sprintf('Failed to find generator for %s.', $generator));
                        exit;
                    }
                } catch (\Symfony\Component\Yaml\Exception\ParseException $e) {
                    $io->error('Failed to parse component description file. ' . $e->getMessage());
                    exit;
                }

                var_dump($data);
                // $this->parseFile ($generator, $sourceFile, $dest, $io);
            }
        }
    }

    private function getGenerator(string $generator): ?TemplateGeneratorInterface
    {
        // check autoloaded classes for TemplateGeneratorInterfaces
        $generators = [];
        foreach (get_declared_classes() as $class) {
            if (is_subclass_of($class, TemplateGeneratorInterface::class)) {
                $generators[] = $class;
            }
        }

        foreach ($generators as $className) {
            $reflectionClass = new ReflectionClass($className);
            $attributes = $reflectionClass->getAttributes(TemplateGenerator::class);
            foreach ($attributes as $attribute) {
                $args = $attribute->getArguments();
                if (! array_key_exists('name', $args)) {
                    continue;
                }
                if ($args['name'] === $generator) {
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
