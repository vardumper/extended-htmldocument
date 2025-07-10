<?php

declare(strict_types=1);

namespace Html\Service;

use Html\Interface\ComponentBuilderInterface;
use Html\Interface\HTMLDocumentDelegatorInterface;
use Html\Interface\HTMLElementDelegatorInterface;
use InvalidArgumentException;

class ComponentBuilder implements ComponentBuilderInterface
{
    public function buildComponent(
        HTMLDocumentDelegatorInterface $document,
        array $data
    ): HTMLDocumentDelegatorInterface {
        if (count($data) > 1) {
            throw new InvalidArgumentException('Only one component per file is allowed.');
        }

        $componentHandle = array_key_first($data);

        if (! isset($data[$componentHandle]['structure'])) {
            throw new InvalidArgumentException('Component structure is required');
        }

        $comment = $document->createComment(sprintf('Component %s start', $componentHandle));
        $document->appendChild($comment);

        foreach ($data[$componentHandle]['structure'] as $element => $attributes) {
            $this->addElement($document, $element, $attributes);
        }

        $comment = $document->createComment(sprintf('Component %s end', $componentHandle));
        $document->appendChild($comment);
        return $document;
    }

    /**
     * @todo use shiny new methods and/or reflection
     */
    private function addElement(
        HTMLDocumentDelegatorInterface $document,
        string $element,
        array $attributes,
        ?HTMLElementDelegatorInterface $parent = null
    ): void {
        // Create the element
        $node = $document->createElement($element);

        // Set attributes and text content
        foreach ($attributes as $attribute => $value) {
            if ($attribute === 'text') {
                $node->textContent = $value; // Set text content
            } elseif ($attribute === 'children') {
                // Recursively add child elements
                foreach ($value as $child) {
                    $childElement = array_key_first($child);
                    $childAttributes = $child[$childElement];
                    $this->addElement($document, $childElement, $childAttributes, $node);
                }
            } else {
                $node->setAttribute($attribute, $value); // Set other attributes
            }
        }

        // Append the node to the parent or document
        if ($parent !== null) {
            if (method_exists($parent, 'appendChild')) {
                $parent->appendChild($node);
            } else {
                $parent->htmlElement->appendChild($node);
                // throw new \RuntimeException(sprintf('Parent element does not support appendChild: %s', get_class($parent)));
            }
        } else {
            $document->appendChild($node);
        }
    }
}
