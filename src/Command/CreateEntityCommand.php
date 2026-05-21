<?php

declare(strict_types=1);

namespace Html\Command;

use Html\Delegator\HTMLDocumentDelegator;
use Html\Element\BlockElement;
use Html\Element\InlineElement;
use Html\Element\VoidElement;
use Html\Trait\ClassResolverTrait;
use ReflectionClass;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CreateEntityCommand extends Command
{
    use ClassResolverTrait;

    private const TEMPLATE_PATH = __DIR__ . '/../Resources/templates/DomOrmEntity.tpl.php';

    private const ENTITY_OUTPUT_PATH = __DIR__ . '/../Entity/';

    private const SKIP_PROPERTY_NAMES = [
        'delegated',
        'formatOutput',
        'ownerDocument',
        'dataAttributes',
        'alpineAttributes',
    ];

    private const SKIP_DECLARING_CLASSES = [
        'Html\Delegator\HTMLElementDelegator',
        'Html\Element\BlockElement',
        'Html\Element\InlineElement',
        'Html\Element\VoidElement',
    ];

    public function __invoke(?string $element, InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $dom = HTMLDocumentDelegator::createEmpty();

        $baseClasses = [BlockElement::class, InlineElement::class, VoidElement::class];
        $elements = [];
        foreach ($baseClasses as $baseClass) {
            $elements = array_merge($elements, $this->getClassesExtendingClass($baseClass));
        }

        $found = false;
        foreach ($elements as $className) {
            if ($element !== null) {
                $qualifiedName = $className::QUALIFIED_NAME;
                $shortName = (new ReflectionClass($className))->getShortName();
                if ($qualifiedName !== $element && strtolower($shortName) !== strtolower($element)) {
                    continue;
                }
            }
            $found = true;
            $this->generateEntityClass($className, $io);
        }

        if ($element !== null && ! $found) {
            $io->error("No element found matching '{$element}'.");
            return Command::FAILURE;
        }

        return Command::SUCCESS;
    }

    private function generateEntityClass(string $className, SymfonyStyle $io): void
    {
        $reflection = new ReflectionClass($className);
        $elementName = $className::QUALIFIED_NAME;
        $shortName = $reflection->getShortName();
        $entityClassName = $shortName . 'Entity';
        $level = $this->determineLevel($className);
        $levelCap = ucfirst($level);
        $namespace = 'Html\\Entity\\' . $levelCap;

        $properties = $this->getAttributePropertyNames($reflection);

        $childOfTags = $this->resolveTagNames($className::$childOf);
        $parentOfTags = $this->resolveTagNames($className::$parentOf);

        $params = [
            'generatedAt' => date('Y-m-d H:i:s'),
            'namespace' => $namespace,
            'element_name' => $elementName,
            'entity_class_name' => $entityClassName,
            'child_of_tags' => $childOfTags,
            'parent_of_tags' => $parentOfTags,
            'properties' => $properties,
        ];

        ob_start();
        extract($params, \EXTR_SKIP);
        include self::TEMPLATE_PATH;
        $content = ob_get_clean();

        $dir = self::ENTITY_OUTPUT_PATH . $levelCap . '/';
        if (! is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        $file = $dir . $entityClassName . '.php';
        file_put_contents($file, $content);
        $io->success("Generated: {$file}");
    }

    private function getAttributePropertyNames(ReflectionClass $reflection): array
    {
        $properties = array_filter(
            $reflection->getProperties(),
            fn ($p) => ! $p->isStatic()
                && ! in_array($p->getName(), self::SKIP_PROPERTY_NAMES, true)
                && ! in_array($p->getDeclaringClass()->getName(), self::SKIP_DECLARING_CLASSES, true)
        );

        $names = array_map(fn ($p) => $p->getName(), array_values($properties));

        // 'class' is a native PHP DOM property not declared in IdTrait/ClassTrait;
        // add it explicitly. 'id' is omitted — AbstractEntity already owns getId()/setId()
        // and the entity ID maps to the HTML id attribute directly.
        return array_unique(array_merge(['class'], $names));
    }

    private function resolveTagNames(array $classes): array
    {
        $tags = [];
        foreach ($classes as $class) {
            if (is_string($class) && class_exists($class) && defined($class . '::QUALIFIED_NAME')) {
                $tags[] = $class::QUALIFIED_NAME;
            }
        }
        return array_unique($tags);
    }

    private function determineLevel(string $className): string
    {
        $parent = (new ReflectionClass($className))->getParentClass();
        $parts = explode('\\', $parent->getName());
        return strtolower(str_replace('Element', '', end($parts)));
    }
}
