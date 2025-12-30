<?php

namespace Tests\Trait;

use Html\Trait\ClassResolverTrait;
use Html\Delegator\HTMLDocumentDelegator;
use Html\Delegator\HTMLElementDelegator;



test('getClassesExtendingClass finds subclasses', function () {
    $resolver = new TestClassResolverExtra();

    $result = $resolver->callGetClassesExtendingClass(\Tests\Trait\ClassResolver\BaseForResolverTest::class);

    expect(in_array(\Tests\Trait\ClassResolver\SubForResolverTest::class, $result))->toBeTrue();
});

test('getClassesImplementingInterface finds implementations', function () {
    $resolver = new TestClassResolverExtra();

    $result = $resolver->callGetClassesImplementingInterface(\Tests\Trait\ClassResolver\InterfaceForResolver::class);

    expect(in_array(\Tests\Trait\ClassResolver\ImplementsResolverTest::class, $result))->toBeTrue();
});

test('getElementByQualifiedName finds class by attribute', function () {
    $resolver = new TestClassResolverExtra();

    // ensure test element delegator class is autoloaded
    class_exists(\Tests\Trait\ClassResolver\TestElementDelegator::class);

    $class = $resolver->callGetElementByQualifiedName('x-foo');

    expect($class)->toBe(\Tests\Trait\ClassResolver\TestElementDelegator::class);
});

test('getDelegatorFromElement returns instance of the configured class', function () {
    $doc = HTMLDocumentDelegator::createEmpty();
    $element = $doc->delegated->createElement('x-foo');

    $resolver = new TestClassResolverExtra();
    $delegator = $resolver->callGetDelegatorFromElement($element);

    expect($delegator)->toBeInstanceOf(\Tests\Trait\ClassResolver\TestElementDelegator::class);
});
