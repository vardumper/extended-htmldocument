<?php

/**
 * reads the HTML5 specification and creates enum classes for static PHP (declared as 'enum' types)
 */

declare(strict_types=1);

namespace Html\Command;

use Exception;
use Silly\Input\InputArgument;
use Silly\Input\InputOption;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Yaml\Yaml;

/**
 * @usage create:enum
 * @description Creates all enumeration classes
 */
final class CreateEnumCommand extends Command
{
    private array $data;

    public function __invoke(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $specificationPath = $input->getOption('specification');
        // load custom html specification if given
        if ($specificationPath !== null) {
            if (! is_file($specificationPath)) {
                $io->error('The provided specification file does not exist.');
                return Command::FAILURE;
            }
            $this->data = Yaml::parseFile($specificationPath);
        } else {
            // load default specs
            $htmlDefinitionPath = __DIR__ . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'Resources' . \DIRECTORY_SEPARATOR . 'specifications' . \DIRECTORY_SEPARATOR . 'html5.yaml';
            if (! is_file($htmlDefinitionPath)) {
                $io->error('HTML definition file not found.');
                return Command::FAILURE;
            }

            $this->data = Yaml::parseFile($htmlDefinitionPath);
        }

        // Get the enum attributes
        $enumAttributes = $this->findEnumAttributes();

        $generatedAt = \date('Y-m-d H:i:s');
        foreach ($enumAttributes as $enumAttribute) {
            foreach ($enumAttribute as $element => $attributes) {
                $io->info("Creating enumeration class for '{$element}'");

                if (! isset($attributes['choices'])) {
                    throw new Exception('An enum attribute must have choices. Add choices or change type to string.');
                }
                if (! isset($attributes['elements'])) {
                    throw new Exception(
                        'An enum attribute must have elements. Add elements or change type to string.'
                    );
                }
                $cases = '';
                $className = ucfirst($element);

                if ($this->manyElementsHaveAttribute($element) && count($attributes['elements']) === 1) {
                    $className .= ucfirst($attributes['elements'][0]);
                }

                $defaultCase = $this->getCaseName((string) $attributes['defaultValue'] ?? '');
                foreach ($attributes['choices'] as $option) {
                    $caseName = $this->getCaseName($option);
                    $default = $caseName === $defaultCase ? ' // default' : '';
                    $cases .= sprintf("    case %s = '%s';%s", $caseName, $option, $default) . \PHP_EOL;
                }

                $className = $this->getClassName($className . 'Enum');
                $parameters = [
                    'namespace' => 'Html\Enum',
                    'class_name' => $className, // fixed missing parenthesis
                    'cases' => rtrim($cases),
                    'description' => $attributes['description'] ?? '', // fixed double dollar sign
                    'element_name' => $element,
                    'defaultValue' => $attributes['defaultValue'] ?? '',
                    'defaultCase' => $defaultCase,
                    'generatedAt' => $generatedAt,
                ];

                $path = __DIR__ . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'Enum' . \DIRECTORY_SEPARATOR . "{$className}.php"; // corrected variable syntax
                $templatePath = __DIR__ . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'Resources' . \DIRECTORY_SEPARATOR . 'templates' . \DIRECTORY_SEPARATOR . 'Enum.tpl.php';
                $this->createEnumFile($templatePath, $parameters, $path);
                $io->success("Enumeration class for '{$element}' created successfully.");
            }
        }

        return Command::SUCCESS;
    }

    public function configure(): void
    {
        $this
            ->setName('create:component')
            ->setDescription('Create a new component')
            ->addArgument('element', InputArgument::OPTIONAL, 'The HTML element name to create a class for')
            ->addOption(
                'specification',
                's',
                InputOption::VALUE_REQUIRED,
                'When set, uses the given specification file instead of the default HTML5 specification.'
            );
    }

    private function getCaseName(string $option): string
    {
        // special case single chars
        if (strlen($option) === 1) {
            if (strtolower($option) === $option) {
                $ret = 'L' . $option;
            }
            if (strtoupper($option) === $option) {
                $ret = 'U' . $option;
            }
            if (is_numeric($option)) {
                $ret = 'N' . $option;
            }

            $option = $ret;
        }

        // clenaup
        $option = str_replace(['-', '/'], '_', strtoupper($option));
        $option = trim($option, '_');

        return $option;
    }

    private function manyElementsHaveAttribute($attributeNAme): bool
    {
        $elementsWithTypeAttribute = [];
        foreach ($this->data as $element => $details) {
            if (isset($details['attributes']) && isset($details['attributes'][$attributeNAme])) {
                // found the second element with the same attribute
                if (count($elementsWithTypeAttribute) > 1) {
                    return true;
                }
                $elementsWithTypeAttribute[] = $element;
            }
        }
        return false;
    }

    // Function to find attributes of type 'enum'
    // @todo: consider union types. eg target="framename"|"_self"
    private function findEnumAttributes(): array
    {
        $enumAttributes = [];
        $i = 0;
        foreach ($this->data as $details) {
            if (isset($details['attributes'])) {
                foreach ($details['attributes'] as $attribute => $attributeDetails) {
                    if (isset($attributeDetails['type']) && $attributeDetails['type'] === 'enum') {
                        $enumAttributes[$i][$attribute] = $attributeDetails;
                        $i++;
                    }
                }
            }
        }
        return $enumAttributes;
    }

    private function createEnumFile(string $templatePath, array $parameters, string $path): void
    {
        // replace placeholders with actual values using eval
        \ob_start();
        \extract($parameters, \EXTR_SKIP);
        include $templatePath;

        $file = \ob_get_clean();
        \file_put_contents($path, $file);
    }

    private function getClassName(string $classname): string
    {
        $classname = \str_replace(['-', '/'], ' ', $classname);
        $classname = \str_replace(' ', '', ucwords($classname));
        $reserved = [
            '__halt_compiler',
            'abstract',
            'and',
            'array',
            'as',
            'break',
            'callable',
            'case',
            'catch',
            'class',
            'clone',
            'const',
            'continue',
            'declare',
            'default',
            'die',
            'do',
            'echo',
            'else',
            'elseif',
            'empty',
            'enddeclare',
            'endfor',
            'endforeach',
            'endif',
            'endswitch',
            'endwhile',
            'eval',
            'exit',
            'extends',
            'final',
            'finally',
            'for',
            'foreach',
            'function',
            'global',
            'goto',
            'if',
            'implements',
            'include',
            'include_once',
            'instanceof',
            'insteadof',
            'interface',
            'isset',
            'list',
            'namespace',
            'new',
            'or',
            'print',
            'private',
            'protected',
            'public',
            'require',
            'require_once',
            'return',
            'static',
            'switch',
            'throw',
            'trait',
            'try',
            'unset',
            'use',
            'var',
            'while',
            'xor',
            'yield',
            '__CLASS__',
            '__DIR__',
            '__FILE__',
            '__FUNCTION__',
            '__LINE__',
            '__METHOD__',
            '__NAMESPACE__',
            '__TRAIT__',
            'int',
            'float',
            'bool',
            'string',
            'mixed',
            'void',
            'null',
            'true',
            'false',
            'iterable',
            'resource',
            'numeric',
            'object',
        ];
        if (\in_array(\strtolower($classname), $reserved)) {
            return $classname . 'Element';
        }
        return $classname;
    }
}
