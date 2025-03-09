<?php

// filepath: /src/Command/FolderWatchCommand.php

namespace Html\Command;

use Revolt\EventLoop;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class WatchCommand extends Command
{
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
    ): int {
        $io = new SymfonyStyle($input, $output);

        if ($source === $dest) {
            $io->error(sprintf('Source and destination directories cannot be the same (%s).', $dest));
            return Command::FAILURE;
        }

        if (! is_file($source) && ! is_dir($source)) {
            $io->error(sprintf('Source (%s) must be a file or directory.', $source));
            return Command::FAILURE;
        }

        $pathinfo = pathinfo($dest);
        $seemsFile = ! empty($pathinfo['extension']);
        if ($seemsFile && is_dir(dirname($dest))) {
            $io->info(sprintf('Destination directory (%s) exists.', $dest));
        }

        if (! $seemsFile && is_dir($dest)) {
            $io->info(sprintf('Destination directory (%s) exists.', $dest));
        }

        if (! $seemsFile && ! is_dir($dest)) {
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
                    return Command::FAILURE;
                }
            }
        }

        $io->info(sprintf('Starting to watch: %s', $source));

        // Start Amp's event loop
        EventLoop::run(function () use ($pathToWatch, $output) {
            // Schedule a repeated scan every two seconds
            EventLoop::repeat(2000, function (string $watcherId) use ($pathToWatch, $output) {
                // Perform directory scanning or other checks here
                $output->writeln('Scanned folder at ' . date('H:i:s'));

                // TODO: Compare with previous state for file changes, etc.
            });
        });

        return Command::SUCCESS;
    }
}
