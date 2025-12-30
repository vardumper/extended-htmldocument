<?php

namespace Tests\Trait;

use Html\Trait\GeneratorResolverTrait;
use Html\Trait\ClassResolverTrait;

class TestGeneratorResolver
{
    use GeneratorResolverTrait;
    use ClassResolverTrait; // supplies getClassesImplementingInterface used by GeneratorResolver

    public function callGetGenerators(array $names): array
    {
        return $this->getGenerators($names);
    }
}
