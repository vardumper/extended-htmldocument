<?php

declare(strict_types=1);

/**
 * This command watches a source directory or file for changes and generates component output based on the specified generator.
 * It uses the Revolt Event Loop to handle file changes and execute the generation process.
 */

namespace Html\Command;

use Html\Delegator\HTMLDocumentDelegator;
use Html\Element\BlockElement;
use Html\Element\InlineElement;
use Html\Element\VoidElement;
use Html\Helper\Helper;
use Html\Helper\YamlHelper;
use Html\Trait\ClassResolverTrait;
use Html\Trait\GeneratorResolverTrait;
use ReflectionClass;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class BatchGeneratorCommand extends Command
{
    use ClassResolverTrait;
    use GeneratorResolverTrait;

    private const HTML_DEFINITION_PATH = __DIR__ . '/../Resources/specifications/html5-with-aria.yaml';

    private YamlHelper $yaml;

    /**
     * @phpstan-ignore-next-line
     */
    private ?array $data = null;

    private SymfonyStyle $io;

    public function __construct(?YamlHelper $yaml = null)
    {
        parent::__construct();
        $this->yaml = $yaml ?? new YamlHelper();
    }

    /**
     * @param string $generator The generator(s) to use
     * @param string $dest The destination directory to write to
     */
    public function __invoke(
        string $generator,
        string $dest,
        InputInterface $input,
        OutputInterface $output,
        bool $overwriteExisting = false,
        ?string $specification = null
    ): int {
        $this->io = new SymfonyStyle($input, $output);

        if (! \str_contains($generator, ',')) {
            $generators = [$generator];
        } else {
            $generators = \explode(',', $generator);
        }

        if (! is_dir($dest)) {
            $this->io->error("The destination path '{$dest}' is not a valid directory.");
            return Command::FAILURE;
        }

        $specificationPath = $input->getOption('specification');
        if (! $this->loadHtmlDefinitions($specificationPath)) {
            return Command::FAILURE;
        }

        $baseClasses = [InlineElement::class, BlockElement::class, VoidElement::class];
        $elements = [];
        foreach ($baseClasses as $baseClass) {
            $elements = array_merge($elements, $this->getClassesExtendingClass($baseClass));
        }

        $dom = HTMLDocumentDelegator::createEmpty();
        $templateGenerators = $this->getGenerators($generators);
        foreach ($templateGenerators as $name => $generatorInstance) {
            foreach ($elements as $className) {
                /** @var class-string<\Html\Interface\HTMLElementDelegatorInterface> $className */
                $elementInstance = $className::create($dom);
                $output = $generatorInstance->render($elementInstance);
                if ($output === null) {
                    $this->io->warning("Generator '{$name}' returned no output for element '{$className}'.");
                    continue;
                }
                $elementShortName = (new ReflectionClass($className))->getShortName();
                $fileName = $elementInstance::getQualifiedName() . '.' . $generatorInstance->getExtension();
                $level = $this->determineLevel($className);

                // For twig-component, use bundle structure: src/{Twig|Resources}/{Block|Inline|Void}
                if ($name === 'twig-component') {
                    $componentDir = rtrim($dest, \DIRECTORY_SEPARATOR)
                        . \DIRECTORY_SEPARATOR . $name
                        . \DIRECTORY_SEPARATOR . 'src'
                        . \DIRECTORY_SEPARATOR . 'Resources'
                        . \DIRECTORY_SEPARATOR . $level
                        . \DIRECTORY_SEPARATOR . $elementInstance::getQualifiedName();
                } else {
                    $componentDir = rtrim($dest, \DIRECTORY_SEPARATOR)
                        . \DIRECTORY_SEPARATOR . $name
                        . \DIRECTORY_SEPARATOR . $level
                        . \DIRECTORY_SEPARATOR . $elementInstance::getQualifiedName();
                }

                if (! is_dir($componentDir)) {
                    mkdir($componentDir, 0755, true);
                }

                $outFile = $componentDir . \DIRECTORY_SEPARATOR . $fileName;
                if (file_exists($outFile) && ! $overwriteExisting) {
                    $this->io->warning("File '{$outFile}' already exists. Skipping generation.");
                    continue;
                }
                file_put_contents($outFile, $output);
                $this->io->success("Generated: {$outFile}");

                // Generate PHP component class for twig-component generator
                if ($name === 'twig-component' && method_exists($generatorInstance, 'renderComponentClass')) {
                    $componentClass = $generatorInstance->renderComponentClass($elementInstance);
                    $componentName = $this->getSafeComponentClassName(ucfirst($elementInstance::getQualifiedName()));

                    // PHP classes go in src/Twig/{Block|Inline|Void}
                    $levelCap = ucfirst($level);
                    $phpDir = rtrim($dest, \DIRECTORY_SEPARATOR)
                        . \DIRECTORY_SEPARATOR . $name
                        . \DIRECTORY_SEPARATOR . 'src'
                        . \DIRECTORY_SEPARATOR . 'Twig'
                        . \DIRECTORY_SEPARATOR . $levelCap;

                    if (! is_dir($phpDir)) {
                        mkdir($phpDir, 0755, true);
                    }

                    $componentFile = $phpDir . \DIRECTORY_SEPARATOR . $componentName . '.php';

                    if (file_exists($componentFile) && ! $overwriteExisting) {
                        $this->io->warning("File '{$componentFile}' already exists. Skipping generation.");
                        continue;
                    }

                    file_put_contents($componentFile, $componentClass);
                    $this->io->success("Generated component class: {$componentFile}");
                }
            }
        }
        return Command::SUCCESS;
    }

    private function determineLevel(string $className): string
    {
        $level = (new ReflectionClass($className))->getParentClass();
        $parts = explode('\\', $level->getName());
        return strtolower(str_replace('Element', '', end($parts)));
    }

    private function loadHtmlDefinitions(?string $specificationPath): bool
    {
        if ($specificationPath !== null) {
            if (! is_file($specificationPath)) {
                $this->io->error('Specification file not found at ' . $specificationPath);
                return false;
            }
            $this->data = $this->yaml->parseFile($specificationPath);
            return true;
        }

        if (! is_file(self::HTML_DEFINITION_PATH)) {
            $this->io->error('HTML definition file not found.');
            return false;
        }

        $this->data = $this->yaml->parseFile(self::HTML_DEFINITION_PATH);
        return true;
    }

    /**
     * Get safe component class name, avoiding PHP reserved words
     */
    private function getSafeComponentClassName(string $className): string
    {
        $reserved = (new Helper())->getReservedWords();
        if (in_array(strtolower($className), $reserved, true)) {
            return $className . 'Element';
        }
        return $className;
    }
}
