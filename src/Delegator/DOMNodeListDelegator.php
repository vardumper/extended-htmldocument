<?php
namespace Html\Delegator;

use Dom\HTMLCollection;
use DOM\NodeList;

final class DOMNodeListDelegator
{
    private NodeList|HTMLCollection $nodeList;

    public function __construct(NodeList|HTMLCollection $nodeList) {
        $this->nodeList = $nodeList;
    }

    public function item(int $index): ?DOMNodeDelegator
    {
        $node = $this->nodeList->item($index);
        return $node ? new DOMNodeDelegator($node) : null;
    }

    public function __call($name, $arguments)
    {
        $reflection = new \ReflectionClass($this->nodeList);
        if ($reflection->hasMethod($name)) {
            $method = $reflection->getMethod($name);
            $method->setAccessible(true);
            return $method->invokeArgs($this->nodeList, $arguments);
        }
        throw new \BadMethodCallException("Method $name does not exist on " . $reflection->getName() . ". However you can implement it on " . __CLASS__);
    }
}
