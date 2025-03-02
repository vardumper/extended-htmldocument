<?php

namespace Html\Delegator;

use BadMethodCallException;
use Dom\HTMLCollection;
use DOM\NodeList;
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
 * @method setNamedItem(DOMNodeDelegator $node)
 * @method removeNamedItem(string $name)
 * @method getNamedItemNS(string $namespaceURI, string $localName)
 * @method setNamedItemNS(DOMNodeDelegator $node)
 * @method removeNamedItemNS(string $namespaceURI, string $localName)
 * @method append(DOMNodeDelegator $node)
 * @method insert(DOMNodeDelegator $node, int $index)
 * @method replace(DOMNodeDelegator $node, int $index)
 * @method remove(int $index)
 * @method item(int $index)
 * @method get(int $index)
 * @method set(int $index, DOMNodeDelegator $node)
 * @method indexOf(DOMNodeDelegator $node)
 * @method push(DOMNodeDelegator $node)
 * @method pop()
 * @method shift()
 * @method unshift(DOMNodeDelegator $node)
 * @method splice(int $start, int $deleteCount, DOMNodeDelegator ...$nodes)
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
 * @method includes(DOMNodeDelegator $node)
 * @method fill(DOMNodeDelegator $node, int $start, int $end)
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
