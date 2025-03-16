<?php

namespace Html\Command;

use Revolt\EventLoop;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

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
        $overwriteExisting,
        InputInterface $input,
        OutputInterface $output
    ): void {
        $io = new SymfonyStyle($input, $output);

        if ($source === $dest) {
            $io->error(sprintf('Source and destination directories cannot be the same (%s).', $dest));
            exit;
        }

        if (! is_file($source) && ! is_dir($source)) {
            $io->error(sprintf('Source (%s) must be a file or directory.', $source));
            exit;
        }

        $destSeemsFile = $this->seemsFile($dest);
        if ($destSeemsFile && is_dir(dirname($dest))) {
            $io->info(sprintf('Destination directory (%s) exists.', $dest));
        }

        if (! $destSeemsFile && is_dir($dest)) {
            $io->info(sprintf('Destination directory (%s) exists.', $dest));
        }

        if (! $destSeemsFile && ! is_dir($dest)) {
            $io->info(sprintf('Destination directory (%s) does not exist.', $dest));
            $createDir = $io->confirm(
                sprintf('Destination directory (%s) does not exist. Would you like to create it now?', $dest),
                false
            );
            if ($createDir) {
                if (mkdir($dest, 0777, true)) {
                    $io->success(sprintf('Directory created successfully (%s).', $dest));
                } else {
                    $io->error(sprintf('Failed to create directory (%s).', $dest));
                    exit;
                }
            }
        }

        $sourceSeemsFile = $this->seemsFile($source);
        if ($sourceSeemsFile && ! $this->isValidYaml($source)) {
            $io->error(sprintf('Component description file (%s) must be a YAML file.', $source));
            exit;
        }
        $sourceFiles[] = $source;



        $io->info(sprintf('Starting to watch: %s', $source));

        // Let's tick off output once per second, so we can see activity.
        EventLoop::repeat(self::INTERVAL, function () use ($generator, $sourceFiles, $dest, $io): void {
            $lastMod = \filemtime($source);
            $diff = time() - $lastMod;

            if ($diff > self::INTERVAL) {
                $this->processFiles($generator, $sourceFiles, $dest, $io);
            }

            $io->info(sprintf('Last modified: %s seconds ago', $diff));

            // $io->info(sprintf('Scanned folder %s at %s', $source, date('H:i:s')));
        });

        // What to do when a SIGINT signal is received
        EventLoop::onSignal(\SIGINT, function (): void {
            echo "Caught SIGINT! exiting ...\n";
            exit;
        });

        EventLoop::run();
    }

    public function classifyPathString(string $input): string
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
        return 'directory';
    }
}
