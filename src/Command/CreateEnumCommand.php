<?php

namespace Html\Command;

use Silly\Input\InputArgument;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Yaml\Yaml;
use Symplify\EasyCodingStandard\Console\ExitCode;

/**
 * @usage create:enum
 * @description Creates all enumeration classes
 */
final class CreateEnumCommand extends Command
{
    public function __invoke(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $htmlDefinitionPath = getcwd() . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Resources' . DIRECTORY_SEPARATOR . 'definitions' . DIRECTORY_SEPARATOR . 'html5.yaml';
        if (! is_file($htmlDefinitionPath)) {
            $io->error('HTML definition file not found.');
            return ExitCode::FAILURE;
        }

        $data = Yaml::parseFile($htmlDefinitionPath);
        // Get the enum attributes
        $enumAttributes = $this->findEnumAttributes($data);

        foreach ($enumAttributes as $element => $attributes) {
            $io->info("Creating enumeration class for '{$element}'");

            $cases = '';
            foreach ($attributes['choices'] as $option) {
                $cases .= sprintf(
                    "    const %s = '%s';",
                    str_replace(['-', '/'], '_', strtoupper($option)),
                    $option
                ) . PHP_EOL;
            }

            $className = $this->getClassName(ucfirst($element) . 'Enum');
            $parameters = [
                'namespace' => 'Html\Enum',
                'class_name' => $className, // fixed missing parenthesis
                'cases' => rtrim($cases),
                'description' => $attributes['description'] ?? '', // fixed double dollar sign
                'element_name' => $element,
                'defaultValue' => $attributes['defaultValue'] ?? '',
            ];

            $path = \getcwd() . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Enum' . DIRECTORY_SEPARATOR . "{$className}.php"; // corrected variable syntax
            $templatePath = \getcwd() . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Resources' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'Enum.tpl.php';
            $this->createEnumFile($templatePath, $parameters, $path);
            $io->success("Enumeration class for '{$element}' created successfully.");
            // die;
        }

        return ExitCode::SUCCESS;
    }

    public function configure(): void
    {
        $this
            ->setName('create:component')
            ->setDescription('Create a new component')
            ->addArgument('element', InputArgument::OPTIONAL, 'The HTML element name to create a class for');
    }

    // Function to find attributes of type 'enum'
    // @todo: consider union types. eg target="framename" | "_self" | "_parent" | "_top" | "_blank"
    private function findEnumAttributes(array $data): array
    {
        $enumAttributes = [];

        foreach ($data as $details) {
            if (isset($details['attributes'])) {
                foreach ($details['attributes'] as $attribute => $attributeDetails) {
                    if (isset($attributeDetails['type']) && $attributeDetails['type'] === 'enum') {
                        $enumAttributes[$attribute] = $attributeDetails;
                    }
                }
            }
        }
        // var_dump($enumAttributes);
        // exit;
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
