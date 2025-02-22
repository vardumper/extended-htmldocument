<?php

namespace Html\Delegator;

use BackedEnum;
use DOM\Document;
use DOM\HtmlElement;
use Traversable;

class HTMLElementDelegator
{
    public HtmlElement $htmlElement;

    private static ?string $qualifiedName = null; // Default value, change as needed

    public function __construct(HTMLElement $htmlElement)
    {
        $this->htmlElement = $htmlElement;
    }

    public function __call($name, $arguments)
    {
        $reflection = new \ReflectionClass($this->htmlElement);
        if ($reflection->hasMethod($name)) {
            $method = $reflection->getMethod($name);
            $method->setAccessible(true);
            return $method->invokeArgs($this->htmlElement, $arguments);
        }
        throw new \BadMethodCallException(
            "Method {$name} does not exist on " . $reflection->getName() . '. However you cna implement it on ' . __CLASS__
        );
    }

    public function __get($name)
    {
        $reflection = new \ReflectionClass($this->htmlElement);
        if ($reflection->hasProperty($name)) {
            $property = $reflection->getProperty($name);
            $property->setAccessible(true);
            return $property->getValue($this->htmlElement);
        }
        throw new \InvalidArgumentException(
            "Property {$name} does not exist on " . $reflection->getName() . '. However you cna implement it on ' . __CLASS__
        );
    }

    public function __set($name, $value): void
    {
        // Transform Enum values to their underlying value
        if ($value instanceof BackedEnum) {
            $value = $value->value;
        }

        $reflection = new \ReflectionClass($this->htmlElement);
        if ($reflection->hasProperty($name)) {
            $property = $reflection->getProperty($name);
            $property->setAccessible(true);
            $property->setValue($this->htmlElement, $value); // Changed $this to $this->htmlElement
            return;
        }

        $this->htmlElement->setAttribute($name, $value);
    }

    /**
     * this is what I wrote all this for, in order to being able to add functionality, like cutsom methods
     */
    public function __toString(): string
    {
        /** @var Document $ownerDocument */
        $ownerDocument = $this->htmlElement->ownerDocument;
        return (string) $ownerDocument->saveHtml($this->htmlElement);
    }

    public function setAttributes(array $attributes): self
    {
        // sort attributes by key name - id and class will still be first
        \ksort($attributes);
        foreach ($attributes as $name => $value) {
            // allows us to use Enum attributes
            if ($value instanceof BackedEnum) {
                $value = $value->value;
            }
            $this->htmlElement->setAttribute($name, $value);
        }
        return $this;
    }

    public function hasAttributes(): bool
    {
        return ! empty($this->htmlElement->attributes);
    }

    public function attributes(): Traversable
    {
        return $this->htmlElement->attributes->getIterator();
    }

    // Generic static factory method
    public static function create(HTMLDocumentDelegator $dom): self
    {
        $className = static::class;
        $qualifiedName = $className::$qualifiedName;
        $coreElement = $dom->htmlDocument->createElement($qualifiedName);
        return new $className($coreElement);
    }

    /**
     * If the parent element of RubyParenthesis can have multiple RubyParenthesis children
     */
    public function isUniquePerParent(): bool
    {
        return false;
    }

    /**
     * If an HTML document can only have one RubyParenthesis element
     */
    public function isUnique(): bool
    {
        return false;
    }

    /**
     * Get the qualified name of the RubyParenthesis element
     */
    public static function getQualifiedName(): string
    {
        return static::$qualifiedName;
    }

    /**
     * Get the list if allowed parent elements of RubyParenthesis. Empty array means: no restriction
     */
    public static function isChildOf(): array
    {
        return static::$childOf;
    }
}
