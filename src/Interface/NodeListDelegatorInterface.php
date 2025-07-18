<?php

namespace Html\Interface;

use Dom\HTMLCollection;
use Dom\NodeList;

/**
 * @property NodeList|HTMLCollection $delegated
 */
interface NodeListDelegatorInterface
{
    public function __construct(NodeList|HTMLCollection $delegated);

    public function __get(string $name);

    public function __set(string $name, $value);

    public function __call(string $name, array $arguments);

    public function item(int $index): ?NodeDelegatorInterface;
}
