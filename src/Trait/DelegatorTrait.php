<?php

declare(strict_types=1);

namespace Html\Trait;

use BadMethodCallException;
use InvalidArgumentException;
use ReflectionClass;

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
            // var_dump(\get_class($this->delegated));
            // exit;
            $method->setAccessible(true);
            return $method->invokeArgs($this->delegated, $arguments);
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
            $property->setAccessible(true);
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
            $property->setAccessible(true);
            $property->setValue($this->delegated, $value);
            return;
        }
        throw new InvalidArgumentException(
            "Property {$name} does not exist on " . $reflection->getName() . '. However you can implement it on ' . __CLASS__
        );
    }
}
