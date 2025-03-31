<?php

namespace Html\Interface;

use Dom\Node;

interface NodeDelegatorInterface
{
    public function __construct(Node $domNode);

    public function __call($name, $arguments);

    public function __get($name);

    public function __set($name, $value): void;

    public function getNode(): Node;
}
