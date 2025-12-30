<?php

use Html\Trait\ClassResolverTrait;
use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\HTMLElementDelegator;

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

    public function callGetDelegatorFromElement(\DOM\Element $element): ?HTMLElementDelegator
    {
        return $this->getDelegatorFromElement($element);
    }
}

// Simple classes for testing inheritance/interface discovery
class BaseForResolverTest {}
class SubForResolverTest extends BaseForResolverTest {}
interface InterfaceForResolver {}
class ImplementsResolverTest implements InterfaceForResolver {}

// Test element delegator with Element attribute
#[\Html\Mapping\Element('x-foo')]
class TestElementDelegator extends HTMLElementDelegator {
    public static string $QUALIFIED_NAME = 'x-foo';
}

test('getClassesExtendingClass finds subclasses', function () {
    $resolver = new TestClassResolverExtra();

    $result = $resolver->callGetClassesExtendingClass(BaseForResolverTest::class);

    expect(in_array(SubForResolverTest::class, $result))->toBeTrue();
});

test('getClassesImplementingInterface finds implementations', function () {
    $resolver = new TestClassResolverExtra();

    $result = $resolver->callGetClassesImplementingInterface(InterfaceForResolver::class);

    expect(in_array(ImplementsResolverTest::class, $result))->toBeTrue();
});

test('getElementByQualifiedName finds class by attribute', function () {
    $resolver = new TestClassResolverExtra();

    $class = $resolver->callGetElementByQualifiedName('x-foo');

    expect($class)->toBe(TestElementDelegator::class);
});

test('getDelegatorFromElement returns instance of the configured class', function () {
    $doc = HTMLDocumentDelegator::createEmpty();
    $element = $doc->delegated->createElement('x-foo');

    $resolver = new TestClassResolverExtra();
    $delegator = $resolver->callGetDelegatorFromElement($element);

    expect($delegator)->toBeInstanceOf(TestElementDelegator::class);
});
