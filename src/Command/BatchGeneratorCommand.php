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
use Html\Trait\ClassResolverTrait;
use Html\Trait\GeneratorResolverTrait;
use ReflectionClass;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Yaml\Yaml;

class BatchGeneratorCommand extends Command
{
    use ClassResolverTrait;
    use GeneratorResolverTrait;

    private const HTML_DEFINITION_PATH = __DIR__ . '/../Resources/specifications/html5-with-aria.yaml';

    private ?array $data = null;

    private SymfonyStyle $io;

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
                /** @var class-string<\Html\Interface\HTMLElementInterface> $className */
                $elementInstance = $className::create($dom);
                $output = $generatorInstance->render($elementInstance);
                if ($output === null) {
                    $this->io->warning("Generator '{$name}' returned no output for element '{$className}'.");
                    continue;
                }
                $elementShortName = (new ReflectionClass($className))->getShortName();
                $fileName = $elementInstance::QUALIFIED_NAME . '.' . $generatorInstance->getExtension();
                $level = $this->determineLevel($className);
                if (! is_dir(
                    rtrim(
                        $dest,
                        \DIRECTORY_SEPARATOR
                    ) . \DIRECTORY_SEPARATOR . $name . \DIRECTORY_SEPARATOR . $level . \DIRECTORY_SEPARATOR . $elementInstance::QUALIFIED_NAME
                )) {
                    mkdir(
                        rtrim(
                            $dest,
                            \DIRECTORY_SEPARATOR
                        ) . \DIRECTORY_SEPARATOR . $name . \DIRECTORY_SEPARATOR . $level . \DIRECTORY_SEPARATOR . $elementInstance::QUALIFIED_NAME,
                        0755,
                        true
                    );
                }
                $outFile = rtrim(
                    $dest,
                    \DIRECTORY_SEPARATOR
                ) . \DIRECTORY_SEPARATOR . $name . \DIRECTORY_SEPARATOR . $level . \DIRECTORY_SEPARATOR . $elementInstance::QUALIFIED_NAME . \DIRECTORY_SEPARATOR . $fileName;
                if (file_exists($outFile) && ! $overwriteExisting) {
                    $this->io->warning("File '{$outFile}' already exists. Skipping generation.");
                    continue;
                }
                file_put_contents($outFile, $output);
                $this->io->success("Generated: {$outFile}");
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
            $this->data = Yaml::parseFile($specificationPath);
            return true;
        }

        if (! is_file(self::HTML_DEFINITION_PATH)) {
            $this->io->error('HTML definition file not found.');
            return false;
        }

        $this->data = Yaml::parseFile(self::HTML_DEFINITION_PATH);
        return true;
    }
}
