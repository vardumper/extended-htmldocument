<?php
namespace Html\Model;

use DOM\Node;

class ExtendedDOMNode
{
    public function __construct(private readonly Node $domNode) {
    }

    public function __call($name, $arguments) 
    {
        // Convert any ExtendedHTMLElement arguments to their underlying DOM\HtmlElement
        foreach ($arguments as &$argument) {
            if (is_object($argument) && $argument instanceof ExtendedHTMLElement) {
                $argument = $argument->htmlElement;
            }
        }

        $reflection = new \ReflectionClass($this->domNode);
        if ($reflection->hasMethod($name)) {
            $method = $reflection->getMethod($name);
            $method->setAccessible(true);
            return $method->invokeArgs($this->domNode, $arguments);
        }
        throw new \BadMethodCallException("Method $name does not exist on " . $reflection->getName() . ". However you can implement it on " . __CLASS__);
    }

    public function __get($name) 
    {
        $reflection = new \ReflectionClass($this->domNode);
        if ($reflection->hasProperty($name)) {
            $property = $reflection->getProperty($name);
            $property->setAccessible(true);
            return $property->getValue($this->domNode);
        }
        throw new \InvalidArgumentException("Property $name does not exist on " . $reflection->getName() . ". However you can implement it on " . __CLASS__);
    }
    
    public function __set($name, $value) : void
    {
        $reflection = new \ReflectionClass($this->domNode);
        if ($reflection->hasProperty($name)) {
            $property = $reflection->getProperty($name);
            $property->setAccessible(true);
            $property->setValue($this->domNode, $value);
            return;
        }
        throw new \InvalidArgumentException("Property $name does not exist on " . $reflection->getName() . ". However you can implement it on " . __CLASS__);
    }

    public function getDomNode(): Node
    {
        return $this->domNode;
    }
}