<?php

namespace Html\Interface;

use Dom\Node;

interface DOMNodeDelegatorInterface
{
    public function __construct(Node $domNode);

    public function __call($name, $arguments);

    public function __get($name);

    public function __set($name, $value): void;

    public function getDomNode(): Node;
}
