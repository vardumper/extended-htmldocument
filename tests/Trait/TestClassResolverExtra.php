<?php

namespace Tests\Trait;

use Html\Trait\ClassResolverTrait;

class TestClassResolverExtra
{
    use ClassResolverTrait;

    public function callGetClassesExtendingClass(string $base): array
    {
        return $this->getClassesExtendingClass($base);
    }

    public function callGetClassesImplementingInterface(string $interface): array
    {
        return $this->getClassesImplementingInterface($interface);
    }

    public function callGetElementByQualifiedName(string $name): ?string
    {
        return $this->getElementByQualifiedName($name);
    }

    public function callGetDelegatorFromElement(\DOM\Element $element): ?\Html\Delegator\HTMLElementDelegator
    {
        return $this->getDelegatorFromElement($element);
    }
}
