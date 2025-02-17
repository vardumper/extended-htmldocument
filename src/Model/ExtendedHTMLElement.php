<?php
namespace Html\Model;

use BackedEnum;
use DOM\HtmlElement;

class ExtendedHTMLElement
{
    private static ?string $qualifiedName = null; // Default value, change as needed
    public HtmlElement $htmlElement;

    public function __construct(HTMLElement $htmlElement) {
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
        throw new \BadMethodCallException("Method $name does not exist on " . $reflection->getName() . ". However you cna implement it on " . __CLASS__);
    }

    public function __get($name) 
    {
        $reflection = new \ReflectionClass($this->htmlElement);
        if ($reflection->hasProperty($name)) {
            $property = $reflection->getProperty($name);
            $property->setAccessible(true);
            return $property->getValue($this->htmlElement);
        }
        throw new \InvalidArgumentException("Property $name does not exist on " . $reflection->getName() . ". However you cna implement it on " . __CLASS__);
    }
    
    public function __set($name, $value) : void
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

    // // Method to get the underlying DOM\HtmlElement
    // public function getHtmlElement(): HTMLElement
    // {
    //     return $this->htmlElement;
    // }

    /** this is what I wrote all this for, in order to being able to add functionality, like cutsom methods */
    public function __toString(): string {
        return (string) $this->htmlElement->ownerDocument->saveHtml($this->htmlElement);
    }

    public function setAttributes(array $attributes): self
    {
        // sort attributes by key name - id and class will still be first
        ksort($attributes);
        foreach ($attributes as $name => $value) {
            // allows us to use Enum attributes
            if ($value instanceof BackedEnum) {
                $value = $value->value;
            }
            $this->htmlElement->setAttribute($name, $value);
        }
        return $this;
    }

    // Generic static factory method
    public static function create(ExtendedHTMLDocument $dom): self
    {
        $className = static::class;
        $qualifiedName = $className::$qualifiedName;
        $coreElement = $dom->htmlDocument->createElement($qualifiedName);
        return new $className($coreElement);
    }
}
