<?php

declare(strict_types=1);

namespace Html\Command;

use Silly\Input\InputOption;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Yaml\Yaml;

/**
 * @usage make:json
 * @description Simply converts the YAML HTML5 specification into JSON.
 */
final class CreateJsonCommand extends Command
{
    public function __invoke(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $specificationPath = $input->getOption('specification');

        // defaults
        $htmlDefinitionPath = __DIR__ . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'Resources' . \DIRECTORY_SEPARATOR . 'specifications' . \DIRECTORY_SEPARATOR . 'html5-with-aria.yaml';
        $htmlDefinitionPathJson = __DIR__ . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'Resources' . \DIRECTORY_SEPARATOR . 'specifications' . \DIRECTORY_SEPARATOR . 'html5-with-aria.json';

        // use custom spec path if given
        if ($specificationPath !== null) {
            $htmlDefinitionPath = $specificationPath;
            $htmlDefinitionPathJson = \pathinfo(
                $specificationPath,
                \PATHINFO_DIRNAME
            ) . \DIRECTORY_SEPARATOR . \pathinfo(
                $specificationPath,
                \PATHINFO_FILENAME
            ) . '.json';
        }

        if (! file_exists($htmlDefinitionPath)) {
            $io->error("The HTML definition file does not exist at: {$htmlDefinitionPath}");
            return Command::FAILURE;
        }

        $htmlDefinition = Yaml::parseFile($htmlDefinitionPath);
        \file_put_contents($htmlDefinitionPathJson, json_encode($htmlDefinition, \JSON_PRETTY_PRINT));

        $io->success('JSON output generated successfully.');
        $io->note("The JSON output has been saved to: {$htmlDefinitionPathJson}");

        return Command::SUCCESS;
    }

    public function configure(): void
    {
        $this
            ->setName('make:json-specs')
            ->setDescription('Convert YAML specification into JSON format')
            ->addOption(
                'specification',
                's',
                InputOption::VALUE_REQUIRED,
                'When set, uses the given specification file instead of the default HTML5 specification.'
            );
    }
}
