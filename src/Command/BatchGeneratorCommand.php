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

class BatchGeneratorCommand extends Command
{
    use ClassResolverTrait;
    use GeneratorResolverTrait;

    /**
     * @param string $generator The generator(s) to use
     * @param string $dest The destination directory to write to
     */
    public function __invoke(
        string $generator,
        string $dest,
        InputInterface $input,
        OutputInterface $output,
        bool $overwriteExisting = false
    ): int {
        $io = new SymfonyStyle($input, $output);

        if (! \str_contains($generator, ',')) {
            $generators = [$generator];
        } else {
            $generators = \explode(',', $generator);
        }

        if (! is_dir($dest)) {
            $io->error("The destination path '{$dest}' is not a valid directory.");
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
                    $io->warning("Generator '{$name}' returned no output for element '{$className}'.");
                    continue;
                }
                $elementShortName = (new ReflectionClass($className))->getShortName();
                $fileName = $elementInstance::QUALIFIED_NAME . '.' . $generatorInstance->getExtension();
                $level = $this->determineLevel($className);
                if (! is_dir(
                    rtrim($dest, \DIRECTORY_SEPARATOR) . \DIRECTORY_SEPARATOR . $name . \DIRECTORY_SEPARATOR . $level
                )) {
                    mkdir(
                        rtrim(
                            $dest,
                            \DIRECTORY_SEPARATOR
                        ) . \DIRECTORY_SEPARATOR . $name . \DIRECTORY_SEPARATOR . $level,
                        0755,
                        true
                    );
                }
                $outFile = rtrim(
                    $dest,
                    \DIRECTORY_SEPARATOR
                ) . \DIRECTORY_SEPARATOR . $name . \DIRECTORY_SEPARATOR . $level . \DIRECTORY_SEPARATOR . $fileName;
                if (file_exists($outFile) && ! $overwriteExisting) {
                    $io->warning("File '{$outFile}' already exists. Skipping generation.");
                    continue;
                }
                file_put_contents($outFile, $output);
                $io->success("Generated: {$outFile}");
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
}
