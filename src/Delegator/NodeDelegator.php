<?php

namespace Html\Delegator;

use AllowDynamicProperties;
use DOM\Node;
use Html\Interface\NodeDelegatorInterface;
use Html\Trait\DelegatorTrait;

#[AllowDynamicProperties]
class NodeDelegator implements NodeDelegatorInterface
{
    use DelegatorTrait;

    public function __construct(
        private readonly Node $delegated
    ) {
    }

    public function getNode(): Node
    {
        return $this->delegated;
    }
}
