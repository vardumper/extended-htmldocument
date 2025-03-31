<?php

namespace Html\Delegator;

use AllowDynamicProperties;
use BadMethodCallException;
use Dom\HTMLCollection;
use DOM\NodeList;
use Html\Trait\DelegatorTrait;
use Iterator;
use ReflectionClass;

/**
 * inheritDoc
 * @method Iterator getIterator()
 * @method item(int $index)
 * @method int count()
 * @method current()
 * @method void next()
 * @method void rewind()
 * @method bool valid()
 * @method int key()
 * @method int length()
 * @method namedItem(string $name)
 * @method getNamedItem(string $name)
 * @method setNamedItem(NodeDelegator $node)
 * @method removeNamedItem(string $name)
 * @method getNamedItemNS(string $namespaceURI, string $localName)
 * @method setNamedItemNS(NodeDelegator $node)
 * @method removeNamedItemNS(string $namespaceURI, string $localName)
 * @method append(NodeDelegator $node)
 * @method insert(NodeDelegator $node, int $index)
 * @method replace(NodeDelegator $node, int $index)
 * @method remove(int $index)
 * @method item(int $index)
 * @method get(int $index)
 * @method set(int $index, NodeDelegator $node)
 * @method indexOf(NodeDelegator $node)
 * @method push(NodeDelegator $node)
 * @method pop()
 * @method shift()
 * @method unshift(NodeDelegator $node)
 * @method splice(int $start, int $deleteCount, NodeDelegator ...$nodes)
 * @method slice(int $start, int $end)
 * @method filter(callable $callback)
 * @method map(callable $callback)
 * @method reduce(callable $callback, mixed $initial)
 * @method reduceRight(callable $callback, mixed $initial)
 * @method reverse()
 * @method sort(callable $callback)
 * @method forEach(callable $callback)
 * @method find(callable $callback)
 * @method findIndex(callable $callback)
 * @method every(callable $callback)
 * @method some(callable $callback)
 * @method includes(NodeDelegator $node)
 * @method fill(NodeDelegator $node, int $start, int $end)
 * @method copyWithin(int $target, int $start, int $end)
 * @method flat(int $depth)
 * @method flatMap(callable $callback)
 * @method keys()
 * @method values()
 * @method entries()
 * @method reduceRight(callable $callback, mixed $initial)
 * @method reduce(callable $callback, mixed $initial)
 * @method map(callable $callback)
 * @method filter(callable $callback)
 * @method slice(int $start, int $end)
 */

#[AllowDynamicProperties]
class NodeListDelegator
{
    use DelegatorTrait;

    public function __construct(
        private readonly NodeList|HTMLCollection $delegated
    ) {
    }

    public function __call($name, $arguments)
    {
        $reflection = new ReflectionClass($this->delegated);
        if ($reflection->hasMethod($name)) {
            $method = $reflection->getMethod($name);
            $method->setAccessible(true);
            return $method->invokeArgs($this->delegated, $arguments);
        }
        throw new BadMethodCallException(
            "Method {$name} does not exist on " . $reflection->getName() . '. However you can implement it on ' . __CLASS__
        );
    }

    public function item(int $index): ?NodeDelegator
    {
        $node = $this->delegated->item($index);
        return $node ? new NodeDelegator($node) : null;
    }

    public function getNodeList(): NodeList|HTMLCollection
    {
        return $this->delegated;
    }
}
