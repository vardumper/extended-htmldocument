<?php

namespace Html\Delegator;

use AllowDynamicProperties;
use BackedEnum;
use Dom\Element;
use DOM\HTMLElement;
use Dom\Text;
use Exception;
use Html\Helper\Helper;
use Html\Interface\HTMLElementDelegatorInterface;
use Html\Interface\TemplateGeneratorInterface;
use Html\TemplateGenerator\HTMLGenerator;
use Html\Trait\DelegatorTrait;
// use Html\Trait\GlobalAttributesTrait;
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
 * @property HTMLElement|Element $delegated
 */
#[AllowDynamicProperties]
class HTMLElementDelegator implements HTMLElementDelegatorInterface
{
    // use GlobalAttributesTrait;
    use NativePropertiesTrait;
    use DelegatorTrait;

    public bool $formatOutput = true;

    public static HTMLDocumentDelegator $ownerDocument;

    // meta information

    public static bool $unique = false; // Default value, change as needed

    public static bool $uniquePerParent = false; // Default value, change as needed

    public static array $childOf = []; // Default value, change as needed

    public static array $parentOf = []; // Default value, change as needed

    public function __construct(
        public readonly HTMLElement|Element $delegated,
        public ?TemplateGeneratorInterface $renderer = null
    ) {
        if ($renderer !== null && ! $renderer->canRenderElements()) {
            throw new InvalidArgumentException('The given renderer cannot render elements.');
        }
        if ($renderer === null) {
            $this->renderer = new HTMLGenerator();
        }
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

        $reflection = new ReflectionClass($this->delegated);
        if ($reflection->hasProperty($name)) {
            $property = $reflection->getProperty($name);
            $property->setAccessible(true);
            $property->setValue($this->delegated, $value);
            return;
        }
        $value = Helper::isBackedEnum($value) ? (string) $value->value : (string) $value;
        $this->delegated->setAttribute($name, $value);
        return;
    }

    // turn an element into a string, using the configured renderer
    public function __toString(): string
    {
        return $this->renderer->render($this);
    }

    public function appendChild(HTMLElementDelegatorInterface|TextDelegator $child): static
    {
        // if (! \property_exists($child->delegated, 'ownerDocument') && ! \method_exists($child, 'getOwnerDocument')) {
        //     throw new Exception('The child element does not seem to have an ownerDocument.');
        // }

        if ($child->getOwnerDocument() !== $this->getOwnerDocument()) {
            /** @todo the child could be imported here */
            throw new InvalidArgumentException(
                'The child element must belong to the same document as the parent element.'
            );
        }

        $this->delegated->appendChild($child->delegated);
        return $this;
    }

    public function removeChild(HTMLElementDelegatorInterface|Text $child): static
    {
        if (! \property_exists($child, 'ownerDocument')) {
            throw new Exception('The child element must be an instance of HTMLElementDelegatorInterface or Text.');
        }

        if ($child->ownerDocument !== self::$ownerDocument) {
            /** @todo the child could be imported here */
            throw new InvalidArgumentException(
                'The child element must belong to the same document as the parent element.'
            );
        }
        if ($child instanceof HTMLElementDelegatorInterface) {
            $this->delegated->removeChild($child->delegated);
            return $this;
        }
        $this->delegated->removeChild($child);
        return $this;
    }

    public function replaceChild(
        HTMLElementDelegatorInterface $node,
        HTMLElementDelegatorInterface $child
    ): HTMLElementDelegatorInterface {
        if (! \property_exists($child, 'ownerDocument')) {
            throw new Exception('The child element must be an instance of HTMLElementDelegatorInterface or Text.');
        }
        if (! \property_exists($node, 'ownerDocument')) {
            throw new Exception('The node element must be an instance of HTMLElementDelegatorInterface or Text.');
        }
        if ($node->ownerDocument !== self::$ownerDocument) {
            /** @todo the node could be imported here */
            throw new InvalidArgumentException(
                'The node element must belong to the same document as the parent element.'
            );
        }
        $this->delegated->replaceChild($node->delegated, $child->delegated);
        return $node;
    }

    public function setRenderer(TemplateGeneratorInterface $renderer): void
    {
        $this->renderer = $renderer;
    }

    // two ways to set an attribute via HTML\Element::$property or HTML\Element->setAttribute()
    public function setAttribute(string $qualifiedName, mixed $value): static
    {
        if (\property_exists($this, $qualifiedName)) {
            // use reflection to check if this property is a BackedEnum and instantiate it with ::from()
            if ($this->{$qualifiedName} === null) {
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
        $this->delegated->setAttribute($qualifiedName, $value); // here we require string
        return $this;
    }

    public function getAttribute(string $qualifiedName): mixed
    {
        if (\property_exists($this, $qualifiedName)) {
            return $this->{$qualifiedName};
        }
        return $this->delegated->getAttribute($qualifiedName);
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
        static::$ownerDocument = $dom;
        $className = static::class;
        $qualifiedName = $className::getQualifiedName();
        $elementNode = $dom->delegated->createElement($qualifiedName);
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

    public static function getOwnerDocument(): HTMLDocumentDelegator
    {
        return static::$ownerDocument;
    }
}
