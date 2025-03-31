<?php

namespace Html\Delegator;

use BadMethodCallException;
use DOM\Node;
use Html\Interface\NodeDelegatorInterface;
use InvalidArgumentException;
use ReflectionClass;

class NodeDelegator implements NodeDelegatorInterface
{
    public function __construct(
        private readonly Node $node
    ) {
    }

    public function __call($name, $arguments)
    {
        // Convert any HTMLElementDelegator arguments to their underlying DOM\HtmlElement
        foreach ($arguments as &$argument) {
            // i dont think DOM\Node has any methods that accept HTMLElement as argument
            if ($argument instanceof HTMLElementDelegator) {
                // $argument = $argument->htmlElement;
                throw new InvalidArgumentException('HTMLElementDelegator is not a valid argument for ' . $name);
            }

            // there are many methods in DOM\Node that expect DOM\Node arguments
            if (is_object($argument) && $argument instanceof self) {
                $argument = $argument->domNode;
            }
        }

        $reflection = new ReflectionClass($this->domNode);
        if ($reflection->hasMethod($name)) {
            $method = $reflection->getMethod($name);
            $method->setAccessible(true);
            return $method->invokeArgs($this->domNode, $arguments);
        }
        throw new BadMethodCallException(
            "Method {$name} does not exist on " . $reflection->getName() . '. However you can implement it on ' . __CLASS__
        );
    }

    public function __get($name)
    {
        if (\property_exists($this, $name)) {
            return $this->{$name};
        }

        $reflection = new ReflectionClass($this->domNode);
        if ($reflection->hasProperty($name)) {
            $property = $reflection->getProperty($name);
            $property->setAccessible(true);
            return $property->getValue($this->domNode);
        }
        throw new InvalidArgumentException(
            "Property {$name} does not exist on " . $reflection->getName() . '. However you can implement it on ' . __CLASS__
        );
    }

    public function __set($name, $value): void
    {
        $reflection = new ReflectionClass($this->domNode);
        if ($reflection->hasProperty($name)) {
            $property = $reflection->getProperty($name);
            $property->setAccessible(true);
            $property->setValue($this->domNode, $value);
            return;
        }
        throw new InvalidArgumentException(
            "Property {$name} does not exist on " . $reflection->getName() . '. However you can implement it on ' . __CLASS__
        );
    }

    public function getNode(): Node
    {
        return $this->node;
    }
}
