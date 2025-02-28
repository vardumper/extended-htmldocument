<?php

namespace Html\Delegator;

use BadMethodCallException;
use Dom\HTMLCollection;
use DOM\NodeList;
use ReflectionClass;

/**
 * inheritDoc
 * @method DOMNodeDelegator Iterator getIterator()
 * @method DOMNodeDelegator item(int $index)
 * @method DOMNodeDelegator int count()
 * @method DOMNodeDelegator current()
 * @method DOMNodeDelegator void next()
 * @method DOMNodeDelegator void rewind()
 * @method DOMNodeDelegator bool valid()
 * @method DOMNodeDelegator int key()
 * @method DOMNodeDelegator int length()
 * @method DOMNodeDelegator namedItem(string $name)
 * @method DOMNodeDelegator getNamedItem(string $name)
 * @method DOMNodeDelegator setNamedItem(DOMNodeDelegator $node)
 * @method DOMNodeDelegator removeNamedItem(string $name)
 * @method DOMNodeDelegator getNamedItemNS(string $namespaceURI, string $localName)
 * @method DOMNodeDelegator setNamedItemNS(DOMNodeDelegator $node)
 * @method DOMNodeDelegator removeNamedItemNS(string $namespaceURI, string $localName)
 * @method DOMNodeDelegator append(DOMNodeDelegator $node)
 * @method DOMNodeDelegator insert(DOMNodeDelegator $node, int $index)
 * @method DOMNodeDelegator replace(DOMNodeDelegator $node, int $index)
 * @method DOMNodeDelegator remove(int $index)
 * @method DOMNodeDelegator item(int $index)
 * @method DOMNodeDelegator get(int $index)
 * @method DOMNodeDelegator set(int $index, DOMNodeDelegator $node)
 * @method DOMNodeDelegator indexOf(DOMNodeDelegator $node)
 * @method DOMNodeDelegator push(DOMNodeDelegator $node)
 * @method DOMNodeDelegator pop()
 * @method DOMNodeDelegator shift()
 * @method DOMNodeDelegator unshift(DOMNodeDelegator $node)
 * @method DOMNodeDelegator splice(int $start, int $deleteCount, DOMNodeDelegator ...$nodes)
 * @method DOMNodeDelegator slice(int $start, int $end)
 * @method DOMNodeDelegator filter(callable $callback)
 * @method DOMNodeDelegator map(callable $callback)
 * @method DOMNodeDelegator reduce(callable $callback, mixed $initial)
 * @method DOMNodeDelegator reduceRight(callable $callback, mixed $initial)
 * @method DOMNodeDelegator reverse()
 * @method DOMNodeDelegator sort(callable $callback)
 * @method DOMNodeDelegator forEach(callable $callback)
 * @method DOMNodeDelegator find(callable $callback)
 * @method DOMNodeDelegator findIndex(callable $callback)
 * @method DOMNodeDelegator every(callable $callback)
 * @method DOMNodeDelegator some(callable $callback)
 * @method DOMNodeDelegator includes(DOMNodeDelegator $node)
 * @method DOMNodeDelegator fill(DOMNodeDelegator $node, int $start, int $end)
 * @method DOMNodeDelegator copyWithin(int $target, int $start, int $end)
 * @method DOMNodeDelegator flat(int $depth)
 * @method DOMNodeDelegator flatMap(callable $callback)
 * @method DOMNodeDelegator keys()
 * @method DOMNodeDelegator values()
 * @method DOMNodeDelegator entries()
 * @method DOMNodeDelegator reduceRight(callable $callback, mixed $initial)
 * @method DOMNodeDelegator reduce(callable $callback, mixed $initial)
 * @method DOMNodeDelegator map(callable $callback)
 * @method DOMNodeDelegator filter(callable $callback)
 * @method DOMNodeDelegator slice(int $start, int $end)
 */
class DOMNodeListDelegator
{
    private NodeList|HTMLCollection $nodeList;

    public function __construct(NodeList|HTMLCollection $nodeList)
    {
        $this->nodeList = $nodeList;
    }

    public function __call($name, $arguments)
    {
        $reflection = new ReflectionClass($this->nodeList);
        if ($reflection->hasMethod($name)) {
            $method = $reflection->getMethod($name);
            $method->setAccessible(true);
            return $method->invokeArgs($this->nodeList, $arguments);
        }
        throw new BadMethodCallException(
            "Method {$name} does not exist on " . $reflection->getName() . '. However you can implement it on ' . __CLASS__
        );
    }

    public function item(int $index): ?DOMNodeDelegator
    {
        $node = $this->nodeList->item($index);
        return $node ? new DOMNodeDelegator($node) : null;
    }
}
