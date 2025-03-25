<?php

namespace Html\Command;

use DOMDocument;
use Html\Delegator\HTMLDocumentDelegator;
use Html\Interface\ComponentBuilderInterface;
use Html\Interface\TemplateGeneratorInterface;
use Html\Mapping\TemplateGenerator;
use Html\Trait\ClassResolverTrait;
use ReflectionClass;
use Revolt\EventLoop;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Yaml\Yaml;

class WatchCommand extends Command
{
    use ClassResolverTrait;

    private const int INTERVAL = 2;

    private bool $isFirstRun = true;

    private ?array $data = null;

    private array $lastModifiedTimes = [];

    public function __construct(
        private readonly ComponentBuilderInterface $componentBuilder
    ) {
        parent::__construct();
    }

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

        if (! \str_contains($generator, ',')) {
            $generators = [$generator];
        } else {
            $generators = \explode(',', $generator);
        }

        if ($source === $dest) {
            $io->error(\sprintf('Source and destination directories cannot be the same (%s).', $dest));
            exit;
        }

        $sourceType = $this->classifyPathString($source);
        $sourceFiles = match ($sourceType) {
            'file' => [$source],
            'directory' => \glob($source . '/*'),
            'glob' => \glob($source),
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

        EventLoop::repeat(self::INTERVAL, function () use ($generators, $sourceFiles, $dest, $io): void {
            $this->processFiles($generators, $sourceFiles, $dest, $io);
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
    private function processFiles(array $generators, array $sourceFiles, string $dest, SymfonyStyle $io): void
    {
        foreach ($sourceFiles as $sourceFile) {
            $lastMod = \filemtime($sourceFile) ?: 0;

            if (
                $this->isFirstRun ||
                ! isset($this->lastModifiedTimes[$sourceFile]) ||
                $lastMod > $this->lastModifiedTimes[$sourceFile]
            ) {
                $io->info(sprintf('Processing file: %s', $sourceFile));
                $this->processSingleFile($generators, $sourceFile, $dest, $io);
                $this->lastModifiedTimes[$sourceFile] = $lastMod;
            }
        }
        $this->isFirstRun = false;
    }

    private function processSingleFile(
        array $generators,
        string $sourceFile,
        string $dest,
        SymfonyStyle $io
    ): void {
        $yaml = new Yaml();

        try {
            $data = $yaml->parseFile($sourceFile);
            $componentHandle = array_key_first($data);
            foreach ($generators as $generator) {
                $templateGenerator = $this->getGenerator($generator);
                if ($templateGenerator === null) {
                    $io->error(sprintf('Failed to find generator for %s.', $generator));
                    exit;
                }

                $dom = HTMLDocumentDelegator::createEmpty();
                $dom->setRenderer($templateGenerator);
                $this->componentBuilder->buildComponent($dom, $data);
                $detsinationPath = sprintf(
                    '%s/%s',
                    $dest,
                    str_replace(['{component}', '{extension}'], [
                        $componentHandle,
                        $templateGenerator->getExtension(),
                    ], $templateGenerator->getNamePattern())
                );
                file_put_contents(
                    $detsinationPath,
                    $this->formatHtml((string) $dom)
                ); // this is where a generators __toString method is called
            }
        } catch (\Symfony\Component\Yaml\Exception\ParseException $e) {
            $io->error('Failed to parse component description file. ' . $e->getMessage());
            exit;
        }
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

    private function formatHtml(string $html): string
    {
        $dom = new DOMDocument('1.0', 'utf-8');
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        @$dom->loadHTML($html, \LIBXML_HTML_NOIMPLIED | \LIBXML_HTML_NODEFDTD);
        return $dom->saveHTML();
    }

    private function createDirectory(string $dir, SymfonyStyle $io): void
    {
        if (\mkdir($dir, 0777, true)) {
            $io->success(sprintf('Directory created successfully (%s).', $dir));
        } else {
            $io->error(sprintf('Failed to create directory (%s).', $dir));
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
