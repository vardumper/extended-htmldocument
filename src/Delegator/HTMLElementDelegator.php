<?php

namespace Html\Delegator;

use BackedEnum;
use BadMethodCallException;
use DOM\Document;
use DOM\HtmlElement;
use Html\Interface\HTMLElementDelegatorInterface;
use InvalidArgumentException;
use ReflectionClass;

/**
 * @property ?string $namespaceURI
 * @property ?string $prefix
 * @property string $localName
 * @property string $tagName
 * @property string $id
 * @property string $className
 */
class HTMLElementDelegator implements HTMLElementDelegatorInterface
{
    // public const string SELF_CLOSING = self::SELF_CLOSING; // Self-referential 'abstract' declaration

    public HtmlElement $htmlElement;

    public static bool $unique = false; // Default value, change as needed

    public static bool $uniquePerParent = false; // Default value, change as needed

    public static array $childOf = []; // Default value, change as needed

    public static array $parentOf = []; // Default value, change as needed

    public function __construct(HTMLElement $htmlElement)
    {
        $this->htmlElement = $htmlElement;
    }

    public function __call($name, $arguments)
    {
        $reflection = new ReflectionClass($this->htmlElement);
        if ($reflection->hasMethod($name)) {
            $method = $reflection->getMethod($name);
            $method->setAccessible(true);
            return $method->invokeArgs($this->htmlElement, $arguments);
        }
        throw new BadMethodCallException(
            "Method {$name} does not exist on " . $reflection->getName() . '. However you cna implement it on ' . __CLASS__
        );
    }

    public function __get($name)
    {
        $reflection = new ReflectionClass($this->htmlElement);
        if ($reflection->hasProperty($name)) {
            $property = $reflection->getProperty($name);
            $property->setAccessible(true);
            return $property->getValue($this->htmlElement);
        }
        throw new InvalidArgumentException(
            "Property {$name} does not exist on " . $reflection->getName() . '. However you cna implement it on ' . __CLASS__
        );
    }

    public function __set($name, $value): void
    {
        // Transform Enum values to their underlying value
        if ($value instanceof BackedEnum) {
            $value = $value->value;
        }

        $reflection = new ReflectionClass($this->htmlElement);
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

    public function setAttributes(array $attributes): void
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
    }

    // Generic static factory method
    public static function create(HTMLDocumentDelegator $dom): self
    {
        $className = static::class;
        $qualifiedName = $className::getQualifiedName();
        $coreElement = $dom->htmlDocument->createElement($qualifiedName);
        return new $className($coreElement);
    }

    /**
     * If the parent element can have multiple children of this type
     */
    public static function isUniquePerParent(): bool
    {
        return static::$uniquePerParent;
    }

    /**
     * If an HTML document can only have one element of this type
     */
    public static function isUnique(): bool
    {
        return static::$unique;
    }

    /**
     * If the element is self closing (does not require a closing tag)
     */
    public static function isSelfClosing(): bool
    {
        return static::SELF_CLOSING;
    }

    /**
     * Get the qualified name of the element
     */
    public static function getQualifiedName(): string
    {
        return static::QUALIFIED_NAME;
    }

    /**
     * Get the list if allowed parent elements of this element type. Empty array means: no restriction
     */
    public static function childOf(): array
    {
        return static::$childOf;
    }

    /**
     * Get the list if allowed parent elements of this element type. Empty array means: no restriction
     */
    public static function parentOf(): array
    {
        return static::$parentOf;
    }
}
