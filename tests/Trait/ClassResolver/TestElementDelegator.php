<?php

namespace Tests\Trait\ClassResolver;

use Html\Delegator\HTMLElementDelegator;

#[\Html\Mapping\Element('x-foo')]
class TestElementDelegator extends HTMLElementDelegator {
    public static string $QUALIFIED_NAME = 'x-foo';
}
