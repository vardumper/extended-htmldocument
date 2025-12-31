<?php

/**
 * reads the HTML5 specification and creates enum classes for static PHP (declared as 'enum' types)
 */

declare(strict_types=1);

namespace Html\Command;

use Exception;
use Html\Helper\YamlHelper;
use Silly\Input\InputArgument;
use Silly\Input\InputOption;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * @usage create:enum
 * @description Creates all enumeration classes
 */
final class CreateEnumCommand extends Command
{
    private array $data;

    private YamlHelper $yaml;

    public function __construct(?YamlHelper $yaml = null)
    {
        parent::__construct();
        $this->yaml = $yaml ?? new YamlHelper();
    }

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
            $this->data = $this->yaml->parseFile($specificationPath);
        } else {
            // load default specs
            $htmlDefinitionPath = __DIR__ . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'Resources' . \DIRECTORY_SEPARATOR . 'specifications' . \DIRECTORY_SEPARATOR . 'html5-with-aria.yaml';
            if (! is_file($htmlDefinitionPath)) {
                $io->error('HTML definition file not found.');
                return Command::FAILURE;
            }

            $this->data = $this->yaml->parseFile($htmlDefinitionPath);
        }


        // Aggregate all data-* attributes with type enum and identical choices

        // Find all enum attributes (type 'enum' or union containing 'enum')
        $enumAttributes = $this->findEnumAttributes();

        $generatedAt = \date('Y-m-d H:i:s');
        foreach ($enumAttributes as $enumAttribute) {
            foreach ($enumAttribute as $element => $attributes) {
                $io->info("Creating enumeration class for '{$element}'");

                if (! isset($attributes['choices'])) {
                    throw new Exception('An enum attribute must have choices. Add choices or change type to string.');
                }
                if (! isset($attributes['elements']) || ! is_array($attributes['elements'])) {
                    $elementsWithAttribute = [];
                    foreach ($this->data as $tmpEl => $tmpData) {
                        if (isset($tmpData['attributes']) && isset($tmpData['attributes'][$element])) { // @todo dont like data-theme in here
                            $elementsWithAttribute[] = $tmpEl;
                        }
                    }
                    $attributes['elements'] = $elementsWithAttribute;
                }

                // Reset cases for each enum
                $cases = '';
                $className = ucfirst($element);

                // If this is a generic enum (most common, >50% usage), don't prefix with element name
                if (isset($attributes['_is_generic']) && $attributes['_is_generic']) {
                    // Keep generic name like "RoleEnum"
                    $className = ucfirst($element);
                } elseif (isset($attributes['_element_specific']) && $attributes['_element_specific']) {
                    // Element-specific enum for less common cases, prefix with element name
                    $className = ucfirst($attributes['elements'][0]) . $className;
                } elseif ($this->manyElementsHaveAttribute($element) && count($attributes['elements']) === 1) {
                    $className .= ucfirst($attributes['elements'][0]);
                }

                $defaultCase = $this->getCaseName((string) ($attributes['defaultValue'] ?? ''));
                // Deduplicate choices to avoid duplicate enum cases
                $uniqueChoices = array_unique($attributes['choices']);
                foreach ($uniqueChoices as $option) {
                    $caseName = $this->getCaseName($option);
                    $default = $caseName === $defaultCase ? ' // default' : '';
                    $cases .= sprintf("    case %s = '%s';%s", $caseName, $option, $default) . \PHP_EOL;
                }

                $className = $this->getClassName($className . 'Enum');
                $parameters = [
                    'namespace' => 'Html\Enum',
                    'class_name' => $className,
                    'cases' => rtrim($cases),
                    'description' => $attributes['description'] ?? '',
                    'element_name' => $element,
                    'defaultValue' => $attributes['defaultValue'] ?? '',
                    'defaultCase' => $defaultCase,
                    'generatedAt' => $generatedAt,
                ];

                $path = __DIR__ . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'Enum' . \DIRECTORY_SEPARATOR . "{$className}.php";
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
            $ret = '';
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

        // cleanup: replace spaces, dashes, slashes with underscores, uppercase
        $option = str_replace([' ', '-', '/'], '_', strtoupper($option));
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
        $attributesByName = []; // Track all enum attributes by name

        // First pass: collect all enum attributes grouped by attribute name
        foreach ($this->data as $elementName => $details) {
            if (isset($details['attributes'])) {
                foreach ($details['attributes'] as $attribute => $attributeDetails) {
                    if (isset($attributeDetails['type'])) {
                        $type = $attributeDetails['type'];
                        // Support 'enum', 'enum|string', 'enum|boolean', etc.
                        if ($type === 'enum' || (is_string($type) && preg_match('/(^|\|)enum($|\|)/', $type))) {
                            if (! isset($attributesByName[$attribute])) {
                                $attributesByName[$attribute] = [];
                            }
                            $attributesByName[$attribute][] = [
                                'element' => $elementName,
                                'details' => $attributeDetails,
                            ];
                        }
                    }
                }
            }
        }

        // Second pass: determine if we need element-specific enums
        $i = 0;
        foreach ($attributesByName as $attributeName => $occurrences) {
            $choiceSets = [];
            $totalElements = count($occurrences);

            // Group occurrences by their choice sets
            foreach ($occurrences as $occurrence) {
                $choices = $occurrence['details']['choices'] ?? [];
                sort($choices); // Sort for consistent comparison
                $choiceKey = implode('|', $choices);

                if (! isset($choiceSets[$choiceKey])) {
                    $choiceSets[$choiceKey] = [
                        'choices' => $choices,
                        'elements' => [],
                        'details' => $occurrence['details'],
                    ];
                }
                $choiceSets[$choiceKey]['elements'][] = $occurrence['element'];
            }

            // If there's only one unique choice set, create a single shared enum
            if (count($choiceSets) === 1) {
                $choiceSet = reset($choiceSets);
                $enumAttributes[$i][$attributeName] = $choiceSet['details'];
                $enumAttributes[$i][$attributeName]['elements'] = $choiceSet['elements'];
                $i++;
            } else {
                // Multiple choice sets - find the most common one (>50% usage)
                $mostCommonChoiceSet = null;
                $mostCommonCount = 0;

                foreach ($choiceSets as $choiceKey => $choiceSet) {
                    $count = count($choiceSet['elements']);
                    if ($count > $mostCommonCount) {
                        $mostCommonCount = $count;
                        $mostCommonChoiceSet = $choiceKey;
                    }
                }

                $threshold = $totalElements / 2;

                // Create enums based on usage threshold
                foreach ($choiceSets as $choiceKey => $choiceSet) {
                    $elementCount = count($choiceSet['elements']);

                    if ($choiceKey === $mostCommonChoiceSet && $elementCount > $threshold) {
                        // This is the most common choice set and used by >50% - create generic enum
                        $enumAttributes[$i][$attributeName] = $choiceSet['details'];
                        $enumAttributes[$i][$attributeName]['elements'] = $choiceSet['elements'];
                        $enumAttributes[$i][$attributeName]['_is_generic'] = true;
                        $i++;
                    } else {
                        // Less common choice set - create element-specific enums
                        foreach ($choiceSet['elements'] as $elementName) {
                            $enumAttributes[$i][$attributeName] = $choiceSet['details'];
                            $enumAttributes[$i][$attributeName]['elements'] = [$elementName];
                            $enumAttributes[$i][$attributeName]['_element_specific'] = true;
                            $i++;
                        }
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
