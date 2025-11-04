<?php

namespace Html\TemplateGenerator;

use Html\Interface\HTMLElementDelegatorInterface;
use Html\Interface\TemplateGeneratorInterface;
use Html\Mapping\TemplateGenerator;
use ReflectionClass;
use ReflectionNamedType;
use ReflectionUnionType;
use Symfony\Component\Yaml\Yaml;

#[TemplateGenerator('twig')]
class TwigGenerator implements TemplateGeneratorInterface
{
    private const TWIG_RESERVED_WORDS = [
        'is',
        'in',
        'for',
        'if',
        'true',
        'false',
        'none',
        'and',
        'or',
        'not',
        'loop',
        'else',
        'as',
        'empty',
        'with',
        'block',
        'endblock',
        'set',
        'extends',
        'include',
        'import',
        'from',
        'macro',
        'filter',
        'autoescape',
        'endautoescape',
        'embed',
        'endembed',
        'use',
        'verbatim',
        'endverbatim',
        'do',
        'flush',
        'sandbox',
        'endsandbox',
    ];

    private string $componentHandle = 'component';

    public function getExtension(): string
    {
        return 'twig';
    }

    public function getNamePattern(): string
    {
        return '{component}.{extension}';
    }

    public function canRenderElements(): bool
    {
        return true;
    }

    public function canRenderDocuments(): bool
    {
        return false;
    }

    public function isTemplated(): bool
    {
        return false;
    }

    public function render($elementOrDocument): ?string
    {
        if ($elementOrDocument instanceof HTMLElementDelegatorInterface && $this->canRenderElements()) {
            return $this->renderElement($elementOrDocument);
        }

        return null;
    }

    /**
     * Twig generator does not currently support composed element templates
     */
    public function renderComposedElement(HTMLElementDelegatorInterface $element): ?string
    {
        // TODO: Implement composed template generation for Twig
        return null;
    }

    public function setComponentHandle(string $handle): void
    {
        $this->componentHandle = $handle;
    }

    private function camelToKebab(string $string): string
    {
        return strtolower(preg_replace('/([a-z])([A-Z])/', '$1-$2', $string));
    }

    public function renderElement(HTMLElementDelegatorInterface $element): string
    {
        $ref = new ReflectionClass($element);
        $elementName = $ref->hasConstant('QUALIFIED_NAME') ? $ref->getConstant('QUALIFIED_NAME') : strtolower(
            $ref->getShortName()
        );
        $props = [];
        $enums = [];
        // Collect all properties with getter and setter
        foreach ($ref->getProperties() as $prop) {
            $name = $prop->getName();
            $getter = 'get' . ucfirst($name);
            $setter = 'set' . ucfirst($name);
            if ($ref->hasMethod($getter) && $ref->hasMethod($setter)) {
                $type = $prop->getType();
                if ($type instanceof ReflectionUnionType) {
                    foreach ($type->getTypes() as $unionType) {
                        if ($unionType instanceof ReflectionNamedType && enum_exists($unionType->getName())) {
                            $choices = array_map(fn ($case) => "'{$case->value}'", $unionType->getName()::cases());
                            $enums[] = [
                                'name' => $name,
                                'choices' => $choices,
                            ];
                        }
                    }
                } elseif ($type && $type instanceof ReflectionNamedType && enum_exists($type->getName())) {
                    $choices = array_map(fn ($case) => "'{$case->value}'", $type->getName()::cases());
                    $enums[] = [
                        'name' => $name,
                        'choices' => $choices,
                    ];
                }
                $props[] = $name;
            }
        }
        // Add global attributes from HTMLElementDelegatorInterface
        $globalAttrs = ['id', 'class'];
        foreach ($globalAttrs as $gAttr) {
            $getter = 'get' . ucfirst($gAttr);
            if (method_exists($element, $getter)) {
                $props[] = $gAttr;
            }
        }
        // Sort attributes and enums alphabetically
        sort($props, \SORT_NATURAL | \SORT_FLAG_CASE);
        usort($enums, fn ($a, $b) => strcmp($a['name'], $b['name']));
        $isSelfClosing = $ref->hasConstant('SELF_CLOSING') && $ref->getConstant('SELF_CLOSING');
        // Read element metadata from YAML
        $yamlPath = __DIR__ . '/../Resources/specifications/html5.yaml';
        $yaml = is_readable($yamlPath) ? Yaml::parseFile($yamlPath) : [];
        $meta = $yaml[strtolower($elementName)] ?? [];
        $name = $meta['name'] ?? $elementName;
        $desc = $meta['description'] ?? '';

        // Avoid reserved words for block names
        $blockName = in_array($elementName, self::TWIG_RESERVED_WORDS, true) ? $elementName . '_block' : $elementName;

        // Build Twig template string
        $twig = "{#\n  This file is auto-generated.\n\n  {$name} - {$desc}\n\n  @author vardumper <info@erikpoehler.com>\n  @package vardumper/extended-htmldocument\n  @see src/TemplateGenerator/TwigGenerator.php\n#}\n";
        $note = ($blockName !== $elementName) ? "{# Note: Block name '{$elementName}' is a reserved word, using '{$blockName}' instead. #}" : '';
        $twig .= "{% block {$blockName} %}{$note}\n";

        // Generate associative arrays (hashmaps) for enum choices for better performance
        foreach ($enums as $enum) {
            $hashmap = [];
            foreach ($enum['choices'] as $choice) {
                // Convert 'value' to value: true
                $key = trim($choice, "'");
                $hashmap[] = "{$choice}: true";
            }
            $twig .= "{% set {$enum['name']}_choices = {" . implode(', ', $hashmap) . "} %}\n";
        }

        $twig .= "<{$elementName}";
        foreach ($props as $attr) {
            $isEnum = false;
            foreach ($enums as $enum) {
                if ($enum['name'] === $attr) {
                    $isEnum = true;
                    break;
                }
            }
            $isReserved = in_array($attr, self::TWIG_RESERVED_WORDS, true);
            $cond = $isReserved ? "attribute(_context, '{$attr}') is defined and attribute(_context, '{$attr}')|length > 0" : "{$attr} is defined and {$attr}|length > 0";
            $val = $isReserved ? "attribute(_context, '{$attr}')" : $attr;
            if ($isEnum) {
                // Use hashmap lookup instead of 'in' operator for better performance
                $cond .= $isReserved ? " and {$attr}_choices[attribute(_context, '{$attr}')] is defined" : " and {$attr}_choices[{$attr}] is defined";
            }
            // Convert property name to kebab-case for HTML attribute name
            $htmlAttr = $this->camelToKebab($attr);
            $twig .= "\n  {% if {$cond} %}{$htmlAttr}=\"{{ {$val} }}\"{% endif %}";
        }
        if ($isSelfClosing) {
            $twig .= "/>\n";
        } else {
            $twig .= ">\n  {% block content %}{{- content|raw -}}{% endblock %}\n</{$elementName}>\n";
        }
        $twig .= "{% endblock %}\n";
        return $twig;
    }
}
