<?php

namespace Html\TemplateGenerator;

use Html\Interface\HTMLElementDelegatorInterface;
use Html\Interface\TemplateGeneratorInterface;
use Html\Mapping\TemplateGenerator;
use ReflectionClass;

#[TemplateGenerator('blade')]
class BladeGenerator implements TemplateGeneratorInterface
{
    private const BLADE_RESERVED_WORDS = [
        'if', 'else', 'elseif', 'endif', 'foreach', 'endforeach', 'for', 'endfor', 'while', 'endwhile', 'switch', 'endswitch', 'case', 'break', 'default', 'continue', 'extends', 'section', 'endsection', 'yield', 'show', 'include', 'each', 'parent', 'php', 'endphp', 'verbatim', 'endverbatim', 'csrf', 'method', 'error', 'enderror', 'push', 'endpush', 'stack', 'prepend', 'endprepend', 'auth', 'endauth', 'guest', 'endguest', 'hasSection', 'inject', 'json', 'once', 'endonce', 'isset', 'endisset', 'empty', 'endempty', 'env', 'production', 'env', 'endenv',
    ];

    public function getExtension(): string
    {
        return 'blade.php';
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

    public function renderElement(HTMLElementDelegatorInterface $element): string
    {
        $ref = new ReflectionClass($element);
        $elementName = $ref->hasConstant('QUALIFIED_NAME') ? $ref->getConstant('QUALIFIED_NAME') : strtolower(
            $ref->getShortName()
        );
        $props = [];
        // Collect all properties with getter and setter
        foreach ($ref->getProperties() as $prop) {
            $name = $prop->getName();
            $getter = 'get' . ucfirst($name);
            $setter = 'set' . ucfirst($name);
            if ($ref->hasMethod($getter) && $ref->hasMethod($setter)) {
                $props[] = $name;
            }
        }
        // Add global attributes
        $globalAttrs = ['id', 'class'];
        foreach ($globalAttrs as $gAttr) {
            $getter = 'get' . ucfirst($gAttr);
            if (method_exists($element, $getter)) {
                $props[] = $gAttr;
            }
        }
        sort($props, \SORT_NATURAL | \SORT_FLAG_CASE);
        $isSelfClosing = $ref->hasConstant('SELF_CLOSING') && $ref->getConstant('SELF_CLOSING');
        // Avoid reserved words for section names
        $sectionName = in_array(
            $elementName,
            self::BLADE_RESERVED_WORDS,
            true
        ) ? $elementName . '_section' : $elementName;
        $blade = "{{--\n  This file is auto-generated.\n\n  @component {$elementName}\n  @author vardumper <info@erikpoehler.com>\n  @package vardumper/extended-htmldocument\n  @see src/TemplateGenerator/BladeGenerator.php\n--}}\n";
        $blade .= "@section('{$sectionName}')\n";
        $blade .= "<{$elementName}";
        foreach ($props as $attr) {
            $htmlAttr = $this->camelToKebab($attr);
            // Boolean attributes: render as attribute if true, omit if false
            $blade .= "\n  @if(isset($" . $attr . ') && is_bool($' . $attr . ') && $' . $attr . ") {$htmlAttr} @elseif(isset($" . $attr . ') && $' . $attr . ") {$htmlAttr}=\"{{ " . '$' . $attr . ' }}" @endif';
        }
        if ($isSelfClosing) {
            $blade .= " />\n";
        } else {
            $blade .= ">\n  @yield('content')\n</{$elementName}>\n";
        }
        $blade .= "@endsection\n";
        return $blade;
    }

    private function camelToKebab(string $string): string
    {
        return strtolower(preg_replace('/([a-z])([A-Z])/', '$1-$2', $string));
    }
}
