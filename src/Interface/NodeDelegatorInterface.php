<?php

namespace Html\Interface;

use Dom\Node;

/**
 * @property Node $delegated
 */
interface NodeDelegatorInterface
{
    public function __construct(Node $delegated);

    public function __call($name, $arguments);

    public function __get($name);

    public function __set($name, $value): void;

    public function getNode(): Node;

    /**
     * Get the document delegator owning this node
     */
    public function getOwnerDocument(): \Html\Delegator\HTMLDocumentDelegator;
}
