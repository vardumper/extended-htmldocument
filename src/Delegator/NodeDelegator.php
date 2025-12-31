<?php

namespace Html\Delegator;

use AllowDynamicProperties;
use DOM\Node;
use Html\Interface\NodeDelegatorInterface;
use Html\Trait\DelegatorTrait;
use RuntimeException;

/**
 * @property-read string $nodeName
 * @property-read int $nodeType
 * @property-read string $nodeValue
 * @property-read string $textContent
 * @property-read ?Node $parentNode
 * @property Node $delegated
 */
#[AllowDynamicProperties]
class NodeDelegator implements NodeDelegatorInterface
{
    use DelegatorTrait;

    public static HTMLDocumentDelegator $ownerDocument;

    public function __construct(
        private readonly Node $delegated
    ) {
    }

    public function getNode(): Node
    {
        return $this->delegated;
    }

    public function getOwnerDocument(): HTMLDocumentDelegator
    {
        $owner = $this->delegated->ownerDocument;
        if (! $owner instanceof \DOM\HTMLDocument) {
            throw new RuntimeException('No owner document available for this node.');
        }
        return HTMLDocumentDelegator::getInstance($owner);
    }
}
