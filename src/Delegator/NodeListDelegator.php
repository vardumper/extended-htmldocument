<?php

declare(strict_types=1);

namespace Html\Delegator;

use AllowDynamicProperties;
use BadMethodCallException;
use Countable;
use Dom\HTMLCollection;
use DOM\NodeList;
use InvalidArgumentException;
use Iterator;
use IteratorAggregate;
use ReflectionClass;
use Traversable;

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

class NodeListDelegator implements Countable, IteratorAggregate
{
    use \Html\Trait\ClassResolverTrait;

    public function __construct(
        private readonly NodeList|HTMLCollection $delegated
    ) {
    }

    /**
     * Public property for compatibility with DOM NodeList/HTMLCollection
     */
    public function __get($name)
    {
        if ($name === 'length') {
            return $this->count();
        }
        throw new InvalidArgumentException("Property {$name} does not exist on " . __CLASS__);
    }

    public function __call($name, $arguments)
    {
        if ($name === 'count') {
            // Always call the local count() method
            return $this->count();
        }
        $reflection = new ReflectionClass($this->delegated);
        if ($reflection->hasMethod($name)) {
            $method = $reflection->getMethod($name);
            return $method->invokeArgs($this->delegated, $arguments);
        }
        throw new BadMethodCallException(
            "Method {$name} does not exist on " . $reflection->getName() . '. However you can implement it on ' . __CLASS__
        );
    }

    public function item(int $index): mixed
    {
        $node = $this->delegated->item($index);
        if (! $node) {
            return null;
        }

        if ($node->parentNode === null) {
            return null;
        }
        if ($node instanceof \DOM\Element) {
            $delegator = $this->getDelegatorFromElement($node);
            if ($delegator) {
                return $delegator;
            }
        }
        return new NodeDelegator($node);
    }

    public function getIterator(): Traversable
    {
        for ($i = 0, $len = $this->delegated->length; $i < $len; $i++) {
            yield $this->item($i);
        }
    }

    public function getNodeList(): NodeList|HTMLCollection
    {
        return $this->delegated;
    }

    final public function count(): int
    {
        return $this->delegated->length;
    }

    /**
     * Applies callback to each item in the node list.
     * @param callable $callback function($element, $index, $list)
     */
    public function forEach(callable $callback): void
    {
        foreach ($this as $i => $item) {
            $callback($item, $i, $this);
        }
    }
}
