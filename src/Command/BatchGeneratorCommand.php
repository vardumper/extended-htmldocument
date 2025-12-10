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

                // For twig-component, use bundle structure: src/{Twig|Resources}/{Block|Inline|Void}
                if ($name === 'twig-component') {
                    $componentDir = rtrim($dest, \DIRECTORY_SEPARATOR)
                        . \DIRECTORY_SEPARATOR . $name
                        . \DIRECTORY_SEPARATOR . 'src'
                        . \DIRECTORY_SEPARATOR . 'Resources'
                        . \DIRECTORY_SEPARATOR . $level
                        . \DIRECTORY_SEPARATOR . $elementInstance::QUALIFIED_NAME;
                } else {
                    $componentDir = rtrim($dest, \DIRECTORY_SEPARATOR)
                        . \DIRECTORY_SEPARATOR . $name
                        . \DIRECTORY_SEPARATOR . $level
                        . \DIRECTORY_SEPARATOR . $elementInstance::QUALIFIED_NAME;
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
                    $componentName = $this->getSafeComponentClassName(ucfirst($elementInstance::QUALIFIED_NAME));

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

            // Generate bundle files for twig-component
            if ($name === 'twig-component') {
                $this->generateBundleFiles($dest . \DIRECTORY_SEPARATOR . $name, $overwriteExisting);
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

    private function generateBundleFiles(string $bundleDir, bool $overwrite): void
    {
        // Generate composer.json
        $composerJson = [
            'name' => 'vardumper/html5-ux-twig-component-bundle',
            'description' => 'Symfony UX Twig Components for typesafe HTML5 elements with ARIA support & enum validation',
            'type' => 'symfony-bundle',
            'license' => 'MIT',
            'keywords' => ['symfony', 'twig', 'components', 'html5', 'aria', 'ux'],
            'authors' => [
                [
                    'name' => 'vardumper',
                    'email' => 'info@erikpoehler.com',
                ],
            ],
            'require' => [
                'php' => '^8.2',
                'symfony/twig-bundle' => '^6.0|^7.0',
                'symfony/ux-twig-component' => '^2.0',
                'vardumper/extended-htmldocument' => '^0.2',
            ],
            'autoload' => [
                'psr-4' => [
                    'Html\\TwigComponentBundle\\' => 'src/',
                ],
            ],
            'extra' => [
                'symfony' => [
                    'require' => '^6.0|^7.0',
                ],
            ],
        ];

        $composerFile = $bundleDir . \DIRECTORY_SEPARATOR . 'composer.json';
        if (! file_exists($composerFile) || $overwrite) {
            file_put_contents(
                $composerFile,
                json_encode($composerJson, \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES) . "\n"
            );
            $this->io->success("Generated: {$composerFile}");
        }

        // Generate HtmlComponentBundle.php
        $bundleClass = <<<'PHP'
<?php

namespace Html\ComponentBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * HTML Component Bundle
 *
 * Provides Symfony UX Twig Components for all HTML5 elements with ARIA support.
 *
 * @author vardumper <info@erikpoehler.com>
 * @package Html\ComponentBundle
 */
class HtmlComponentBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}

PHP;

        $bundleFile = $bundleDir . \DIRECTORY_SEPARATOR . 'src' . \DIRECTORY_SEPARATOR . 'HtmlComponentBundle.php';
        if (! file_exists($bundleFile) || $overwrite) {
            $bundleFileDir = dirname($bundleFile);
            if (! is_dir($bundleFileDir)) {
                mkdir($bundleFileDir, 0755, true);
            }
            file_put_contents($bundleFile, $bundleClass);
            $this->io->success("Generated: {$bundleFile}");
        }

        // Generate README.md
        $readme = <<<'MD'
# HTML Component Bundle

Symfony UX Twig Components for all HTML5 elements with ARIA support.

## Installation

```bash
composer require html/component-bundle
```

## Configuration

Register the bundle in `config/bundles.php`:

```php
return [
    // ...
    Html\ComponentBundle\HtmlComponentBundle::class => ['all' => true],
];
```

## Usage

Use any HTML element as a Twig Component:

```twig
<twig:Blockquote cite="https://example.com">
    This is a quote from example.com
</twig:Blockquote>

<twig:Button role="button" type="submit">
    Submit Form
</twig:Button>

<twig:Input type="email" name="email" required />
```

## Features

- ✅ All HTML5 elements supported
- ✅ Full ARIA attributes support
- ✅ Type-safe enum validation
- ✅ PreMount validation with OptionsResolver
- ✅ Proper namespace structure (Block/Inline/Void)

## Components Structure

Components are organized by type:
- `Block` - Block-level elements (div, section, article, etc.)
- `Inline` - Inline elements (span, a, strong, etc.)
- `Void` - Self-closing elements (img, input, br, etc.)

## License

MIT

MD;

        $readmeFile = $bundleDir . \DIRECTORY_SEPARATOR . 'README.md';
        if (! file_exists($readmeFile) || $overwrite) {
            file_put_contents($readmeFile, $readme);
            $this->io->success("Generated: {$readmeFile}");
        }
    }

    /**
     * Get safe component class name, avoiding PHP reserved words
     */
    private function getSafeComponentClassName(string $className): string
    {
        $reserved = Helper::getReservedWords();
        if (in_array(strtolower($className), $reserved, true)) {
            return $className . 'Element';
        }
        return $className;
    }
}
