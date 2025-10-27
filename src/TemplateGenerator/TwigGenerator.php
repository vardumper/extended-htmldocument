<?php

namespace Html\TemplateGenerator;

use Html\Interface\HTMLElementDelegatorInterface;
use Html\Interface\TemplateGeneratorInterface;
use Html\Mapping\TemplateGenerator;
use ReflectionClass;
use ReflectionNamedType;
use ReflectionUnionType;

#[TemplateGenerator('twig')]
class TwigGenerator implements TemplateGeneratorInterface
{
    public const TEMPLATE = 'src/Resources/templates/twig.tpl.twig';

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

    public function setComponentHandle(string $handle): void
    {
        $this->componentHandle = $handle;
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
                            $choices = array_map(fn($case) => "'{$case->value}'", $unionType->getName()::cases());
                            $enums[] = [
                                'name' => $name,
                                'choices' => $choices,
                            ];
                        }
                    }
                } elseif ($type && $type instanceof ReflectionNamedType && enum_exists($type->getName())) {
                    $choices = array_map(fn($case) => "'{$case->value}'", $type->getName()::cases());
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
        usort($enums, fn($a, $b) => strcmp($a['name'], $b['name']));
        $isSelfClosing = $ref->hasConstant('SELF_CLOSING') && $ref->getConstant('SELF_CLOSING');
        // Build Twig template string
        $twig = "{# {$elementName}.twig #}\n";
        foreach ($enums as $enum) {
            $twig .= "{% set {$enum['name']}_choices = [" . implode(', ', $enum['choices']) . "] %}\n";
        }
        $twig .= "<{$elementName}\n";
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
                $cond .= $isReserved ? " and attribute(_context, '{$attr}') in {$attr}_choices" : " and {$attr} in {$attr}_choices";
            }
            $twig .= "  {% if {$cond} %}{$attr}='{{ {$val} }}'{% endif %}\n";
        }
        if ($isSelfClosing) {
            $twig .= "/>\n";
        } else {
            $twig .= ">\n  {{- content|raw -}}\n</{$elementName}>\n";
        }
        return $twig;
    }
}
