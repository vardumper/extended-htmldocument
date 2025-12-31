<?php

/**
 * All delegators should use this trait to delegate methods and properties to the delegated object.
 * This trait provides a way to access methods and properties of the delegated object dynamically.
 * It uses reflection to access methods and properties that are not directly accessible.
 */

declare(strict_types=1);

namespace Html\Trait;

use BadMethodCallException;
use InvalidArgumentException;
use ReflectionClass;
use TypeError;

trait DelegatorTrait
{
    public function __call($name, $arguments)
    {
        foreach ($arguments as &$argument) {
            if (is_object($argument) && $argument instanceof self) {
                $argument = $argument->delegated;
            }
        }

        $reflection = new ReflectionClass($this->delegated);
        if ($reflection->hasMethod($name)) {
            $method = $reflection->getMethod($name);
            try {
                return $method->invokeArgs($this->delegated, $arguments);
            } catch (\Throwable $e) {
                \error_log($e->getMessage());
            }
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

        $reflection = new ReflectionClass($this->delegated);
        if ($reflection->hasProperty($name)) {
            $property = $reflection->getProperty($name);
            return $property->getValue($this->delegated);
        }
        throw new InvalidArgumentException(
            "Property {$name} does not exist on " . $reflection->getName() . '. However you can implement it on ' . __CLASS__
        );
    }

    public function __set($name, $value): void
    {
        $reflection = new ReflectionClass($this->delegated);
        if ($reflection->hasProperty($name)) {
            $property = $reflection->getProperty($name);
            $property->setValue($this->delegated, $value);
            return;
        }
        throw new InvalidArgumentException(
            "Property {$name} does not exist on " . $reflection->getName() . '. However you can implement it on ' . __CLASS__
        );
    }
}
