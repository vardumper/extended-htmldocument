<?php

// filepath: /src/Command/FolderWatchCommand.php

namespace App\Command;

use React\EventLoop\Loop;
use React\Filesystem\Filesystem;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class WatchCommand extends Command
{
    protected static $defaultName = 'app:folder-watch';

    protected function configure(): void
    {
        $this
            ->setDescription('Watches a specified folder for changes using ReactPHP.')
            ->setHelp('This command starts a ReactPHP loop that continuously monitors the folder.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // Create a ReactPHP event loop
        $loop = Loop::get();

        // Create a React Filesystem instance
        $filesystem = Filesystem::create($loop);

        // Folder/path you want to watch
        $pathToWatch = '/path/to/watch';

        $output->writeln('Starting to watch: ' . $pathToWatch);

        // ReactPHP doesn’t have built-in “watch” in react/filesystem,
        // so you could periodically scan or hook into OS-level events if available.
        $loop->addPeriodicTimer(2.0, function () use ($filesystem, $pathToWatch, $output) {
            $filesystem
                ->dir($pathToWatch)
                ->ls()
                ->then(function (array $nodes) use ($output) {
                    $output->writeln('Scanned folder at ' . date('H:i:s'));
                    // Check for changes, new files, removed files, etc.
                });
        });

        // Start the event loop
        $loop->run();

        return Command::SUCCESS;
    }
}
