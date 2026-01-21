<?php

use Html\Command\CreateClassCommand;
use Html\Element\BlockElement;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\BufferedOutput;

beforeEach(function () {
    $this->specPath = __DIR__ . '/../Fixtures/specifications/web-component-my-counter.yaml';
    $this->generatedClassPath = __DIR__ . '/../../src/Element/Block/MyCounter.php';

    $this->hadExistingClassFile = is_file($this->generatedClassPath);
    $this->originalClassFile = $this->hadExistingClassFile ? file_get_contents($this->generatedClassPath) : null;
});

afterEach(function () {
    if ($this->hadExistingClassFile) {
        if (is_string($this->originalClassFile)) {
            file_put_contents($this->generatedClassPath, $this->originalClassFile);
        }
        return;
    }

    if (is_file($this->generatedClassPath)) {
        unlink($this->generatedClassPath);
    }
});

test('a web-component-like YAML spec can generate a valid PHP element class', function () {
    expect(is_file($this->specPath))
        ->toBeTrue();

    $command = new CreateClassCommand();

    $definition = new InputDefinition([new InputOption('specification', 's', InputOption::VALUE_REQUIRED)]);
    $input = new ArrayInput([
        '--specification' => $this->specPath,
    ], $definition);
    $output = new BufferedOutput();

    $exitCode = $command->__invoke('my-counter', $input, $output);
    expect($exitCode)
        ->toBe(0);

    expect(is_file($this->generatedClassPath))
        ->toBeTrue();

    // Ensure the file parses by loading it.
    require_once $this->generatedClassPath;

    $fqcn = 'Html\\Element\\Block\\MyCounter';
    expect(class_exists($fqcn))
        ->toBeTrue();

    $el = new $fqcn();
    expect($el)
        ->toBeInstanceOf(BlockElement::class);

    // Basic behavior: setters exist and render writes attributes.
    $el->setValue(3)
        ->setStep(2)
        ->setLabel('Counter');
    expect((string) $el)
        ->toContain('my-counter');
    expect((string) $el)
        ->toContain('value="3"');
    expect((string) $el)
        ->toContain('step="2"');
});
