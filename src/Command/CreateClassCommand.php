<?php

namespace Html\Command;

use Html\Helper\Helper;
use Silly\Input\InputArgument;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Yaml\Yaml;

/**
 * @usage create:component [element]
 * @description Create a new component
 * @tutorial an example element value can be div
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element
 */
final class CreateClassCommand extends Command
{
    private array $uses = [];

    private array $data;

    public function __invoke($element, InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $elements = [];

        $htmlDefinitionPath = __DIR__ . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'Resources' . \DIRECTORY_SEPARATOR . 'definitions' . \DIRECTORY_SEPARATOR . 'html5.yaml';
        if (! is_file($htmlDefinitionPath)) {
            $io->error('HTML definition file not found.');
            return Command::FAILURE;
        }
        $this->data = Yaml::parseFile($htmlDefinitionPath);
        $availableElements = array_keys($this->data);

        $batchElements = $element ? [$element] : $availableElements;

        foreach ($batchElements as $element) {
            if (! in_array($element, $availableElements)) {
                $io->error('Element not found in definitions.');
                return Command::FAILURE;
            }

            $io->info('Creating a new class for ' . $element);

            $this->uses = []; // reset use statements

            $className = $this->getClassName(\str_replace(' ', '', \ucfirst($this->data[$element]['name'])));
            $level = $this->data[$element]['level'];
            $unique_per_parent = $this->data[$element]['unique_per_parent'] ?? false;
            $unique = $unique_per_parent = $this->data[$element]['unique'] ?? false;
            $self_closing = $this->data[$element]['self_closing'] ?? false;
            $namespace = 'Html\\Element\\' . ucfirst($level);
            $description = $this->data[$element]['description'] ?? '';
            $defaultValue = $this->data[$element]['default'] ?? '';
            $attributes = $this->data[$element]['attributes'] ?? [];
            $fileName = $className . '.php';
            $path = \sprintf('Element/%s/%s', \ucfirst($level), $fileName);

            $this->uses[] = \sprintf("Html\Element\%sElement", \ucfirst($level)); // extends

            $methods = $this->getMethods($attributes);
            $attributes = $this->getAttributes($attributes); // before use statements
            $parents = $this->resolveParents(explode(' | ', $this->data[$element]['parent'] ?? ''));
            $children = $this->resolveChildren($this->data[$element]['children'] ?? []);
            $use_statements = $this->getUseStatements($children, $parents, $namespace . '\\' . $className);

            $parameters = [
                'class_name' => $className,
                'element_name' => $element,
                'namespace' => $namespace,
                'use_statements' => $use_statements,
                'level' => $level,
                'description' => $description,
                'unique' => $unique,
                'parents' => $parents,
                'children' => $children,
                'unique_per_parent' => $unique_per_parent,
                'defaultValue' => $defaultValue,
                'attributes' => $attributes,
                'path' => $path,
                'self_closing' => $self_closing,
                'methods' => $methods,
            ];

            $templatePath = __DIR__ . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'Resources' . \DIRECTORY_SEPARATOR . 'templates' . \DIRECTORY_SEPARATOR . \ucfirst(
                $level
            ) . 'Element.tpl.php';
            $this->createClassFile($templatePath, $parameters, $path);

            $io->success(sprintf('Class %s created successfully', $path));
        }

        return Command::SUCCESS;
    }

    public function resolveParents(array $qualifiedNames): array
    {
        $qualifiedNames = array_filter($qualifiedNames, fn ($value) => strlen($value) > 0);
        $parents = [];
        foreach ($qualifiedNames as $qualifiedName) {
            $className = $this->getClassName(\str_replace(' ', '', \ucfirst($this->data[$qualifiedName]['name'])));
            $level = $this->data[$qualifiedName]['level']; // updated to use $this->data
            $namespace = 'Html\\Element\\' . ucfirst($level);
            $parents[$className] = $namespace . '\\' . $className;
        }
        return $parents;
    }

    public function resolveChildren(array $qualifiedNames): array
    {
        $qualifiedNames = array_filter($qualifiedNames, fn ($value) => strlen($value) > 0);
        $children = [];
        foreach ($qualifiedNames as $qualifiedName) {
            $className = $this->getClassName(\str_replace(' ', '', \ucfirst($this->data[$qualifiedName]['name'])));
            $level = $this->data[$qualifiedName]['level']; // updated to use $this->data
            $namespace = 'Html\\Element\\' . ucfirst($level);
            $children[$className] = $namespace . '\\' . $className;
        }
        return $children;
    }

    public function configure(): void
    {
        $this
            ->setName('create:component')
            ->setDescription('Create a new component')
            ->addArgument('element', InputArgument::OPTIONAL, 'The HTML element name to create a class for');
    }

    private function createClassFile(string $templatePath, array $parameters, string $path): void
    {
        // replace placeholders with actual values using eval
        \ob_start();
        \extract($parameters, \EXTR_SKIP);
        include $templatePath;

        $file = \ob_get_clean();
        \file_put_contents(__DIR__ . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . $path, $file);
    }

    private function getMethods(array $attributes): string
    {
        $retVal = '';
        foreach ($attributes as $attribute => $details) {
            $type = $details['type'] ?? '';
            $type = $this->mapToPhpType($type);
            $variableName = $this->toVariableName($attribute);
            $methodName = ucfirst($this->toVariableName($attribute));
            if ($type === 'enum') {
                $kebapCase = $this->toKebapCase($attribute);
                $type = \sprintf('%sEnum', $kebapCase);
                $signature = "    public function set%s(%s \$%s): self
    {
        \$this->%s = \$%s;
        \$this->htmlElement->setAttribute('%s', \$%s->value);
        return \$this;
    }

    public function get%s(): ?%s
    {
        return \$this->%s;
    }\n\n";
                $retVal .= \sprintf(
                    $signature,
                    $methodName,
                    $type,
                    $variableName,
                    $variableName,
                    $variableName,
                    $attribute,
                    $variableName,
                    $methodName,
                    $type,
                    $variableName
                );
            } else {
                $signature = "    public function set%s(%s \$%s): self
    {
        \$this->%s = \$%s;
        return \$this;
    }

    public function get%s(): ?%s
    {
        return \$this->%s;
    }\n\n";
                $retVal .= \sprintf(
                    $signature,
                    $methodName,
                    $type,
                    $variableName,
                    $variableName,
                    $variableName,
                    $methodName,
                    $type,
                    $variableName
                );
            }
        }
        return $retVal;
    }

    private function getAttributes(array $attributes): string
    {
        $transformedAttributes = '';
        foreach ($attributes as $attribute => $details) {
            $type = $details['type'] ?? '';
            $comment = $this->getAttributeComment($details);
            $type = $this->mapToPhpType($type);
            $visibility = 'public';
            if ($type === 'enum') {
                $kebapCase = $this->toKebapCase($attribute);
                $this->uses[] = sprintf("Html\Enum\%sEnum", $kebapCase);
                $type = \sprintf('%sEnum', $kebapCase);
                $visibility = 'protected';
                // $default = isset($details['defaultValue']) ? sprintf(" = %sEnum::from('%s')", $kebapCase, $details['defaultValue']) : '';
            }
            $variableName = $this->toVariableName($attribute);
            $transformedAttributes .= \sprintf(
                "    %s    %s ?%s \$%s = null;\n\n",
                $comment,
                $visibility,
                $type,
                $variableName,
            );
        }
        return $transformedAttributes;
    }

    private function toVariableName(string $string): string
    {
        $string = \str_replace(['-', '_'], ' ', $string);
        $words = \explode(' ', $string);
        $string = \implode('', \array_map('ucfirst', $words));
        return \lcfirst($string);
    }

    private function toKebapCase(string $string): string
    {
        $string = \str_replace(['-', '_'], ' ', $string);
        $string = \ucwords($string);
        return \str_replace(' ', '', $string);
    }

    private function getAttributeComment(array $details)
    {
        $lines = [];
        $lines[] = $details['description'] ?? '';
        $lines[] = '@category HTML attribute';
        if (isset($details['deprecated']) && $details['deprecated']) {
            $lines[] = '@deprecated' . \PHP_EOL . '    ';
        }
        if (isset($details['defaultValue'])) {
            $lines[] = '@example ' . $details['defaultValue'] . \PHP_EOL . '    ';
        }
        if (isset($details['required']) && $details['required']) {
            $lines[] = '@required' . \PHP_EOL . '    ';
        }
        $comment = '/** ';

        if (\count($lines) > 2) {
            $comment .= \PHP_EOL . '     * ' . \implode(\PHP_EOL . '     * ', $lines);
        } else {
            $comment .= $lines[0];
        }

        return $comment . ' */' . \PHP_EOL;
    }

    private function getUseStatements($children, $parents, $ignoreClass): string
    {
        $all = \array_merge($this->uses, \array_values($children), \array_values($parents));
        // Normalize the class names
        $all = \array_map(function ($use) {
            return \str_replace('\\\\', '\\', $use);
        }, $all);
        $foundSelf = \array_search($ignoreClass, $all);
        if ($foundSelf !== false) {
            unset($all[$foundSelf]);
        }
        $all = \array_filter($all);
        $uses = \array_unique($all, \SORT_STRING);
        \asort($uses);
        $use_statements = '';
        foreach ($uses as $use) {
            $use_statements .= \sprintf("use %s;\n", $use);
        }
        return $use_statements;
    }

    private function mapToPhpType($string): string
    {
        return match ($string) {
            'string' => 'string',
            'integer' => 'int',
            'boolean' => 'bool',
            'uri' => 'string',
            'language_iso' => 'string',
            'color' => 'string',
            'datetime' => 'string',
            'datetime-local' => 'string',
            'date' => 'string',
            'time' => 'string',
            'month' => 'string',
            'week' => 'string',
            'number' => 'int',
            'float' => 'float',
            'script' => 'string',
            'url' => 'string',
            'email' => 'string',
            'tel' => 'string',
            'password' => 'string',
            'hidden' => 'bool|string',
            'image' => 'string', // added type for image
            'file' => 'string',  // added type for file
            default => $string,
        };
    }

    private function getClassName(string $classname): string
    {
        $reserved = Helper::getReservedWords();
        if (\in_array(\strtolower($classname), $reserved)) {
            return $classname . 'Element';
        }
        return $classname;
    }
}
