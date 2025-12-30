<?php

namespace Tests\Trait;

use Html\Trait\ClassResolverTrait;

class TestClassResolverPrivate
{
    use ClassResolverTrait;

    public function callLoadAllPhpFiles(string $dir): void
    {
        $this->loadAllPhpFiles($dir);
    }

    public function callFindComposerRoot(string $start): ?string
    {
        return $this->findComposerRoot($start);
    }

    public function callGetPackageRoot(): string
    {
        return $this->getPackageRoot();
    }
}
