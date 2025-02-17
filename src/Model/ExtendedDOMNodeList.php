<?php
namespace Html\Model;

use Dom\HTMLCollection;
use DOM\NodeList;

class ExtendedDOMNodeList
{
    private NodeList|HTMLCollection $nodeList;

    public function __construct(NodeList|HTMLCollection $nodeList) {
        $this->nodeList = $nodeList;
    }

    public function item(int $index): ?ExtendedDOMNode
    {
        $node = $this->nodeList->item($index);
        return $node ? new ExtendedDOMNode($node) : null;
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