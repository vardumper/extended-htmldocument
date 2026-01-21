<?php

declare(strict_types=1);

namespace Html\Command;

use Html\Helper\CommentHelper;
use Html\Helper\NamingHelper;
use Html\Helper\TypeMapper;
use Html\Helper\YamlHelper;
use Silly\Input\InputArgument;
use Silly\Input\InputOption;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * @usage make:classes [element]
 * @description Creates all or one HTML element class.
 * @tutorial an example element value can be div
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element
 */
final class CreateClassCommand extends Command
{
    private const HTML_DEFINITION_PATH = __DIR__ . '/../Resources/specifications/html5-with-aria-and-alpine.yaml';

    private const TEMPLATE_PATH = __DIR__ . '/../Resources/templates/';

    private const OUTPUT_PATH = __DIR__ . '/../';

    private YamlHelper $yaml;

    private array $uses = [];

    private array $data = [];

    private SymfonyStyle $io;

    public function __construct(?YamlHelper $yaml = null)
    {
        parent::__construct();
        $this->yaml = $yaml ?? new YamlHelper();
    }

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
        $global_attribute_traits = $this->getGlobalAttributes($elementData['allowed_global_attributes'] ?? []);

        if ($elementData['alpine_support'] ?? false) {
            $global_attribute_traits .= "    use GlobalAttribute\\AlpineJsTrait;\n";
        }

        return [
            'class_name' => $className,
            'element_name' => $element,
            'namespace' => $namespace,
            'use_statements' => $this->getUseStatements($children, $parents, $namespace . '\\' . $className),
            'level' => $level,
            'global_attribute_traits' => $global_attribute_traits,
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

    private function getGlobalAttributes(array $allowedGlobalAttributes): string
    {
        // Remove duplicates from the allowed global attributes
        $allowedGlobalAttributes = array_unique($allowedGlobalAttributes);

        $traitNames = [];
        foreach ($allowedGlobalAttributes as $attribute) {
            $traitName = \ucwords(\str_replace(['-', '*'], '', $attribute)) . 'Trait';
            if (! in_array("Html\Trait\GlobalAttribute", $this->uses, true)) {
                $this->uses[] = "Html\Trait\GlobalAttribute";
            }
            $traitNames[] = $traitName;
        }

        if (empty($traitNames)) {
            return '';
        }

        // Sort trait names alphabetically
        sort($traitNames, \SORT_STRING);

        // Generate individual trait use statements (traits cannot use grouped syntax)
        $traits = '';
        foreach ($traitNames as $traitName) {
            $traits .= sprintf("    use GlobalAttribute\\%s;\n", $traitName);
        }

        return $traits;
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

        // Skip generating methods that would override global-attribute traits.
        // This allows framework specifications to define metadata (e.g. enum choices)
        // without changing runtime behavior provided by global traits.
        $elementData = $this->data[$element] ?? [];
        $globalAttributes = $elementData['allowed_global_attributes'] ?? [];
        $globalAttributeVariableNames = array_map(fn ($attr) => $this->toVariableName($attr), $globalAttributes);

        foreach ($attributes as $attribute => $details) {
            $variableName = $this->toVariableName($attribute);
            if (in_array($variableName, $globalAttributeVariableNames, true)) {
                continue;
            }
            $methods .= $this->generateMethodForAttribute($attribute, $details, $element);
        }
        return $methods;
    }

    private function generateMethodForAttribute(string $attribute, array $details, string $element): string
    {
        $type = $this->mapToPhpType($details['type'] ?? '');
        if (($attribute === 'target' || $attribute === 'formtarget') && $type === 'enum') {
            $type = 'enum|string';
        }
        $variableName = $this->toVariableName($attribute);
        $methodName = ucfirst($variableName);

        if (str_contains($type, 'enum')) {
            return $this->generateEnumMethod($attribute, $details, $element, $type, $variableName, $methodName);
        }

        return $this->generateSimpleMethod($attribute, $type, $variableName, $methodName);
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

        // Check for element-specific enum first (e.g., ARoleEnum for anchor)
        // then fall back to generic enum (e.g., RoleEnum)
        $elementSpecificEnumName = ucfirst($element) . $kebapCase . 'Enum';
        $genericEnumName = $kebapCase . 'Enum';

        // Check if element-specific enum file exists
        $elementSpecificPath = __DIR__ . '/../Enum/' . $elementSpecificEnumName . '.php';
        $enumName = $genericEnumName;
        if (file_exists($elementSpecificPath)) {
            $enumName = $elementSpecificEnumName;
        }

        // Fall back to element-prefixed enum when many elements have the attribute but only one element in details
        if ($this->manyElementsHaveAttribute($attribute) && count(
            $details['elements']
        ) === 1 && $enumName === $genericEnumName) {
            $enumName = $kebapCase . ucfirst($element) . 'Enum';
        }

        $isUnionType = str_replace('enum', '', $type) !== '';

        if ($isUnionType) {
            return $this->generateUnionEnumMethod($type, $variableName, $methodName, $enumName, $attribute);
        }

        return $this->generatePureEnumMethod($type, $variableName, $methodName, $enumName, $attribute);
    }

    private function generateSimpleMethod(
        string $attribute,
        string $type,
        string $variableName,
        string $methodName
    ): string {
        return vsprintf($this->getSignatureSimple(), [
            $methodName,
            $type,
            $variableName,
            $variableName,
            $variableName,
            $attribute,
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
            $attribute,
            $methodName,
            $returnType,
            $variableName,
            $enumName,
            $variableName,
            $variableName,
            $variableName,
        ]);
    }

    private function getAttributes(array $attributes, string $element): string
    {
        $transformedAttributes = '';
        // Gather global attribute names for this element (as variable names)
        $elementData = $this->data[$element] ?? [];
        $globalAttributes = $elementData['allowed_global_attributes'] ?? [];
        $globalAttributeVariableNames = array_map(fn ($attr) => $this->toVariableName($attr), $globalAttributes);

        foreach ($attributes as $attribute => $details) {
            $variableName = $this->toVariableName($attribute);
            // Skip property if it's provided by a global attribute trait
            if (in_array($variableName, $globalAttributeVariableNames, true)) {
                continue;
            }
            $transformedAttributes .= $this->generateAttributeDeclaration($attribute, $details, $element);
        }
        return $transformedAttributes;
    }

    private function generateAttributeDeclaration(string $attribute, array $details, string $element): string
    {
        $type = $this->mapToPhpType($details['type'] ?? '');
        if (($attribute === 'target' || $attribute === 'formtarget') && $type === 'enum') {
            $type = 'enum|string';
        }
        $variableName = $this->toVariableName($attribute);
        $comment = $this->getAttributeComment($details);
        $visibility = 'protected';
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

        // Check for element-specific enum first (e.g., ARoleEnum for anchor)
        // then fall back to generic enum (e.g., RoleEnum)
        $elementSpecificEnumName = ucfirst($element) . $kebapCase . 'Enum';
        $genericEnumName = $kebapCase . 'Enum';

        // Check if element-specific enum file exists
        $elementSpecificPath = __DIR__ . '/../Enum/' . $elementSpecificEnumName . '.php';
        $enumName = $genericEnumName;
        if (file_exists($elementSpecificPath)) {
            $enumName = $elementSpecificEnumName;
        }

        // Fall back to element-prefixed enum when many elements have the attribute but only one element in details
        if ($this->manyElementsHaveAttribute($attribute) && count(
            $details['elements']
        ) === 1 && $enumName === $genericEnumName) {
            $enumName = $kebapCase . ucfirst($element) . 'Enum';
        }

        $this->uses[] = sprintf("Html\Enum\%s", $enumName);

        $isUnionType = str_replace('enum', '', $type) !== '';

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

        // Group by namespace
        $grouped = [];
        foreach ($uses as $use) {
            $parts = explode('\\', $use);
            $className = array_pop($parts);
            $namespace = implode('\\', $parts);

            if (! isset($grouped[$namespace])) {
                $grouped[$namespace] = [];
            }
            $grouped[$namespace][] = $className;
        }

        // Sort namespaces and classes within each namespace
        ksort($grouped);
        foreach ($grouped as $namespace => &$classes) {
            sort($classes, \SORT_STRING);
        }
        unset($classes);

        // Build use statements with grouping
        $useStatements = '';
        foreach ($grouped as $namespace => $classes) {
            if (count($classes) === 1) {
                // Single use statement
                $useStatements .= sprintf("use %s\\%s;\n", $namespace, $classes[0]);
                continue;
            }

            // Grouped use statement
            $useStatements .= sprintf("use %s\\{\n", $namespace);
            foreach ($classes as $i => $class) {
                $useStatements .= sprintf('    %s', $class);
                $useStatements .= ($i < count($classes) - 1) ? ",\n" : ",\n};\n";
            }
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
        return (new NamingHelper())->toVariableName($string);
    }

    private function toKebapCase(string $string): string
    {
        return (new NamingHelper())->toKebapCase($string);
    }

    private function getClassName(string $classname): string
    {
        return (new NamingHelper())->getClassName($classname);
    }

    private function getAttributeComment(array $details): string
    {
        return (new CommentHelper())->getAttributeComment($details);
    }

    private function mapToPhpType(string $string): string
    {
        return (new TypeMapper())->mapToPhpType($string);
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
        if (\is_string(\$%s)) {
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
        if (\is_string(\$%s)) {
            if (trim(\$value) === '' || \\preg_match('/\\s/', \$value) === 1) {
                return \$this;
            }
            \$resolved = %s::tryFrom(\$%s);
            if (!\is_null(\$resolved)) {
                \$%s = \$resolved;
            } elseif (\str_starts_with(\$value, '_')) {
                return \$this;
            }
        }
        if (\$%s instanceof %s) {
            \$value = \$%s->value;
        }
        \$this->%s = \$%s;
        \$this->delegated->setAttribute('%s', (string) \$value);

        return \$this;
    }

    public function get%s(): null|%s
    {
        if (\is_string(\$this->%s)) {
            return %s::tryFrom(\$this->%s) ?? \$this->%s;
        }
        return \$this->%s;
    }\n\n";
    }
}
