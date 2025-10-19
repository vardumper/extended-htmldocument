<?php

declare(strict_types=1);

namespace Html\Command;

use Html\Helper\Helper;
use Silly\Input\InputArgument;
use Silly\Input\InputOption;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Yaml\Yaml;

/**
 * @usage make:classes [element]
 * @description Creates all or one HTML element class.
 * @tutorial an example element value can be div
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element
 */
final class CreateClassCommand extends Command
{
    private const HTML_DEFINITION_PATH = __DIR__ . '/../Resources/specifications/html5.yaml';

    private const TEMPLATE_PATH = __DIR__ . '/../Resources/templates/';

    private const OUTPUT_PATH = __DIR__ . '/../';

    private array $uses = [];

    private array $data = [];

    private SymfonyStyle $io;

    public function __invoke($element, InputInterface $input, OutputInterface $output): int
    {
        $this->io = new SymfonyStyle($input, $output);

        $specificationPath = $input->getOption('specification');

        if (! $this->loadHtmlDefinitions($specificationPath)) {
            return Command::FAILURE;
        }

        $batchElements = $this->getBatchElements($element);
        if ($batchElements === null) {
            return Command::FAILURE;
        }

        $generatedAt = date('Y-m-d H:i:s');

        foreach ($batchElements as $elementName) {
            if (! $this->generateElementClass($elementName, $generatedAt)) {
                return Command::FAILURE;
            }
        }

        return Command::SUCCESS;
    }

    public function resolveParents(string $element, array $qualifiedNames): array
    {
        $logicalParents = $this->findElementsByChild($element);
        $allParents = array_merge(
            array_filter($qualifiedNames, fn ($value) => strlen($value) > 0),
            $logicalParents
        );

        return $this->buildElementClassMap($allParents);
    }

    public function resolveChildren(array $qualifiedNames): array
    {
        $filteredNames = array_filter($qualifiedNames, fn ($value) => strlen($value) > 0);
        return $this->buildElementClassMap($filteredNames);
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

    private function getBatchElements(?string $element): ?array
    {
        $availableElements = array_keys($this->data);

        if ($element === null) {
            return $availableElements;
        }

        if (! in_array($element, $availableElements, true)) {
            $this->io->error('Element not found in specifications.');
            return null;
        }

        return [$element];
    }

    private function generateElementClass(string $element, string $generatedAt): bool
    {
        $this->io->info('Creating a new class for ' . $element);
        $this->uses = []; // Reset use statements

        $elementData = $this->data[$element];
        $classData = $this->buildClassData($element, $elementData, $generatedAt);

        $templatePath = $this->getTemplatePath($classData['level']);
        $this->createClassFile($templatePath, $classData, $classData['path']);

        $this->io->success(sprintf('Class %s created successfully', $classData['path']));
        return true;
    }

    private function buildClassData(string $element, array $elementData, string $generatedAt): array
    {
        $className = $this->getClassName(str_replace(' ', '', ucfirst($elementData['name'])));
        $level = $elementData['level'];
        $namespace = 'Html\\Element\\' . ucfirst($level);
        $path = sprintf('Element/%s/%s.php', ucfirst($level), $className);

        $this->uses[] = sprintf("Html\Element\%sElement", ucfirst($level));

        $attributes = $elementData['attributes'] ?? [];
        $methods = $this->getMethods($attributes, $element);
        $processedAttributes = $this->getAttributes($attributes, $element);
        $parents = $this->resolveParents($element, explode(' | ', $elementData['parent'] ?? ''));
        $children = $this->resolveChildren($elementData['children'] ?? []);

        return [
            'class_name' => $className,
            'element_name' => $element,
            'namespace' => $namespace,
            'use_statements' => $this->getUseStatements($children, $parents, $namespace . '\\' . $className),
            'level' => $level,
            'description' => $elementData['description'] ?? '',
            'unique' => $elementData['unique'] ?? false,
            'parents' => $parents,
            'children' => $children,
            'unique_per_parent' => $this->getUniquePerParent($elementData),
            'defaultValue' => $elementData['default'] ?? '',
            'attributes' => $processedAttributes,
            'path' => $path,
            'self_closing' => $elementData['self_closing'] ?? false,
            'methods' => $methods,
            'generatedAt' => $generatedAt,
        ];
    }

    private function getUniquePerParent(array $elementData): bool
    {
        $unique = $elementData['unique'] ?? false;
        $uniquePerParent = $elementData['unique_per_parent'] ?? false;

        return $unique === true ? true : $uniquePerParent;
    }

    private function getTemplatePath(string $level): string
    {
        return self::TEMPLATE_PATH . ucfirst($level) . 'Element.tpl.php';
    }

    private function buildElementClassMap(array $elementNames): array
    {
        $elements = [];
        foreach ($elementNames as $elementName) {
            if (! isset($this->data[$elementName])) {
                continue;
            }

            $className = $this->getClassName(str_replace(' ', '', ucfirst($this->data[$elementName]['name'])));
            $level = $this->data[$elementName]['level'];
            $namespace = 'Html\\Element\\' . ucfirst($level);
            $elements[$className] = $namespace . '\\' . $className;
        }
        return $elements;
    }

    private function findElementsByChild(string $element): array
    {
        $elements = [];
        foreach ($this->data as $key => $value) {
            if (! isset($value['children'])) {
                continue;
            }
            if (in_array($element, $value['children'], true)) {
                $elements[] = $key;
            }
        }
        return $elements;
    }

    private function createClassFile(string $templatePath, array $parameters, string $path): void
    {
        ob_start();
        extract($parameters, \EXTR_SKIP);
        include $templatePath;

        $file = ob_get_clean();
        file_put_contents(self::OUTPUT_PATH . $path, $file);
    }

    private function manyElementsHaveAttribute(string $attributeName): bool
    {
        $elementsWithAttribute = [];
        foreach ($this->data as $element => $details) {
            if (isset($details['attributes'][$attributeName])) {
                $elementsWithAttribute[] = $element;
                // Early return if we found more than one element with this attribute
                if (count($elementsWithAttribute) > 1) {
                    return true;
                }
            }
        }
        return false;
    }

    private function getMethods(array $attributes, string $element): string
    {
        $methods = '';
        foreach ($attributes as $attribute => $details) {
            $methods .= $this->generateMethodForAttribute($attribute, $details, $element);
        }
        return $methods;
    }

    private function generateMethodForAttribute(string $attribute, array $details, string $element): string
    {
        $type = $this->mapToPhpType($details['type'] ?? '');
        $variableName = $this->toVariableName($attribute);
        $methodName = ucfirst($variableName);

        if (str_contains($type, 'enum')) {
            return $this->generateEnumMethod($attribute, $details, $element, $type, $variableName, $methodName);
        }

        return $this->generateSimpleMethod($type, $variableName, $methodName);
    }

    private function generateEnumMethod(
        string $attribute,
        array $details,
        string $element,
        string $type,
        string $variableName,
        string $methodName
    ): string {
        $kebapCase = $this->toKebapCase($attribute);

        // makes sure elements is optional, if not given lets just search the array
        if (! isset($details['elements']) || ! is_array($details['elements'])) {
            $elementsWithAttribute = [];
            foreach ($this->data as $tmpEl => $tmpData) {
                if (isset($tmpData['attributes']) && isset($tmpData['attributes']['data-theme'])) { // @todo dont like data-theme in here
                    $elementsWithAttribute[] = $tmpEl;
                }
            }
            $details['elements'] = $elementsWithAttribute;
        }

        if ($this->manyElementsHaveAttribute($attribute) && count($details['elements']) === 1) {
            $kebapCase .= ucfirst($element);
        }

        $enumName = $kebapCase . 'Enum';
        $isUnionType = str_replace('enum', '', $type) !== '';

        if ($isUnionType) {
            return $this->generateUnionEnumMethod($type, $variableName, $methodName, $enumName, $attribute);
        }

        return $this->generatePureEnumMethod($type, $variableName, $methodName, $enumName, $attribute);
    }

    private function generateSimpleMethod(string $type, string $variableName, string $methodName): string
    {
        return vsprintf($this->getSignatureSimple(), [
            $methodName,
            $type,
            $variableName,
            $variableName,
            $variableName,
            $variableName,
            $variableName,
            $methodName,
            $type,
            $variableName,
        ]);
    }

    private function generatePureEnumMethod(
        string $type,
        string $variableName,
        string $methodName,
        string $enumName,
        string $attribute
    ): string {
        $returnType = sprintf('?%s', $enumName);
        $enumType = sprintf('string|%s', $enumName);

        return vsprintf($this->getSignatureEnum(), [
            $methodName,
            $enumType,
            $variableName,
            $variableName,
            $variableName,
            $enumName,
            $variableName,
            $variableName,
            $variableName,
            $variableName,
            $attribute,
            $variableName,
            $methodName,
            $returnType,
            $variableName,
        ]);
    }

    private function generateUnionEnumMethod(
        string $type,
        string $variableName,
        string $methodName,
        string $enumName,
        string $attribute
    ): string {
        $otherTypes = explode('|', trim(str_replace('enum', '', $type), '|'));
        $otherTypes = array_map([$this, 'mapToPhpType'], $otherTypes);
        $otherTypes[] = 'string';
        $otherTypes = array_unique($otherTypes);
        $otherTypesDef = implode('|', $otherTypes) . '|';

        $fullType = sprintf('%s%s', $otherTypesDef, $enumName);
        $returnType = sprintf('%s%s', $otherTypesDef, $enumName);

        return vsprintf($this->getSignatureEnumUnionString(), [
            $methodName,
            $fullType,
            $variableName,
            $variableName,
            $variableName,
            $enumName,
            $variableName,
            $variableName,
            $variableName,
            $enumName,
            $variableName,
            $variableName,
            $variableName,
            $variableName,
            $methodName,
            $returnType,
            $variableName,
        ]);
    }

    private function getAttributes(array $attributes, string $element): string
    {
        $transformedAttributes = '';
        foreach ($attributes as $attribute => $details) {
            $transformedAttributes .= $this->generateAttributeDeclaration($attribute, $details, $element);
        }
        return $transformedAttributes;
    }

    private function generateAttributeDeclaration(string $attribute, array $details, string $element): string
    {
        $type = $this->mapToPhpType($details['type'] ?? '');
        $variableName = $this->toVariableName($attribute);
        $comment = $this->getAttributeComment($details);
        $visibility = 'public';
        $returnType = '?' . $type;

        if (str_contains($type, 'enum')) {
            [$returnType, $visibility] = $this->processEnumAttribute($attribute, $details, $element, $type);
        }

        return sprintf("    %s    %s %s \$%s = null;\n\n", $comment, $visibility, $returnType, $variableName);
    }

    private function processEnumAttribute(string $attribute, array $details, string $element, string $type): array
    {
        $kebapCase = $this->toKebapCase($attribute);

        // makes sure elements is optional, if not given lets just search the array
        if (! isset($details['elements']) || ! is_array($details['elements'])) {
            $elementsWithAttribute = [];
            foreach ($this->data as $tmpEl => $tmpData) {
                if (isset($tmpData['attributes']) && isset($tmpData['attributes']['data-theme'])) {
                    $elementsWithAttribute[] = $tmpEl;
                }
            }
            $details['elements'] = $elementsWithAttribute;
        }

        if ($this->manyElementsHaveAttribute($attribute) && count($details['elements']) === 1) {
            $kebapCase .= ucfirst($element);
        }

        $this->uses[] = sprintf("Html\Enum\%sEnum", $kebapCase);

        $isUnionType = str_replace('enum', '', $type) !== '';
        $enumName = $kebapCase . 'Enum';

        if ($isUnionType) {
            $otherTypes = $this->getOtherTypesFromEnum($type);
            $otherTypesDef = implode('|', $otherTypes) . '|';
            $fullType = sprintf('%s%s', $otherTypesDef, $enumName);
            $returnType = sprintf('null|%s', $fullType);
        } else {
            $returnType = sprintf('?%s', $enumName);
        }

        return [$returnType, 'protected'];
    }

    private function getOtherTypesFromEnum(string $type): array
    {
        $otherTypes = explode('|', trim(str_replace('enum', '', $type), '|'));
        $otherTypes = array_map([$this, 'mapToPhpType'], $otherTypes);
        $otherTypes[] = 'string';
        return array_unique($otherTypes);
    }

    private function getUseStatements(array $children, array $parents, string $ignoreClass): string
    {
        $all = array_merge($this->uses, array_values($children), array_values($parents));
        $all = $this->normalizeClassNames($all);
        $uses = $this->filterAndSortUses($all, $ignoreClass);

        $useStatements = '';
        foreach ($uses as $use) {
            $useStatements .= sprintf("use %s;\n", $use);
        }
        return $useStatements;
    }

    private function normalizeClassNames(array $classNames): array
    {
        return array_map(fn ($use) => str_replace('\\\\', '\\', $use), $classNames);
    }

    private function filterAndSortUses(array $uses, string $ignoreClass): array
    {
        $uses = array_filter($uses, fn ($use) => $use !== $ignoreClass);
        $uses = array_unique($uses, \SORT_STRING);
        asort($uses);
        return $uses;
    }

    // String manipulation utilities
    private function toVariableName(string $string): string
    {
        $string = str_replace(['-', '_'], ' ', $string);
        $words = explode(' ', $string);
        $string = implode('', array_map('ucfirst', $words));
        return lcfirst($string);
    }

    private function toKebapCase(string $string): string
    {
        $string = str_replace(['-', '_'], ' ', $string);
        $string = ucwords($string);
        return str_replace(' ', '', $string);
    }

    private function getClassName(string $classname): string
    {
        $reserved = Helper::getReservedWords();
        if (in_array(strtolower($classname), $reserved, true)) {
            return $classname . 'Element';
        }
        return $classname;
    }

    private function getAttributeComment(array $details): string
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
        if (count($lines) > 2) {
            $comment .= \PHP_EOL . '     * ' . implode(\PHP_EOL . '     * ', $lines);
        } else {
            $comment .= $lines[0];
        }

        return $comment . ' */' . \PHP_EOL;
    }

    private function mapToPhpType(string $string): string
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
            'image' => 'string',
            'file' => 'string',
            default => $string,
        };
    }

    // Method signature templates
    private function getSignatureSimple(): string
    {
        return "    public function set%s(%s \$%s): static
    {
        \$this->%s = \$%s;
        \$this->delegated->setAttribute('%s', (string) \$%s);
        return \$this;
    }

    public function get%s(): ?%s
    {
        return \$this->%s;
    }\n\n";
    }

    private function getSignatureEnum(): string
    {
        return "    public function set%s(%s \$%s): static
    {
        if (is_string(\$%s)) {
            \$%s = %s::tryFrom(\$%s) ?? throw new \InvalidArgumentException(\"Invalid value for \\$%s.\");
        }
        \$this->%s = \$%s;
        \$this->delegated->setAttribute('%s', (string) \$%s->value);

        return \$this;
    }

    public function get%s(): %s
    {
        return \$this->%s;
    }\n\n";
    }

    private function getSignatureEnumUnionString(): string
    {
        return "    public function set%s(%s \$%s): static
    {
        \$value = \$%s;
        if (is_string(\$%s)) {
            \$resolved = %s::tryFrom(\$%s);
            if (!is_null(\$resolved)) {
                \$%s = \$resolved;
            }
        }
        if (\$%s instanceof %s) {
            \$value = \$%s->value;
        }
        \$this->%s = \$%s;
        \$this->delegated->setAttribute('%s', (string) \$value);

        return \$this;
    }

    public function get%s(): %s
    {
        return \$this->%s;
    }\n\n";
    }
}
