<?php

use Html\Command\CreateClassCommand;
use Html\Command\CreateEnumCommand;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\BufferedOutput;

beforeEach(function () {
    $this->anchorPath = __DIR__ . '/../../src/Element/Inline/Anchor.php';
    $this->originalAnchor = file_get_contents($this->anchorPath);
    expect($this->originalAnchor)
        ->not()
        ->toBeFalse();

    $this->classEnumPath = __DIR__ . '/../../src/Enum/ClassEnum.php';
    $this->originalClassEnum = file_get_contents($this->classEnumPath);
    expect($this->originalClassEnum)
        ->not()
        ->toBeFalse();
});

afterEach(function () {
    if (isset($this->originalAnchor) && is_string($this->originalAnchor)) {
        file_put_contents($this->anchorPath, $this->originalAnchor);
    }

    if (isset($this->originalClassEnum) && is_string($this->originalClassEnum)) {
        file_put_contents($this->classEnumPath, $this->originalClassEnum);
    }
});

test('CreateClassCommand does not generate a setClass override when class is a global attribute', function () {
    $specPath = __DIR__ . '/../Fixtures/specifications/pico-a.yaml';
    expect(is_file($specPath))
        ->toBeTrue();

    $command = new CreateClassCommand();

    // Provide an input definition that includes the --specification option.
    // This avoids relying on the command's custom public configure() method.
    $definition = new InputDefinition([new InputOption('specification', 's', InputOption::VALUE_REQUIRED)]);
    $input = new ArrayInput([
        '--specification' => $specPath,
    ], $definition);
    $output = new BufferedOutput();

    $exitCode = $command->__invoke('a', $input, $output);
    expect($exitCode)
        ->toBe(0);

    $generated = file_get_contents($this->anchorPath);
    expect($generated)
        ->not()
        ->toBeFalse();

    // Still uses the global trait
    expect($generated)
        ->toContain('use GlobalAttribute\\ClassTrait;');

    // And it must NOT generate an element-level override (framework YAML may define class choices)
    expect($generated)
        ->not()
        ->toContain('function setClass(');
});

test('CreateEnumCommand generates ClassEnum from the fixture specification', function () {
    $specPath = __DIR__ . '/../Fixtures/specifications/pico-a.yaml';
    expect(is_file($specPath))
        ->toBeTrue();

    $command = new CreateEnumCommand();

    $definition = new InputDefinition([new InputOption('specification', 's', InputOption::VALUE_REQUIRED)]);
    $input = new ArrayInput([
        '--specification' => $specPath,
    ], $definition);
    $output = new BufferedOutput();

    $exitCode = $command->__invoke($input, $output);
    expect($exitCode)
        ->toBe(0);

    $generated = file_get_contents($this->classEnumPath);
    expect($generated)
        ->not()
        ->toBeFalse();

    expect($generated)
        ->toContain('enum ClassEnum');
    expect($generated)
        ->toContain("case SECONDARY = 'secondary';");
    expect($generated)
        ->toContain("case CONTRAST = 'contrast';");
    expect($generated)
        ->toContain("case OUTLINE = 'outline';");
    expect($generated)
        ->toContain("case SECONDARY_OUTLINE = 'secondary outline';");
    expect($generated)->toContain("case CONTRAST_OUTLINE = 'contrast outline';");
});
