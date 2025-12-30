<?php

use Html\Trait\GeneratorResolverTrait;
use Html\Trait\ClassResolverTrait;
use Html\Mapping\TemplateGenerator;
use Html\Interface\TemplateGeneratorInterface;

#[TemplateGenerator('testgen')]
class TestGeneratorImplementation implements TemplateGeneratorInterface {
    public function getExtension(): string { return 'x'; }
    public function getNamePattern(): string { return 'x'; }
    public function canRenderElements(): bool { return false; }
    public function canRenderDocuments(): bool { return false; }
    public function isTemplated(): bool { return false; }
    public function render($elementOrDocument): ?string { return null; }
}

class TestGeneratorResolver {
    use GeneratorResolverTrait;
    use ClassResolverTrait; // supplies getClassesImplementingInterface used by GeneratorResolver

    public function callGetGenerators(array $names): array
    {
        return $this->getGenerators($names);
    }
}

test('getGenerators returns instances of annotated generators by name', function () {
    $r = new TestGeneratorResolver();

    $result = $r->callGetGenerators(['testgen']);

    expect(array_key_exists('testgen', $result))->toBeTrue();
    expect($result['testgen'])->toBeInstanceOf(TestGeneratorImplementation::class);
});
