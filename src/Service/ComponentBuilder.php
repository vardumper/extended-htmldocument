<?php

declare(strict_types=1);

namespace Html\Service;

use Dom\HTMLDocument;
use Html\Interface\ComponentBuilderInterface;
use Html\Interface\HTMLDocumentDelegatorInterface;
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
        $this->buildDOM($document->htmlDocument, $data[$componentHandle]['structure']);

        $comment = $document->createComment(sprintf('Component %s end', $componentHandle));
        $document->appendChild($comment);
        return $document;
    }

    private function buildDOM(HTMLDocument $doc, array $nodeData, $parent = null)
    {
        foreach ($nodeData as $tag => $attributes) {
            // Create element
            $element = $doc->createElement($tag);

            // Process attributes
            foreach ($attributes as $key => $value) {
                if ($key === 'text') {
                    $element->textContent = $value;
                } elseif ($key === 'children' && is_array($value)) {
                    foreach ($value as $child) {
                        $childElement = array_key_first($child);
                        // $nodeData = $child[$childElement];
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
