<?php

declare(strict_types=1);

namespace Html\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Yaml;

final class MergeSpecifications extends Command
{
   private const HTML_DEFINITION_PATH = __DIR__ . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'Resources' . \DIRECTORY_SEPARATOR . 'specifications' . \DIRECTORY_SEPARATOR . 'html5.yaml';

   public function __invoke(string $import, string $dest, InputInterface $input, OutputInterface $output): int
   {
      $customSpecs = Yaml::parseFile($import);
      $htmlSpecs = Yaml::parseFile(self::HTML_DEFINITION_PATH);
      $output = $htmlSpecs;

      // Global CSS attributes that can be used on _ANY_ element
      if (array_key_exists('*', $customSpecs)) {
         foreach ($htmlSpecs as $element => $props) {
            if (!isset($output[$element]['attributes'])) {
               $output[$element]['attributes'] = $customSpecs['*']['attributes'];

               continue;
            }
            $output[$element]['attributes'] = \array_merge_recursive($output[$element]['attributes'], $customSpecs['*']['attributes']);
         }
      }

      // Regex matching
      foreach (array_keys($customSpecs) as $pattern) {
         if (@preg_match($pattern, '') !== false) {
            $keys = array_keys($output);
            $result = preg_grep($pattern, $keys);

            foreach ($result as $key) {
               if (!isset($htmlSpecs[$key]['attributes'])) {
                  $output[$key]['attributes'] = $customSpecs[$pattern]['attributes'];

                  continue;
               }
               $output[$key]['attributes'] = \array_merge_recursive($output[$key]['attributes'], $customSpecs[$pattern]['attributes']);
            }

            unset($customSpecs[$pattern]); // Remove regex key from framework specs after processing (so we can deep merge all non-regex keys later)
         }
      }

      // Deep merge everything else
      $output = \array_merge_recursive($output, $customSpecs);
      if (isset($output['*'])) {
         unset($output['*']); // Remove global wildcard key from output
      }
      \file_put_contents($dest, Yaml::dump($output, 10, 2));
      return Command::SUCCESS;
   }
}
