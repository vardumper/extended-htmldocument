<?php

namespace Html\Delegator;

use BackedEnum;
use BadMethodCallException;
use DOM\Document;
use DOM\HtmlElement;
use Html\Helper\Helper;
use Html\Interface\HTMLElementDelegatorInterface;
use Html\Trait\GlobalAttributesTrait;
use Html\Trait\NativePropertiesTrait;
use InvalidArgumentException;
use ReflectionClass;
use ReflectionUnionType;
use TypeError;

/**
 * inheritDoc
 *
 * @property ?string $namespaceURI
 * @property ?string $prefix
 * @property string $localName
 * @property string $tagName
 * @property string $id
 * @property string $className
 */
class HTMLElementDelegator implements HTMLElementDelegatorInterface
{
    use GlobalAttributesTrait;
    use NativePropertiesTrait;

    public HtmlElement $htmlElement;

    // meta information

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
            "Method {$name} does not exist on " . $reflection->getName() . '. However you can implement it on ' . __CLASS__
        );
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->{$name};
        }

        $reflection = new ReflectionClass($this->htmlElement);
        if ($reflection->hasProperty($name)) {
            $property = $reflection->getProperty($name);
            $property->setAccessible(true);
            return $property->getValue($this->htmlElement);
        }

        throw new InvalidArgumentException(
            "Property {$name} does not exist on " . $reflection->getName() . '. However you can implement it on ' . __CLASS__
        );
    }

    public function __set($name, $value): void
    {
        if ($name === 'class') {
            $name = 'className';
        }

        if (Helper::isBackedEnum($value)) {
            $value = $value->value;
        }

        if (\property_exists($this, $name)) {
            // use reflection to check if this property is a BackedEnum and instantiate it with ::from()
            $reflection = new ReflectionClass($this);
            $property = $reflection->getProperty($name);
            $propertyType = $property->getType();
            $enumClass = $propertyType->getName();
            if (\is_subclass_of($enumClass, BackedEnum::class) && is_string($value)) {
                $value = $enumClass::from($value);
                $methodName = 'set' . $name;
                if (\method_exists($this, $methodName)) {
                    $this->{$methodName}($value);
                }
            } else {
                $this->{$name} = $value; // not a enum, not a string
            }
        }

        $reflection = new ReflectionClass($this->htmlElement);
        if ($reflection->hasProperty($name)) {
            $property = $reflection->getProperty($name);
            $property->setAccessible(true);
            $property->setValue($this->htmlElement, $value);
            return;
        }
        $this->htmlElement->setAttribute($name, Helper::isBackedEnum($value) ? $value->value : $value);
        return;
    }

    /**
     * this is what I wrote all this for, in order to being able to add functionality, like cutsom methods
     */
    public function __toString(): string
    {
        /** @var Document $ownerDocument */
        return (string) $this->htmlElement->ownerDocument->saveHtml($this->htmlElement);
    }

    // two ways to set an attribute via HTML\Element::$property or HTML\Element->setAttribute()
    public function setAttribute(string $qualifiedName, mixed $value): static
    {
        if (\property_exists($this, $qualifiedName)) {
            // use reflection to check if this property is a BackedEnum and instantiate it with ::from()
            $reflection = new ReflectionClass($this);
            $property = $reflection->getProperty($qualifiedName);
            $propertyType = $property->getType();
            // find correct enum type form union type list
            if ($propertyType instanceof ReflectionUnionType) {
                foreach ($propertyType->getTypes() as $type) {
                    if (\is_subclass_of($type->getName(), BackedEnum::class)) {
                        $enumClass = $type->getName();
                        continue;
                    }
                }
            } else {
                $enumClass = $propertyType->getName();
            }
            if (\is_subclass_of($enumClass, BackedEnum::class) && \is_string($value)) {
                $value = $enumClass::from($value);
                $methodName = 'set' . $qualifiedName;
                if (\method_exists($this, $methodName)) {
                    $this->{$methodName}($value);
                }
            } else {
                $this->{$qualifiedName} = $value; // here we allow Enums
            }
        }
        if (\is_subclass_of($value, BackedEnum::class)) {
            $value = $value->value;
        }
        if (\is_bool($value)) {
            $value = $value ? 'true' : 'false';
        }

        if (! \is_string($value) && ! \is_bool($value)) {
            throw new TypeError(
                "Value for {$qualifiedName} must be a string, boolean or a BackedEnum"
            ); // ensure value is a string
        }
        $this->htmlElement->setAttribute($qualifiedName, $value); // here we require string
        return $this;
    }

    public function getAttribute(string $qualifiedName): mixed
    {
        if (\property_exists($this, $qualifiedName)) {
            return $this->{$qualifiedName};
        }
        return $this->htmlElement->getAttribute($qualifiedName);
    }

    public function setAttributes(array $attributes): static
    {
        // sort attributes by key name - id and class will still be first
        \ksort($attributes);
        foreach ($attributes as $name => $value) {
            $this->setAttribute($name, $value);
        }
        return $this;
    }

    // Generic static factory method
    public static function create(HTMLDocumentDelegator $dom): static
    {
        $className = static::class;
        $qualifiedName = $className::getQualifiedName();
        $elementNode = $dom->htmlDocument->createElement($qualifiedName);
        return new $className($elementNode);
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
