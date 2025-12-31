<?php

declare(strict_types=1);

namespace Html\Command;

use ErrorException;
use Html\Helper\YamlHelper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Throwable;

final class MergeSpecifications extends Command
{
    private const HTML_DEFINITION_PATH = __DIR__ . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'Resources' . \DIRECTORY_SEPARATOR . 'specifications' . \DIRECTORY_SEPARATOR . 'html5.yaml';

    private YamlHelper $yaml;

    public function __construct(?YamlHelper $yaml = null)
    {
        parent::__construct();
        $this->yaml = $yaml ?? new YamlHelper();
    }

    public function __invoke(string $import, string $dest, InputInterface $input, OutputInterface $output): int
    {
        $customSpecs = $this->yaml->parseFile($import);
        $htmlSpecs = $this->yaml->parseFile(self::HTML_DEFINITION_PATH);
        $output = $htmlSpecs;

        // Global CSS attributes that can be used on _ANY_ element
        if (array_key_exists('*', $customSpecs)) {
            foreach ($htmlSpecs as $element => $props) {
                if (! isset($output[$element]['attributes'])) {
                    $output[$element]['attributes'] = $customSpecs['*']['attributes'];

                    continue;
                }
                $output[$element]['attributes'] = $this->deepMerge(
                    $output[$element]['attributes'],
                    $customSpecs['*']['attributes']
                );
            }
        }

        // Regex matching
        foreach (array_keys($customSpecs) as $pattern) {
            if (! $this->isValidRegex($pattern)) {
                continue;
            }

            $keys = array_keys($output);
            $result = preg_grep($pattern, $keys);

            foreach ($result as $key) {
                // Merge attributes if present
                if (isset($customSpecs[$pattern]['attributes'])) {
                    if (! isset($output[$key]['attributes'])) {
                        $output[$key]['attributes'] = $customSpecs[$pattern]['attributes'];
                    }

                    $output[$key]['attributes'] = $this->deepMerge(
                        $output[$key]['attributes'],
                        $customSpecs[$pattern]['attributes']
                    );
                }

                // Merge allowed_global_attributes if present
                if (isset($customSpecs[$pattern]['allowed_global_attributes'])) {
                    if (! isset($output[$key]['allowed_global_attributes'])) {
                        $output[$key]['allowed_global_attributes'] = $customSpecs[$pattern]['allowed_global_attributes'];
                    }

                    $output[$key]['allowed_global_attributes'] = \array_unique(\array_merge(
                        $output[$key]['allowed_global_attributes'],
                        $customSpecs[$pattern]['allowed_global_attributes']
                    ));
                }
            }

            unset($customSpecs[$pattern]); // Remove regex key from framework specs after processing (so we can deep merge all non-regex keys later)
        }

        // Deep merge everything else
        $output = $this->deepMerge($output, $customSpecs);
        if (isset($output['*'])) {
            unset($output['*']); // Remove global wildcard key from output
        }
        \file_put_contents($dest, $this->yaml->dump($output, 10, 2));
        return Command::SUCCESS;
    }

    /**
     * Deep merge arrays without converting scalar values to arrays
     */
    private function deepMerge(array $base, array $override): array
    {
        foreach ($override as $key => $value) {
            // Default: override takes precedence (no array conversion)
            $base[$key] = $value;

            if (! isset($base[$key]) || ! \is_array($base[$key]) || ! \is_array($value)) {
                continue;
            }

            // Special handling for 'choices' arrays - merge and deduplicate
            if ($key === 'choices') {
                $base[$key] = \array_values(\array_unique(\array_merge($base[$key], $value)));
                continue;
            }

            // Both are arrays, merge recursively
            $base[$key] = $this->deepMerge($base[$key], $value);
        }

        return $base;
    }

    private function isValidRegex(string $pattern): bool
    {
        // Use a temporary error handler to convert warnings into exceptions so we can safely test the regex
        $prev = set_error_handler(function ($errno, $errstr) {
            throw new ErrorException($errstr, $errno);
        });

        try {
            $valid = preg_match($pattern, '') !== false;
        } catch (Throwable $e) {
            $valid = false;
        }

        if ($prev !== null) {
            set_error_handler($prev);
        } else {
            restore_error_handler();
        }

        return $valid;
    }
}
