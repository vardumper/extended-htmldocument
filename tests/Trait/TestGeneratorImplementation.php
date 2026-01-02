<?php

namespace Tests\Trait;

use Html\Interface\TemplateGeneratorInterface;
use Html\Mapping\TemplateGenerator;

#[TemplateGenerator('testgen')]
class TestGeneratorImplementation implements TemplateGeneratorInterface
{
    public function getExtension(): string
    {
        return 'x';
    }

    public function getNamePattern(): string
    {
        return 'x';
    }

    public function canRenderElements(): bool
    {
        return false;
    }

    public function canRenderDocuments(): bool
    {
        return false;
    }

    public function isTemplated(): bool
    {
        return false;
    }

    public function render($elementOrDocument): ?string
    {
        return null;
    }
}
