<?php

declare(strict_types=1);

namespace Html\Command;

use Html\Delegator\HTMLDocumentDelegator;
use Html\Element\BlockElement;
use Html\Element\InlineElement;
use Html\Element\VoidElement;
use Html\TemplateGenerator\NextJSGenerator;
use Html\TemplateGenerator\StorybookJSGenerator;
use Html\TemplateGenerator\TwigGenerator;
use Html\Trait\ClassResolverTrait;
use ReflectionClass;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * Generate composed component templates showing valid parent-child relationships
 * based on content model metadata ($parentOf specifically).
 *
 * Only generates templates for elements with SPECIFIC child requirements.
 * Skips elements with empty $parentOf (can contain any content) and generic containers.
 */
class GenerateComposedCommand extends Command
{
    use ClassResolverTrait;

    public function __invoke(
        string $generator,
        string $dest,
        InputInterface $input,
        OutputInterface $output,
        bool $overwriteExisting = false
    ): int {
        $io = new SymfonyStyle($input, $output);

        if (! is_dir($dest)) {
            $io->error("The destination path '{$dest}' is not a valid directory.");
            return Command::FAILURE;
        }

        // Instantiate the appropriate generator
        $generatorInstance = match ($generator) {
            'nextjs' => new NextJSGenerator(),
            'storybook' => new StorybookJSGenerator(),
            'twig' => new TwigGenerator(),
            default => null,
        };

        if ($generatorInstance === null) {
            $io->error("Unsupported generator '{$generator}'. Supported generators: nextjs, storybook, twig");
            return Command::FAILURE;
        }

        // Check if generator supports composed element rendering
        if (!method_exists($generatorInstance, 'renderComposedElement')) {
            $io->error("Generator '{$generator}' does not support composed element rendering.");
            return Command::FAILURE;
        }

        $baseClasses = [InlineElement::class, BlockElement::class, VoidElement::class];
        $elements = [];
        foreach ($baseClasses as $baseClass) {
            $elements = array_merge($elements, $this->getClassesExtendingClass($baseClass));
        }

        $dom = HTMLDocumentDelegator::createEmpty();
        $generatedCount = 0;
        $skippedCount = 0;

        // Create content directory
        $contentDir = rtrim($dest, \DIRECTORY_SEPARATOR) . \DIRECTORY_SEPARATOR . $generator . \DIRECTORY_SEPARATOR . 'composed';
        if (! is_dir($contentDir)) {
            mkdir($contentDir, 0755, true);
        }

        foreach ($elements as $className) {
            /** @var class-string<\Html\Interface\HTMLElementInterface> $className */
            $elementInstance = $className::create($dom);

            // Check if element has SPECIFIC child requirements (not empty $parentOf)
            // Skip elements that can contain any content
            $ref = new ReflectionClass($className);
            $parentOf = $ref->getStaticPropertyValue('parentOf', []);

            if (empty($parentOf)) {
                $skippedCount++;
                continue;
            }

            $output = $generatorInstance->renderComposedElement($elementInstance);
            if ($output === null) {
                $skippedCount++;
                continue;
            }

            $elementShortName = $ref->getShortName();
            $fileName = $elementInstance::QUALIFIED_NAME . '.composed.' . $generatorInstance->getExtension();
            $outFile = $contentDir . \DIRECTORY_SEPARATOR . $fileName;

            if (file_exists($outFile) && ! $overwriteExisting) {
                $io->warning("File '{$outFile}' already exists. Skipping.");
                $skippedCount++;
                continue;
            }

            file_put_contents($outFile, $output);
            $io->success("Generated: {$outFile}");
            $generatedCount++;
        }

        $io->success("Generated {$generatedCount} composed templates (specific composition patterns only). Skipped {$skippedCount} elements.");
        return Command::SUCCESS;
    }

    public function configure(): void
    {
        $this
            ->setName('generate:composed')
            ->setDescription('Generate composed component templates showing valid content model relationships')
            ->addArgument(
                'generator',
                InputArgument::REQUIRED,
                'The generator to use (nextjs, storybook, twig)'
            )
            ->addArgument(
                'dest',
                InputArgument::REQUIRED,
                'The destination directory to write composed templates to'
            )
            ->addOption(
                'overwrite-existing',
                'o',
                InputOption::VALUE_OPTIONAL,
                'Whether to overwrite existing files',
                false
            );
    }
}
