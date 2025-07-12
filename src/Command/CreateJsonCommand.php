<?php

declare(strict_types=1);

namespace Html\Command;

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

        $htmlDefinitionPath = __DIR__ . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'Resources' . \DIRECTORY_SEPARATOR . 'specifications' . \DIRECTORY_SEPARATOR . 'html5.yaml';
        $htmlDefinitionPathJson = __DIR__ . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'Resources' . \DIRECTORY_SEPARATOR . 'specifications' . \DIRECTORY_SEPARATOR . 'html5.json';

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
}
