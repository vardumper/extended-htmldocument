<?php

declare(strict_types=1);

namespace Html\Service;

use Html\Interface\ComponentBuilderInterface;
use Html\Interface\HTMLDocumentDelegatorInterface;
use Html\Trait\ClassResolverTrait;
use InvalidArgumentException;

/**
 * ComponentBuilder is responsible for transforming a given YAML/array description of a component into a DOM.
 */
class ComponentBuilder implements ComponentBuilderInterface
{
    use ClassResolverTrait;

    public function buildComponent(HTMLDocumentDelegatorInterface $document, array $data): void
    {
        if (count($data) > 1) {
            throw new InvalidArgumentException('Only one component per file is allowed.');
        }

        $componentHandle = array_key_first($data);

        if (! isset($data[$componentHandle]['structure'])) {
            throw new InvalidArgumentException('Component structure is required');
        }

        $this->buildDOM($document, $data[$componentHandle]['structure']);
        // return $document;
    }

    private function buildDOM(HTMLDocumentDelegatorInterface $doc, array $nodeData, $parent = null)
    {
        foreach ($nodeData as $tag => $attributes) {
            $className = $this->getElementByQualifiedName($tag);
            if ($className === null) {
                throw new InvalidArgumentException("Element class for tag '{$tag}' not found.");
            }
            $element = $className::create($doc); // @todo add constructor to elements

            // Process attributes
            foreach ($attributes as $key => $value) {
                if ($key === 'text') {
                    $element->textContent = $value;
                } elseif ($key === 'children' && is_array($value)) {
                    foreach ($value as $child) {
                        $childElement = array_key_first($child);
                        // recursion
                        $this->buildDOM($doc, $child, $element);
                    }
                } else {
                    $element->setAttribute($key, $value);
                }
            }

            // Append to parent or document
            if ($parent === null) {
                $doc->appendChild($element);
            } else {
                $parent->appendChild($element);
            }
        }
    }
}
