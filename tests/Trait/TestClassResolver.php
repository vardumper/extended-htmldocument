<?php

namespace Tests\Trait;

use Html\Trait\ClassResolverTrait;

class TestClassResolver
{
    use ClassResolverTrait;

    public function callGetProjectRoot()
    {
        return $this->getProjectRoot();
    }

    public function callLoadAllRelevantPhpFiles()
    {
        return $this->loadAllRelevantPhpFiles();
    }
}
